{{-- resources/views/kua/registrations-index.blade.php --}}
@extends('layouts.landing.master')
@section('title', 'Daftar Registrasi Layanan KUA — Satu Halaman')

@section('_styles')
    <style>
        /* Layout A4 & cetak satu halaman */
        @page {
            size: A4;
            margin: 16mm;
        }

        @media print {
            .no-print {
                display: none !important;
            }

            body {
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            table {
                page-break-inside: avoid;
            }
        }

        .page-wrap {
            background: #fff;
            border-radius: .5rem;
            box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, .06);
            padding: 1.25rem;
        }

        h1,
        h2,
        h3,
        h4 {
            margin: 0
        }

        .header {
            text-align: center;
            margin-bottom: .75rem
        }

        .meta {
            text-align: center;
            font-size: .9rem;
            color: #6c757d;
            margin-bottom: .75rem
        }

        .category {
            background: #f1f3f5;
            color: #212529;
            padding: .5rem .75rem;
            border-radius: .375rem;
            font-weight: 600;
            font-size: .95rem;
            margin: .75rem 0 .25rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: .92rem
        }

        th,
        td {
            border: 1px solid #dee2e6;
            padding: .45rem .55rem;
            vertical-align: top
        }

        th {
            background: #e9ecef;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .02em;
            font-size: .78rem
        }

        .w-no {
            width: 44px;
            text-align: center
        }

        .w-code {
            width: 110px;
            white-space: nowrap
        }

        .w-phone {
            width: 110px;
            white-space: nowrap
        }

        .w-date {
            width: 108px;
            white-space: nowrap;
            text-align: center
        }

        .w-loc {
            width: 90px;
            white-space: nowrap;
            text-align: center
        }

        .w-status {
            width: 112px;
            white-space: nowrap;
            text-align: center
        }

        .w-progress {
            width: 88px;
            white-space: nowrap;
            text-align: center
        }

        .compact th,
        .compact td {
            padding: .4rem .5rem
        }

        .text-truncate-1 {
            max-width: 320px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis
        }

        .footnote {
            font-size: .85rem;
            color: #6c757d;
            margin-top: .5rem
        }

        /* Badge sederhana (tanpa dependency) */
        .badge {
            display: inline-block;
            padding: .2rem .5rem;
            border-radius: .35rem;
            font-size: .75rem;
            font-weight: 600
        }

        .bg-pending {
            background: #fff3cd;
            color: #664d03
        }

        .bg-verifying {
            background: #cff4fc;
            color: #055160
        }

        .bg-approved {
            background: #d1e7dd;
            color: #0f5132
        }

        .bg-rejected {
            background: #f8d7da;
            color: #842029
        }

        .bg-cancelled {
            background: #e2e3e5;
            color: #41464b
        }

        /* Hero atas opsional */
        .all-services {
            background-image: url('http://res.cloudinary.com/dezj1x6xp/image/upload/v1760511183/PandanViewMandeh/gqcckvf89k13rihjnlil.jpg');
            background-size: cover;
            background-position: center;
            opacity: .92
        }
    </style>
@endsection

