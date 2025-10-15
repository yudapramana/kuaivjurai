<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;

class FAQConversation extends Conversation
{
    public function run()
    {
        $this->menu();
    }

    protected function menu()
    {
        $q = Question::create("ℹ️ <b>FAQ</b> — pilih pertanyaan:")
            ->addButtons([
                Button::create('Syarat daftar nikah?')->value('faq_nikah'),
                Button::create('Berapa lama legalisasi?')->value('faq_leg'),
                Button::create('Jadwal Bimwin?')->value('faq_bmw'),
                Button::create('Jam layanan & lokasi')->value('faq_jam'),
                Button::create('⬅️ Kembali')->value('back'),
            ]);

        $this->ask($q, function (Answer $ans) {
            $v = $ans->getValue() ?: strtolower($ans->getText());
            switch ($v) {
                case 'faq_nikah':
                    $this->say("Syarat ringkas Nikah: N1–N4, fotokopi KTP/KK, pas foto 3×4 (5 lbr), dan berkas tambahan bila duda/janda. Minimal H-10 kerja.");
                    break;
                case 'faq_leg':
                    $this->say("Legalisasi selesai rata-rata H+1 kerja (bila berkas lengkap).");
                    break;
                case 'faq_bmw':
                    $this->say("Bimwin bergilir tiap pekan (kuota terbatas). Pendaftaran via chat: ketik <b>bimwin</b>.");
                    break;
                case 'faq_jam':
                    $this->say("Jam Layanan: Senin–Jumat 08.00–16.00 WIB (Istirahat 12.00–13.00). Alamat: KUA IV Jurai, Pesisir Selatan.");
                    break;
                default:
                    return $this->end();
            }
            $this->menu();
        });
    }

    protected function end()
    {
        $q = Question::create("Perlu bantuan lain?")
            ->addButtons([
                Button::create('Menu Utama')->value('menu'),
                Button::create('Selesai')->value('done'),
            ]);
        $this->ask($q, function (Answer $a) {
            $v = $a->getValue() ?: strtolower($a->getText());
            if ($v === 'menu') return $this->bot->startConversation(new WelcomeConversation());
            $this->say("Baik, terima kasih 🙏");
            $this->bot->startConversation(new FeedbackConversation('faq'));
        });
    }
}
