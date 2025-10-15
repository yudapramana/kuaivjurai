<?php

// namespace App\Http\Controllers;

// use BotMan\BotMan\BotMan;
// use Illuminate\Http\Request;
// use App\Conversations\WelcomeConversation;


// class ChatController extends Controller
// {
//     public function handle()
//     {
//         $botman = app('botman');

//         $botman->hears('{message}', function ($botman, $message) {
//             if (strtolower($message) === 'hi') {
//                 $botman->startConversation(new WelcomeConversation);
//             } else {
//                 $botman->reply("Ketik 'hi' untuk memulai percakapan.");
//             }
//         });

//         $botman->listen();
//     }
// }

// <?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use App\Conversations\WelcomeConversation;
use App\Conversations\PelayananConversation;
use App\Conversations\TrackingConversation;

class ChatController extends Controller
{
    public function handle()
    {
        /** @var BotMan $botman */
        $botman = app('botman');

        // ========= INTENTS (regex & sinonim) =========
        $botman->hears('^(hi|hello|hai|halo|start|mulai)$', function ($bot) {
            $bot->startConversation(new WelcomeConversation());
        });

        // menu cepat
        $botman->hears('^menu$', fn($bot) => $bot->startConversation(new WelcomeConversation()));

        // layanan umum
        $botman->hears('.*(pelayanan|layanan|service|help).*', fn($bot) => $bot->startConversation(new PelayananConversation()));

        // tracking status
        $botman->hears('.*(status|cek|track|pelacakan).*', fn($bot) => $bot->startConversation(new TrackingConversation()));

        // kata kunci spesifik (nikah/rujuk/leg/bimwin/konsultasi)
        $botman->hears('.*(nikah|pendaftaran|akad).*', function ($bot) {
            $bot->startConversation(new \App\Conversations\PendaftaranNikahConversation());
        });
        $botman->hears('.*(rujuk).*', function ($bot) {
            $bot->startConversation(new \App\Conversations\RujukConversation());
        });
        $botman->hears('.*(bimwin|bimbingan).*', function ($bot) {
            $bot->startConversation(new \App\Conversations\BimwinConversation());
        });
        $botman->hears('.*(legalisasi|legal|legit).*', function ($bot) {
            $bot->startConversation(new \App\Conversations\LegalisasiConversation());
        });
        $botman->hears('.*(konsultasi|mediasi|keluarga).*', function ($bot) {
            $bot->startConversation(new \App\Conversations\KonsultasiConversation());
        });

        // Fallback pintar (1x ingatkan 'menu' + tombol)
        $botman->fallback(function ($bot) {
            $miss = $bot->userStorage()->get('miss_count') ?? 0;
            $miss++;
            $bot->userStorage()->save(['miss_count' => $miss]);

            if ($miss >= 2) {
                $bot->reply("Maaf aku belum paham. Coba pilih salah satu:");
                $bot->reply(view('botman.quickmenu')); // optional: kirim blade view berisi tombol HTML
                $bot->userStorage()->save(['miss_count' => 0]);
            } else {
                $bot->reply("Hmm, belum nangkep. Ketik **menu** atau **nikah**, **rujuk**, **bimwin**, **legalisasi**, **konsultasi**, **status**.");
            }
        });

        $botman->listen();
    }
}

