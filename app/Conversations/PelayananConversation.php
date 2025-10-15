<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;

class PelayananConversation extends Conversation
{
    public function run()
    {
        $this->askPelayananDetail();
    }

    public function askPelayananDetail()
    {
        $question = Question::create("Silakan pilih layanan untuk melihat syaratnya:")
            ->addButtons([
                Button::create('Pendaftaran Nikah')->value('pendaftaran'),
                Button::create('Bimbingan Perkawinan')->value('bimwin'),
                Button::create('Legalisasi Dokumen')->value('legalisasi'),
                Button::create('👨‍👩Konsultasi Keluarga')->value('konsultasi'),
                Button::create('🔙 Kembali')->value('kembali'),
            ]);

        $this->ask($question, function (Answer $answer) {
            $value = $answer->getValue() ?: strtolower(trim($answer->getText()));

            switch ($value) {
                case 'pendaftaran':
                    $this->say("Syarat Pendaftaran Nikah:<br>- KTP & KK calon pengantin<br>- Surat pengantar RT/RW<br>- Surat belum menikah dari kelurahan<br>- Pas foto 3x4 (5 lembar)");
                    break;
                case 'bimwin':
                    $this->say("Syarat Bimbingan Perkawinan:<br>- Terdaftar sebagai calon pengantin di KUA<br>- Mengisi formulir pendaftaran bimwin<br>- Fotokopi KTP dan KK");
                    break;
                case 'legalisasi':
                    $this->say("Syarat Legalisasi Dokumen:<br>- Membawa dokumen asli dan salinan<br>- Surat permohonan legalisasi<br>- KTP pemohon");
                    break;
                case 'konsultasi':
                    $this->say("Syarat Konsultasi Keluarga:<br>- Datang langsung ke KUA sesuai jadwal<br>- Mengisi formulir konsultasi<br>- Bersedia mengikuti sesi pendampingan");
                    break;
                case 'kembali':
                    $this->bot->startConversation(new WelcomeConversation); // kembali ke menu utama
                    return;
                default:
                    $this->say("Maaf, pilihan tidak dikenali: <b>{$value}</b>");
            }

            // tampilkan ulang tombol pilihan
            $this->askPelayananDetail();
        });
    }
}
