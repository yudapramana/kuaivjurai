<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Incoming\Answer;
use App\Conversations\WelcomeConversation;
use App\Services\RegistrasiService;

class FeedbackConversation extends Conversation
{
    public function __construct(protected string $context = 'general') {}

    public function run()
    {
        $this->askRating();
    }

    protected function askRating()
    {
        $q = Question::create("Beri penilaian layanan ini (1–5)?")
            ->addButtons([
                Button::create('⭐')->value('1'),
                Button::create('⭐⭐')->value('2'),
                Button::create('⭐⭐⭐')->value('3'),
                Button::create('⭐⭐⭐⭐')->value('4'),
                Button::create('⭐⭐⭐⭐⭐')->value('5'),
            ]);

        $this->ask($q, function (Answer $answer) {
            // Ambil dari value tombol jika ada; fallback ke teks
            $raw = $answer->getValue() ?: $answer->getText();
            $rate = (int) $raw;
            $rate = max(1, min(5, $rate));

            $this->bot->userStorage()->save([
                'last_rating' => $rate,
                'last_rating_context' => $this->context,
            ]);

            $this->ask("Terima kasih 🙏 Ada saran singkat?", function (Answer $a) use ($rate) {
                $saran = trim($a->getText() ?? '');
                // TODO: simpan ke DB/log -> context: $this->context, rate: $rate, saran: $saran, user id/WA jika tersedia

                $service = app(RegistrasiService::class);

                // Ambil context tambahan jika kamu simpan di userStorage
                $registrationCode = $this->bot->userStorage()->get('last_registration_code') ?? null;
                $phone           = $this->bot->userStorage()->get('last_phone') ?? null;

                // Simpan
                $fbId = $service->saveFeedback(
                    context: $this->context,
                    rating: $rate,
                    comment: $saran,
                    registrationCode: $registrationCode,
                    phone: $phone
                );

                // Opsional: simpan id feedback terakhir ke user storage
                if ($fbId > 0) {
                    $this->bot->userStorage()->save(['last_feedback_id' => $fbId]);
                    $this->say("Noted. Terima kasih atas masukannya! ❤️");
                } else {
                    // Akan masuk ke log jika ada error, tapi di UI tetap ramah
                    $this->say("Masukan kamu sudah diterima. Terima kasih! ❤️");
                }

                $this->handoffOptions();
            });
        });
    }

    protected function handoffOptions()
    {
        $q = Question::create("Perlu dihubungkan ke petugas?")
            ->addButtons([
                Button::create('Ya, ke WhatsApp')->value('wa'),
                Button::create('Tidak, kembali ke menu')->value('menu'),
            ]);

        $this->ask($q, function (Answer $ans) {
            $v = $ans->getValue() ?: strtolower($ans->getText());
            if ($v === 'wa') {
                $this->say("Silakan klik: <a target='_blank' href='https://wa.me/62812XXXXXXX?text=Halo%20KUA%20IV%20Jurai%2C%20saya%20butuh%20bantuan'>Hubungi via WhatsApp</a>");
            }
            $this->bot->startConversation(new WelcomeConversation());
        });
    }
}
