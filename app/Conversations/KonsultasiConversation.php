<?php

namespace App\Conversations;

use App\Services\RegistrasiService;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;

class KonsultasiConversation extends Conversation
{
    protected array $data = [];

    public function run()
    {
        $this->intro();
    }

    protected function intro()
    {
        $this->say("👨‍👩‍👧 <b>Konsultasi/Mediasi Keluarga</b><br>Isi ringkas untuk penjadwalan.");
        $this->askTopik();
    }

    protected function askTopik()
    {
        $q = Question::create("Topik utama konsultasi?")
            ->addButtons([
                Button::create('Pernikahan')->value('pernikahan'),
                Button::create('Keluarga & Anak')->value('keluarga'),
                Button::create('Mediasi Perselisihan')->value('mediasi'),
                Button::create('Lainnya')->value('lain'),
            ]);

        $this->ask($q, function (Answer $ans) {
            $v = $ans->getValue() ?: strtolower($ans->getText());
            $map = ['pernikahan','keluarga','mediasi','lain'];
            if (!in_array($v, $map)) { $this->say("Pilih via tombol ya."); return $this->repeat(); }
            $this->data['topik'] = $v;
            $this->askRingkasan();
        });
    }

    protected function askRingkasan()
    {
        $this->ask("Ringkasan masalah (1–2 kalimat, tanpa data sensitif):", function (Answer $a) {
            $v = trim($a->getText());
            if (strlen($v) < 10) { $this->say("Jelaskan sedikit lebih detail ya."); return $this->repeat(); }
            $this->data['ringkasan'] = $v;
            $this->askKontak();
        });
    }

    protected function askKontak()
    {
        $this->ask("Nomor WhatsApp untuk dihubungi (08xxxxxxxxxx)?", function (Answer $a) {
            $hp = preg_replace('/\D/', '', $a->getText());
            if (strlen($hp) < 10) { $this->say("Nomor kurang valid."); return $this->repeat(); }
            $this->data['wa'] = $hp;
            $this->konfirmasi();
        });
    }

    protected function konfirmasi()
    {
        $label = [
            'pernikahan' => 'Pernikahan',
            'keluarga'   => 'Keluarga & Anak',
            'mediasi'    => 'Mediasi Perselisihan',
            'lain'       => 'Lainnya'
        ];

        $ringkas = "✅ Data ringkas:<br>"
            ."• Topik: ".($label[$this->data['topik']] ?? '-')."<br>"
            ."• Ringkasan: ".e($this->data['ringkasan'] ?? '-')."<br>"
            ."• WA: ".($this->data['wa'] ?? '-');

        $q = Question::create($ringkas."<br><br>Kirim permintaan konsultasi?")
            ->addButtons([
                Button::create('Kirim')->value('save'),
                Button::create('Ulangi')->value('retry'),
                Button::create('Batal')->value('cancel'),
            ]);

        $this->ask($q, function (Answer $ans) {
            $v = $ans->getValue() ?: strtolower($ans->getText());
            if ($v === 'save') {
                // TODO: simpan ke DB/service-mu
                // $code = 'KSL-'.strtoupper(substr(md5(json_encode($this->data).microtime()),0,6));
                $service = app(RegistrasiService::class);
                $code = $service->create('konsultasi', $this->data);
                $this->say("Permintaan dikirim. Kode: <b>{$code}</b>. Petugas akan menghubungi via WA.");
                return $this->bot->startConversation(new FeedbackConversation('konsultasi'));
            }
            if ($v === 'retry') { $this->data = []; return $this->intro(); }
            $this->say("Dibatalkan. Ketik <b>konsultasi</b> untuk memulai lagi.");
            $this->bot->startConversation(new WelcomeConversation());
        });
    }
}
