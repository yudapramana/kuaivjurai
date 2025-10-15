<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use App\Conversations\FeedbackConversation;
use App\Services\RegistrasiService;

class TrackingConversation extends Conversation
{
    protected ?string $kode = null;

    public function run()
    {
        $this->askKode();
    }

    protected function askKode()
    {
        $this->ask("Masukkan <b>kode registrasi</b> atau no. WA yang didaftarkan:", function (Answer $answer) {
            $val = trim($answer->getText());
            if (strlen($val) < 4) {
                $this->say("Input terlalu pendek.");
                return $this->repeat();
            }
            $this->kode = $val;

            // TODO: ganti query status dengan DB/Service milikmu
            // $status = RegistrasiService::status($val);
            // $status = [
            //     'jenis' => 'Pendaftaran Nikah',
            //     'progress' => 'Verifikasi Dokumen',
            //     'persen' => 60,
            //     'catatan' => 'Menunggu unggah pas foto 3x4',
            // ];

            $service = app(RegistrasiService::class);
            $status = $service->status($this->kode);

            // $this->say("📦 <b>Status</b>: {$status['jenis']}<br>🔄 Tahap: {$status['progress']} ({$status['persen']}%)<br>📝 Catatan: {$status['catatan']}");

            if (!$status) {
                $this->say("Data tidak ditemukan. Pastikan kode atau nomor WA benar.");
            } else {
                $this->say("📦 <b>Status</b>: {$status['jenis']}<br>"
                ."🔄 Tahap: {$status['tahap']} ({$status['persen']}%)<br>"
                ."📝 Catatan: {$status['catatan']}<br>"
                ."🔖 Kode: {$status['code']}");
            }
            
            $this->say("Jika butuh bantuan cepat, kamu bisa hubungi petugas via WA.");
            $this->bot->startConversation(new FeedbackConversation('tracking'));
        });
    }
}
