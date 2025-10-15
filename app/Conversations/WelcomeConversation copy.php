<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;

class WelcomeConversation extends Conversation
{
    protected $name;

    public function run()
    {
        $this->askName();
    }

    public function askName()
    {
        $this->ask("Halo! Siapa nama Anda?", function (Answer $answer) {
            $this->name = $answer->getText();
            $this->say("Senang berkenalan dengan Anda, {$this->name}.");
            $this->askMenu();
        });
    }

    public function askMenu()
    {
        $this->ask("Apakah ada yang dapat saya bantu?<br><br>Silakan pilih:<br><br>[1] Informasi daftar pelayanan<br>[2] Jadwal pelayanan<br>[3] Alamat & Kontak KUA<br>[4] Persyaratan nikah<br>[5] Selesai", function (Answer $answer) {
            $choice = trim(strtolower($answer->getText()));

            switch ($choice) {
                case '1':
                    $this->bot->startConversation(new PelayananConversation);
                    break;
                case '2':
                    $this->say("Jadwal pelayanan:<br>Senin - Jumat<br>Pukul 08.00 - 16.00 WIB");
                    $this->askMenu();
                    break;
                case '3':
                    $this->say("Alamat KUA:<br>Jl. Contoh No. 123, Pesisir Selatan<br>Telepon: (0756) 123456");
                    $this->askMenu();
                    break;
                case '4':
                    $this->say("Persyaratan nikah:<br>- Fotokopi KTP dan KK<br>- Surat pengantar RT/RW<br>- Surat keterangan belum menikah<br>- Pas foto 3x4");
                    $this->askMenu();
                    break;
                case '5':
                    $this->say("Terima kasih telah menggunakan layanan ini.<br>Semoga harimu menyenangkan!");
                    break;
                default:
                    $this->say("Maaf, pilihan tidak dikenali.<br>Silakan pilih angka dari 1 sampai 5.");
                    $this->askMenu();
            }
        });
    }
}
