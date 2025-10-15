<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Incoming\Answer;
use App\Conversations\FeedbackConversation;
use App\Conversations\PelayananConversation;
use App\Conversations\PendaftaranNikahConversation;
use App\Conversations\TrackingConversation;


class WelcomeConversation extends Conversation
{
    public function run()
    {
        $this->greet();
    }

    protected function greet()
    {
        $name = $this->bot->getUser()?->getFirstName() ?: null;
        $this->say("Assalamu’alaikum 👋".($name ? " $name" : "")."<br><b>Selamat datang di Palanta Sakinah — KUA IV Jurai</b>.");

        $this->askLanguage();
    }

    protected function askLanguage()
    {
        $q = Question::create("Pilih bahasa / Choose language:")
            ->addButtons([
                Button::create('🇮🇩 Indonesia')->value('id'),
                Button::create('🇬🇧 English')->value('en'),
            ]);

        $this->ask($q, function (Answer $answer) {
            $lang = $answer->getValue() ?: 'id';
            $this->bot->userStorage()->save(['lang' => $lang]);

            $this->askMenu();
        });
    }

    protected function askMenu()
    {
        $lang = $this->bot->userStorage()->get('lang') ?? 'id';
        $title = $lang === 'en' ? 'Main Menu' : 'Menu Utama';

        $q = Question::create("<b>$title</b><br>Pilih topik:")
            ->addButtons([
                Button::create('📝 Pendaftaran Nikah')->value('nikah'),
                Button::create('🔁 Rujuk')->value('rujuk'),
                Button::create('📚 Bimwin')->value('bimwin'),
                Button::create('📄 Legalisasi')->value('legalisasi'),
                Button::create('👨‍👩‍👧 Konsultasi')->value('konsultasi'),
                Button::create('🔎 Cek Status')->value('status'),
                Button::create('📍 Jam & Lokasi')->value('lokasi'),
                Button::create('ℹ️ FAQ')->value('faq'),
            ]);

        $this->ask($q, function (Answer $answer) {
            $v = strtolower($answer->getValue() ?: $answer->getText());

            return match ($v) {
                'nikah'      => $this->bot->startConversation(new PendaftaranNikahConversation()),
                'rujuk'      => $this->bot->startConversation(new RujukConversation()),
                'bimwin'     => $this->bot->startConversation(new BimwinConversation()),
                'legalisasi' => $this->bot->startConversation(new LegalisasiConversation()),
                'konsultasi' => $this->bot->startConversation(new KonsultasiConversation()),
                'status'     => $this->bot->startConversation(new TrackingConversation()),
                'lokasi'     => $this->showLocation(),
                'faq'        => $this->showFAQ(),
                default      => $this->repeatMenu(),
            };
        });
    }

    protected function showLocation()
    {
        $this->say("🕘 Jam Layanan: <br>Senin–Jumat 08.00–16.00 WIB<br>Istirahat 12.00–13.00 WIB");
        $this->say("📍 Alamat: KUA IV Jurai, Pesisir Selatan (Maps tersedia di halaman kontak).");
        $this->askMenu();
    }

    protected function showFAQ()
    {
        $this->say("FAQ singkat:<br>• Berkas nikah minimal H-10.<br>• Bimwin jadwal bergilir tiap pekan.<br>• Legalisasi selesai H+1 kerja.");
        $this->askMenu();
    }

    protected function repeatMenu()
    {
        $this->say("Pilihan tidak dikenali. Silakan pilih via tombol.");
        $this->askMenu();
    }
}
