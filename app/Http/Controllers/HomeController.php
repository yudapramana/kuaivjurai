<?php

namespace App\Http\Controllers;

use App\Conversations\WelcomeConversation;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $services = \App\Models\Services::where('featured', 'yes')->get();
        $carousels = \App\Models\Carousel::where('active', 'yes')->get();
        $recent_posts = \App\Models\Post::orderBy('created_at', 'DESC')->take(5)->get();
        return view('landing.home', [
            'title' => 'Pandan View Mandeh - Villa Cafe dan Cottage Resort untuk Liburan Keluarga',
            'accountfb' => 'pandanviewmandeh',
            'account' => 'pandanviewmandeh',
            'channel' =>  '@pandanviewmandehofficial4919',
            'services' =>  $services,
            'carousels' =>  $carousels,
            'recent_posts' => $recent_posts
        ]);
    }


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
