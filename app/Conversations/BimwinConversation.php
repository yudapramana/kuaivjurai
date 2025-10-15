<?php

namespace App\Conversations;

use App\Services\RegistrasiService;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;

class BimwinConversation extends Conversation
{
    protected array $data = [];

    public function run()
    {
        $this->intro();
    }

    protected function intro()
    {
        $this->say("📚 <b>Bimbingan Perkawinan (Bimwin)</b><br>Daftar antrian/jadwal dengan data singkat berikut.");
        $this->askNamaCalon();
    }

    protected function askNamaCalon()
    {
        $this->ask("Nama pasangan (format: Suami / Istri)?", function (Answer $a) {
            $v = trim($a->getText());
            if (strlen($v) < 5 || !str_contains($v, '/')) { $this->say("Gunakan format: Nama Suami / Nama Istri."); return $this->repeat(); }
            $this->data['pasangan'] = $v;
            $this->askPilihanGelombang();
        });
    }

    protected function askPilihanGelombang()
    {
        $q = Question::create("Pilih opsi jadwal (tentatif):")
            ->addButtons([
                Button::create('Gelombang A (Sabtu pagi)')->value('A'),
                Button::create('Gelombang B (Sabtu siang)')->value('B'),
                Button::create('Gelombang C (Minggu pagi)')->value('C'),
            ]);

        $this->ask($q, function (Answer $ans) {
            $g = $ans->getValue() ?: strtoupper(trim($ans->getText()));
            if (!in_array($g, ['A','B','C'])) { $this->say("Pilih via tombol ya."); return $this->repeat(); }
            $this->data['gelombang'] = $g;
            $this->askKontak();
        });
    }

    protected function askKontak()
    {
        $this->ask("Nomor WhatsApp penanggung jawab pendaftaran (08xxxxxxxxxx)?", function (Answer $a) {
            $hp = preg_replace('/\D/', '', $a->getText());
            if (strlen($hp) < 10) { $this->say("Nomor kurang valid."); return $this->repeat(); }
            $this->data['wa'] = $hp;
            $this->konfirmasi();
        });
    }

    protected function konfirmasi()
    {
        $ringkas = "✅ Data ringkas:<br>"
            ."• Pasangan: ".($this->data['pasangan']??'-')."<br>"
            ."• Gelombang: ".($this->data['gelombang']??'-')."<br>"
            ."• WA: ".($this->data['wa']??'-');

        $q = Question::create($ringkas."<br><br>Kirim permohonan slot Bimwin?")
            ->addButtons([
                Button::create('Kirim')->value('save'),
                Button::create('Ulangi')->value('retry'),
                Button::create('Batal')->value('cancel'),
            ]);

        $this->ask($q, function (Answer $ans) {
            $v = $ans->getValue() ?: strtolower($ans->getText());
            if ($v === 'save') {
                // TODO: simpan ke DB/service-mu
                // $code = 'BMW-'.strtoupper(substr(md5(json_encode($this->data).microtime()),0,6));
                $service = app(RegistrasiService::class);
                $code = $service->create('bimwin', $this->data);
                $this->say("Permohonan dicatat. Kode: <b>{$code}</b>. Info jadwal final menyusul.");
                return $this->bot->startConversation(new FeedbackConversation('bimwin'));
            }
            if ($v === 'retry') { $this->data = []; return $this->intro(); }
            $this->say("Dibatalkan. Ketik <b>bimwin</b> lagi jika ingin mendaftar.");
            $this->bot->startConversation(new WelcomeConversation());
        });
    }
}
