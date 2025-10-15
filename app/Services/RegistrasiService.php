<?php

namespace App\Services;

use App\Models\Registration;
use App\Models\Feedback;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class RegistrasiService
{
    /**
     * Buat registrasi baru dari data slot-filling.
     * $type: 'nikah'|'rujuk'|'bimwin'|'legalisasi'|'konsultasi'
     * $data: array hasil conversation (nama, tgl, lokasi, wa, dll)
     */
    public function create(string $type, array $data): string
    {
        // generator kode sesuai prefix
        $prefix = match ($type) {
            'nikah'      => 'NKH',
            'rujuk'      => 'RJK',
            'bimwin'     => 'BMW',
            'legalisasi' => 'LEG',
            'konsultasi' => 'KSL',
            default      => 'REG',
        };

        $code = $prefix . '-' . strtoupper(Str::random(6));

        // map ringan dari $data
        $name1 = $data['nama_suami'] ?? $data['suami'] ?? $data['pemohon'] ?? ($data['pasangan'] ?? null);
        $name2 = $data['nama_istri'] ?? $data['istri'] ?? null;

        $scheduled = $data['tanggal_akad'] ?? $data['tanggal'] ?? null;
        $scheduled_at = $scheduled ? Carbon::parse($scheduled)->format('Y-m-d') : null;

        $location = $data['lokasi'] ?? ($data['gelombang'] ?? null); // bebas; untuk bimwin kita simpan gelombang di sini
        $phone    = $data['wa'] ?? $data['phone'] ?? null;

        Registration::create([
            'type'         => $type,
            'code'         => $code,
            'name_1'       => is_string($name1) ? $name1 : (is_string($data['pasangan'] ?? null) ? $data['pasangan'] : null),
            'name_2'       => $name2,
            'phone'        => $phone,
            'scheduled_at' => $scheduled_at,
            'location'     => $location,
            'status'       => 'pending',
            'progress'     => 10, // default mock
            'note'         => null,
            'payload'      => $data,
            'created_ip'   => request()?->ip(),
        ]);

        return $code;
    }

    /**
     * Cari status berdasarkan kode registrasi atau nomor HP.
     * Return contoh:
     * ['jenis'=>'Pendaftaran Nikah','progress'=>'Verifikasi Dokumen','persen'=>60,'catatan'=>'...','code'=>'NKH-AB12CD']
     */
    public function status(string $codeOrPhone): ?array
    {
        $q = Registration::query()
            ->when($this->looksLikeCode($codeOrPhone), fn($qq) => $qq->where('code', $codeOrPhone))
            ->when(!$this->looksLikeCode($codeOrPhone), fn($qq) => $qq->where('phone', $this->digits($codeOrPhone)))
            ->latest('id');

        $reg = $q->first();
        if (!$reg) return null;

        return [
            'jenis'   => $this->typeLabel($reg->type),
            'tahap'   => $this->statusLabel($reg->status),
            'persen'  => $reg->progress ?? 0,
            'catatan' => $reg->note ?? '-',
            'code'    => $reg->code,
        ];
    }

    /**
     * Update progress/status sederhana (untuk admin backoffice nanti).
     */
    public function updateProgress(string $code, int $percent, ?string $status = null, ?string $note = null): bool
    {
        $reg = Registration::where('code', $code)->first();
        if (!$reg) return false;

        $reg->progress = max(0, min(100, $percent));
        if ($status) $reg->status = $status;
        if ($note !== null) $reg->note = $note;
        return $reg->save();
    }

    /**
     * Simpan feedback pengguna.
     */
    // public function saveFeedback(string $context, ?int $rating, ?string $comment, ?string $registrationCode = null, ?string $phone = null): int
    // {
    //     $fb = Feedback::create([
    //         'context'           => $context,
    //         'rating'            => $rating,
    //         'comment'           => $comment,
    //         'registration_code' => $registrationCode,
    //         'phone'             => $this->digits($phone),
    //         'created_ip'        => request()?->ip(),
    //     ]);

    //     return (int)$fb->id;
    // }

    public function saveFeedback(
        string $context,
        ?int $rating,
        ?string $comment,
        ?string $registrationCode = null,
        ?string $phone = null
    ): int {
        try {
            $fb = Feedback::create([
                'context'           => $context,
                'rating'            => $rating,
                'comment'           => $comment,
                'registration_code' => $registrationCode,
                'phone'             => $this->digits($phone),
                'created_ip'        => request()?->ip(),
            ]);

            return (int) $fb->id;
        } catch (\Throwable $e) {
            \Log::error('Failed to save feedback', [
                'context' => $context,
                'rating'  => $rating,
                'code'    => $registrationCode,
                'phone'   => $phone,
                'error'   => $e->getMessage(),
            ]);
            return 0;
        }
    }


    // ===== Helpers =====
    protected function looksLikeCode(string $s): bool
    {
        return (bool) preg_match('/^[A-Z]{3}-[A-Z0-9]{6}$/', strtoupper($s));
    }

    protected function digits(?string $s): ?string
    {
        if (!$s) return null;
        $d = preg_replace('/\D/', '', $s);
        return $d ?: null;
    }

    protected function typeLabel(string $type): string
    {
        return match ($type) {
            'nikah'      => 'Pendaftaran Nikah',
            'rujuk'      => 'Rujuk',
            'bimwin'     => 'Bimbingan Perkawinan',
            'legalisasi' => 'Legalisasi Dokumen',
            'konsultasi' => 'Konsultasi/Mediasi',
            default      => ucfirst($type),
        };
    }

    protected function statusLabel(string $status): string
    {
        return match ($status) {
            'pending'   => 'Pengajuan Diterima',
            'verifying' => 'Verifikasi Dokumen',
            'approved'  => 'Disetujui',
            'rejected'  => 'Ditolak',
            'cancelled' => 'Dibatalkan',
            default     => ucfirst($status),
        };
    }
}
