<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use App\Services\RegistrasiService;

class PendaftaranNikahConversation extends Conversation
{
    protected array $data = [];

    public function run()
    {
        $this->intro();
    }

    protected function intro()
    {
        $this->say("📝 <b>Pendaftaran Nikah</b><br>Isi data singkat berikut. Kamu bisa ketik <code>lewati</code> untuk skip pertanyaan tertentu.");
        $this->askCalonNama();
    }

    protected function askCalonNama()
    {
        $this->ask("Nama lengkap CALON SUAMI?", function (Answer $answer) {
            $txt = trim($answer->getText());
            if (strtolower($txt) !== 'lewati' && strlen($txt) < 3) {
                $this->say("Nama terlalu pendek, coba lagi ya.");
                return $this->askCalonNama();
            }
            if (strtolower($txt) !== 'lewati') $this->data['nama_suami'] = $txt;

            $this->ask("Nama lengkap CALON ISTRI?", function (Answer $answer) {
                $txt = trim($answer->getText());
                if (strtolower($txt) !== 'lewati' && strlen($txt) < 3) {
                    $this->say("Nama terlalu pendek, coba lagi ya.");
                    return $this->repeat();
                }
                if (strtolower($txt) !== 'lewati') $this->data['nama_istri'] = $txt;
                $this->askTanggalAkad();
            });
        });
    }

    protected function askTanggalAkad()
    {
        $this->ask("Target tanggal akad (format YYYY-MM-DD)?", function (Answer $answer) {
            $tgl = trim($answer->getText());
            if (strtolower($tgl) !== 'lewati' && !preg_match('/^\d{4}-\d{2}-\d{2}$/', $tgl)) {
                $this->say("Format tanggal tidak valid. Contoh: 2025-11-07");
                return $this->askTanggalAkad();
            }
            if (strtolower($tgl) !== 'lewati') $this->data['tanggal_akad'] = $tgl;
            $this->askLokasiAkad();
        });
    }

    protected function askLokasiAkad()
    {
        $q = Question::create("Lokasi akad?")
            ->addButtons([
                Button::create('Di KUA')->value('kua'),
                Button::create('Di Luar KUA')->value('luar'),
            ]);

        $this->ask($q, function (Answer $answer) {
            $val = $answer->getValue() ?: strtolower($answer->getText());
            if (!in_array($val, ['kua','luar'])) {
                $this->say("Pilih via tombol ya.");
                return $this->askLokasiAkad();
            }
            $this->data['lokasi'] = $val;

            $this->ask("Nomor WhatsApp yang bisa dihubungi? (contoh: 08xxxxxxxxxx)", function (Answer $answer) {
                $hp = preg_replace('/\D/', '', $answer->getText());
                if (strlen($hp) < 10) {
                    $this->say("Nomor kurang valid. Coba lagi.");
                    return $this->repeat();
                }
                $this->data['wa'] = $hp;

                $this->konfirmasi();
            });
        });
    }

    protected function konfirmasi()
    {
        $ringkas = "✅ Data ringkas:<br>"
            . "• Suami: " . ($this->data['nama_suami'] ?? '-') . "<br>"
            . "• Istri: " . ($this->data['nama_istri'] ?? '-') . "<br>"
            . "• Tanggal: " . ($this->data['tanggal_akad'] ?? '-') . "<br>"
            . "• Lokasi: " . (isset($this->data['lokasi']) && $this->data['lokasi']==='kua' ? 'KUA' : 'Luar KUA') . "<br>"
            . "• WA: " . ($this->data['wa'] ?? '-');

        $q = Question::create($ringkas."<br><br>Simpan pengajuan awal?")
            ->addButtons([
                Button::create('Simpan')->value('save'),
                Button::create('Ulangi')->value('retry'),
                Button::create('Batal')->value('cancel'),
            ]);

        $this->ask($q, function (Answer $answer) {
            $v = $answer->getValue() ?: strtolower($answer->getText());
            switch ($v) {
                case 'save':
                    // TODO: ganti dengan service/DB mu sendiri
                    // contoh: $code = RegistrasiService::create($this->data);

                    // $code = 'NKH-'.strtoupper(substr(md5(json_encode($this->data).microtime()),0,6));
                    $service = app(RegistrasiService::class);
                    $code = $service->create('nikah', $this->data);
                    $this->data['kode'] = $code;

                    $this->say("Pengajuan awal tersimpan. Kode registrasi: <b>{$code}</b><br>Gunakan menu <b>Cek Status</b> untuk memantau.");
                    $this->say("Syarat berkas lengkap & alur akan kami kirim via WA jika diperlukan. Terima kasih 🙏");
                    $this->bot->startConversation(new FeedbackConversation('nikah'));
                    break;

                case 'retry':
                    $this->data = [];
                    $this->intro();
                    break;

                default:
                    $this->say("Dibatalkan. Kapan pun siap, ketik <b>nikah</b> lagi ya.");
                    $this->bot->startConversation(new WelcomeConversation());
            }
        });
    }
}
