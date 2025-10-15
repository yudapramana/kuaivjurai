<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Incoming\Answer;
use App\Conversations\WelcomeConversation;

class PelayananConversation extends Conversation
{
    public function run()
    {
        $this->askPelayananDetail();
    }

    protected function askPelayananDetail()
    {
        $q = Question::create("Pilih jenis layanan yang ingin kamu ketahui syarat & alurnya:")
            ->addButtons([
                Button::create('📝 Pendaftaran Nikah')->value('pendaftaran'),
                Button::create('🔁 Rujuk')->value('rujuk'),
                Button::create('📚 Bimwin')->value('bimwin'),
                Button::create('📄 Legalisasi')->value('legalisasi'),
                Button::create('👨‍👩‍👧 Konsultasi')->value('konsultasi'),
                Button::create('⬅️ Kembali ke Menu')->value('kembali'),
            ]);

        $this->ask($q, function (Answer $answer) {
            $value = $answer->getValue() ?: strtolower(trim($answer->getText()));

            switch ($value) {
                case 'pendaftaran':
                    $this->say("Syarat ringkas Pendaftaran Nikah:<br>• N1–N4 dari Kelurahan/Desa<br>• Fotokopi KTP & KK<br>• Pas foto 3×4 (5 lbr)<br>• Dispensasi bila < 10 hari kerja<br>• Berkas tambahan jika duda/janda.");
                    $this->say("Ingin daftar sekarang? Ketik: <b>nikah</b>");
                    break;
                case 'rujuk':
                    $this->say("Rujuk:<br>• Akta cerai talak/ikrar talak<br>• KTP dan KK<br>• Surat keterangan dari KUA asal nikah.");
                    break;
                case 'bimwin':
                    $this->say("Bimwin (Bimbingan Perkawinan):<br>• Formulir pendaftaran<br>• Fotokopi KTP & KK<br>• Jadwal bergilir, kuota terbatas.");
                    break;
                case 'legalisasi':
                    $this->say("Legalisasi:<br>• Bawa dokumen asli & salinan<br>• Surat permohonan legalisasi<br>• KTP pemohon<br>• Estimasi selesai H+1 kerja.");
                    break;
                case 'konsultasi':
                    $this->say("Konsultasi/Mediasi Keluarga:<br>• Isi formulir konseling singkat<br>• Janji temu dengan penyuluh/mediator.");
                    break;
                case 'kembali':
                    $this->bot->startConversation(new WelcomeConversation());
                    return;
                default:
                    $this->say("Maaf, pilihan tidak dikenali: <b>{$value}</b>");
            }

            $this->askPelayananDetail();
        });
    }
}