@section('content')
    @php
        use Illuminate\Support\Arr;
        use Illuminate\Support\Str;
        use Illuminate\Support\Carbon;

        // Urutan & label type
        $typeOrder = ['nikah', 'rujuk', 'bimwin', 'legalisasi', 'konsultasi'];
        $typeLabel = [
            'nikah' => 'REGISTRASI NIKAH',
            'rujuk' => 'REGISTRASI RUJUK',
            'bimwin' => 'REGISTRASI BIMBINGAN PERKAWINAN (BIMWIN)',
            'legalisasi' => 'REGISTRASI LEGALISASI',
            'konsultasi' => 'REGISTRASI KONSULTASI',
        ];

        // Map lokasi
        $locLabel = [
            'kua' => 'Di KUA',
            'luar' => 'Luar KUA',
        ];

        // Map status -> badge class
        $statusClass = [
            'pending' => 'bg-pending',
            'verifying' => 'bg-verifying',
            'approved' => 'bg-approved',
            'rejected' => 'bg-rejected',
            'cancelled' => 'bg-cancelled',
        ];

        // Grouping per type (menerima Collection/array)
        $regs = collect($registrations ?? [])->groupBy(fn($r) => strtolower($r['type'] ?? ($r->type ?? '')));
        // Pastikan urutan tabel mengikuti $typeOrder
        $grouped = collect($typeOrder)
            ->mapWithKeys(function ($t) use ($regs) {
                return [$t => $regs->get($t, collect())];
            })
            ->filter(fn($c) => $c && $c->count());

        // Helper: format tanggal aman
        $fmt = function ($date) {
            if (empty($date)) {
                return '—';
            }
            try {
                return Carbon::parse($date)->translatedFormat('d M Y');
            } catch (\Throwable $e) {
                return e($date);
            }
        };

        // Helper: potong catatan
        $shortNote = function ($text) {
            $t = trim((string) $text);
            if ($t === '') {
                return '—';
            }
            return Str::limit(strip_tags($t), 110);
        };
    @endphp

    <div class="all-services text-secondary px-4 py-5 text-center">
        <div class="py-5">
            <h1 class="display-6 fw-bold text-white">Daftar Registrasi Layanan</h1>
            <div class="col-lg-8 mx-auto py-2">
                <p class="mb-0 text-white-50">Ringkasan registrasi terbaru per jenis layanan</p>
            </div>
        </div>
    </div>

    <div class="container my-4">
        <div class="no-print mb-3 mt-3 d-flex gap-2 align-items-center">
            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary btn-sm">← Kembali</a>
            <button onclick="window.print()" class="btn btn-primary btn-sm">🖨 Cetak</button>
            {{-- Filter opsional (non-fungsional di view ini; aktifkan di route/controller jika perlu) --}}
            {{-- <form method="GET" class="ms-auto d-flex gap-2">
        <input type="date" name="from" class="form-control form-control-sm">
        <input type="date" name="to" class="form-control form-control-sm">
        <select name="status" class="form-select form-select-sm">
          <option value="">Semua Status</option>
          <option>pending</option><option>verifying</option><option>approved</option><option>rejected</option><option>cancelled</option>
        </select>
        <button class="btn btn-success btn-sm">Terapkan</button>
      </form> --}}
        </div>

        <div class="page-wrap">
            <div class="header">
                <h1 class="h5 mb-1">DAFTAR REGISTRASI LAYANAN</h1>
                <div class="h6">KANTOR URUSAN AGAMA IV JURAI</div>
            </div>
            <div class="meta">Tabel ringkas per kategori/type layanan</div>

            {{-- Loop per type --}}
            @forelse($grouped as $type => $rows)
                <div class="category">{{ $typeLabel[$type] ?? Str::upper($type) }}</div>

                <table class="compact mb-3">
                    <thead>
                        <tr>
                            <th class="w-no">No</th>
                            <th class="w-code">Kode</th>
                            <th>Pemohon / Penanggung jawab</th>
                            @if (in_array($type, ['nikah', 'rujuk', 'bimwin']))
                                <th>Pasangan</th>
                            @endif
                            <th class="w-phone">Telepon</th>
                            <th class="w-date">Jadwal</th>
                            <th class="w-loc">Lokasi</th>
                            <th class="w-status">Status</th>
                            <th class="w-progress">Progress</th>
                            <th>Catatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rows as $i => $r)
                            @php
                                $code = $r['code'] ?? $r->code;
                                $name1 = $r['name_1'] ?? $r->name_1;
                                $name2 = $r['name_2'] ?? $r->name_2;
                                $phone = $r['phone'] ?? $r->phone;
                                $scheduled = $r['scheduled_at'] ?? $r->scheduled_at;
                                $location = strtolower($r['location'] ?? ($r->location ?? ''));
                                $status = strtolower($r['status'] ?? ($r->status ?? 'pending'));
                                $progress = (int) ($r['progress'] ?? ($r->progress ?? 0));
                                $note = $r['note'] ?? $r->note;
                            @endphp
                            <tr>
                                <td class="w-no">{{ $i + 1 }}</td>
                                <td class="w-code"><b>{{ $code }}</b></td>
                                <td class="text-truncate-1" title="{{ $name1 }}">{{ $name1 ?: '—' }}</td>

                                @if (in_array($type, ['nikah', 'rujuk', 'bimwin']))
                                    <td class="text-truncate-1" title="{{ $name2 }}">{{ $name2 ?: '—' }}</td>
                                @endif

                                <td class="w-phone">
                                    @if ($phone)
                                        <a href="https://wa.me/{{ preg_replace('/\D+/', '', $phone) }}" target="_blank">{{ $phone }}</a>
                                    @else
                                        —
                                    @endif
                                </td>

                                <td class="w-date">{{ $fmt($scheduled) }}</td>
                                <td class="w-loc">{{ $locLabel[$location] ?? ($location ? ucfirst($location) : '—') }}</td>
                                <td class="w-status">
                                    <span class="badge {{ $statusClass[$status] ?? 'bg-pending' }}">{{ Str::upper($status) }}</span>
                                </td>
                                <td class="w-progress">
                                    {{ max(0, min(100, $progress)) }}%
                                </td>
                                <td class="text-truncate-1" title="{{ trim((string) $note) }}">{{ $shortNote($note) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @empty
                <div class="alert alert-secondary">Belum ada data registrasi.</div>
            @endforelse

            <div class="footnote">
                <em>*Kontak layanan: 0823-6424-6343 • Instagram: @kuaivjurai • YouTube: @KUA IV Jurai</em>
            </div>
        </div>
    </div>
@endsection
