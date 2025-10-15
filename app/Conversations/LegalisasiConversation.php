<?php

namespace App\Conversations;

use App\Services\RegistrasiService;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;

class LegalisasiConversation extends Conversation
{
    protected array $data = [];

    public function run()
    {
        $this->intro();
    }

    protected function intro()
    {
        $this->say("📄 <b>Legalisasi Dokumen</b><br>Isi kebutuhan berikut untuk membuat tiket legalisasi.");
        $this->askJenisDokumen();
    }

    protected function askJenisDokumen()
    {
        $q = Question::create("Jenis dokumen yang ingin dilegalisasi?")
            ->addButtons([
                Button::create('Buku Nikah')->value('buku_nikah'),
                Button::create('Akte KUA (lainnya)')->value('akte_kua'),
                Button::create('Lainnya')->value('lain'),
            ]);

        $this->ask($q, function (Answer $ans) {
            $v = $ans->getValue() ?: strtolower($ans->getText());
            $map = ['buku_nikah','akte_kua','lain'];
            if (!in_array($v, $map)) { $this->say("Pilih via tombol ya."); return $this->repeat(); }
            $this->data['jenis'] = $v;
            $this->askJumlahLembar();
        });
    }

    protected function askJumlahLembar()
    {
        $this->ask("Perkiraan jumlah lembar (angka)?", function (Answer $a) {
            $n = (int) preg_replace('/\D/', '', $a->getText());
            if ($n <= 0) { $this->say("Harus angka lebih dari 0."); return $this->repeat(); }
            $this->data['lembar'] = $n;
            $this->askKontak();
        });
    }

    protected function askKontak()
    {
        $this->ask("Nomor WhatsApp pemohon (08xxxxxxxxxx)?", function (Answer $a) {
            $hp = preg_replace('/\D/', '', $a->getText());
            if (strlen($hp) < 10) { $this->say("Nomor kurang valid."); return $this->repeat(); }
            $this->data['wa'] = $hp;
            $this->konfirmasi();
        });
    }

    protected function konfirmasi()
    {
        $jenisLabel = [
            'buku_nikah' => 'Buku Nikah',
            'akte_kua'   => 'Akte KUA (lainnya)',
            'lain'       => 'Lainnya'
        ];

        $ringkas = "✅ Data ringkas:<br>"
            ."• Jenis: ".($jenisLabel[$this->data['jenis']] ?? '-')."<br>"
            ."• Lembar: ".($this->data['lembar'] ?? '-')."<br>"
            ."• WA: ".($this->data['wa'] ?? '-');

        $q = Question::create($ringkas."<br><br>Buat tiket legalisasi?")
            ->addButtons([
                Button::create('Buat')->value('save'),
                Button::create('Ulangi')->value('retry'),
                Button::create('Batal')->value('cancel'),
            ]);

        $this->ask($q, function (Answer $ans) {
            $v = $ans->getValue() ?: strtolower($ans->getText());
            if ($v === 'save') {
                // TODO: simpan ke DB/service-mu
                // $code = 'LEG-'.strtoupper(substr(md5(json_encode($this->data).microtime()),0,6));
                $service = app(RegistrasiService::class);
                $code = $service->create('legalisasi', $this->data);
                $this->say("Tiket dibuat. Kode: <b>{$code}</b>. Estimasi selesai H+1 kerja.");
                return $this->bot->startConversation(new FeedbackConversation('legalisasi'));
            }
            if ($v === 'retry') { $this->data = []; return $this->intro(); }
            $this->say("Dibatalkan. Ketik <b>legalisasi</b> jika ingin mulai lagi.");
            $this->bot->startConversation(new WelcomeConversation());
        });
    }
}
