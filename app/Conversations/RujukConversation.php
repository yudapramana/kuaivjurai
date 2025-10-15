<?php

namespace App\Conversations;

use App\Services\RegistrasiService;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;

class RujukConversation extends Conversation
{
    protected array $data = [];

    public function run()
    {
        $this->intro();
    }

    protected function intro()
    {
        $this->say("🔁 <b>Layanan Rujuk</b><br>Isi data singkat berikut untuk pengajuan awal.");
        $this->askNoAkteCerai();
    }

    protected function askNoAkteCerai()
    {
        $this->ask("Nomor akta/penetapan cerai (bisa ketik <code>lewati</code>)?", function (Answer $answer) {
            $val = trim($answer->getText());
            if (strtolower($val) !== 'lewati') $this->data['no_akta'] = $val;
            $this->askDataPribadi();
        });
    }

    protected function askDataPribadi()
    {
        $this->ask("Nama lengkap SUAMI (saat ini)?", function (Answer $a) {
            $v = trim($a->getText());
            if (strlen($v) < 3) { $this->say("Nama terlalu pendek."); return $this->repeat(); }
            $this->data['suami'] = $v;

            $this->ask("Nama lengkap ISTRI (saat ini)?", function (Answer $b) {
                $v = trim($b->getText());
                if (strlen($v) < 3) { $this->say("Nama terlalu pendek."); return $this->repeat(); }
                $this->data['istri'] = $v;

                $this->askTanggalRujuk();
            });
        });
    }

    protected function askTanggalRujuk()
    {
        $this->ask("Rencana tanggal rujuk (YYYY-MM-DD) atau ketik <code>lewati</code>:", function (Answer $a) {
            $tgl = trim($a->getText());
            if (strtolower($tgl) !== 'lewati' && !preg_match('/^\d{4}-\d{2}-\d{2}$/', $tgl)) {
                $this->say("Format tanggal tidak valid. Contoh 2025-11-07"); return $this->repeat();
            }
            if (strtolower($tgl) !== 'lewati') $this->data['tanggal'] = $tgl;

            $this->askKontak();
        });
    }

    protected function askKontak()
    {
        $this->ask("Nomor WhatsApp aktif (08xxxxxxxxxx)?", function (Answer $a) {
            $hp = preg_replace('/\D/', '', $a->getText());
            if (strlen($hp) < 10) { $this->say("Nomor kurang valid."); return $this->repeat(); }
            $this->data['wa'] = $hp;
            $this->konfirmasi();
        });
    }

    protected function konfirmasi()
    {
        $ringkas = "✅ Data ringkas:<br>"
            ."• Suami: ".($this->data['suami']??'-')."<br>"
            ."• Istri: ".($this->data['istri']??'-')."<br>"
            ."• No. Akta Cerai: ".($this->data['no_akta']??'-')."<br>"
            ."• Tgl Rujuk: ".($this->data['tanggal']??'-')."<br>"
            ."• WA: ".($this->data['wa']??'-');

        $q = Question::create($ringkas."<br><br>Simpan pengajuan awal rujuk?")
            ->addButtons([
                Button::create('Simpan')->value('save'),
                Button::create('Ulangi')->value('retry'),
                Button::create('Batal')->value('cancel'),
            ]);

        $this->ask($q, function (Answer $ans) {
            $v = $ans->getValue() ?: strtolower($ans->getText());
            if ($v === 'save') {
                // TODO: simpan ke DB/service-mu
                // $code = 'RJK-'.strtoupper(substr(md5(json_encode($this->data).microtime()),0,6));
                $service = app(RegistrasiService::class);
                $code = $service->create('rujuk', $this->data);
                $this->say("Tersimpan. Kode registrasi: <b>{$code}</b>.");
                return $this->bot->startConversation(new FeedbackConversation('rujuk'));
            }
            if ($v === 'retry') { $this->data = []; return $this->intro(); }
            $this->say("Dibatalkan. Ketik <b>rujuk</b> kapan pun siap.");
            $this->bot->startConversation(new WelcomeConversation());
        });
    }
}
