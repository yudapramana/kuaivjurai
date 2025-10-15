<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use App\Conversations\WelcomeConversation;


class ChatController extends Controller
{
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function ($botman, $message) {
            if (strtolower($message) === 'hi') {
                $botman->startConversation(new WelcomeConversation);
            } else {
                $botman->reply("Ketik 'hi' untuk memulai percakapan.");
            }
        });

        $botman->listen();
    }
}
