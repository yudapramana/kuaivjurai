<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;

class PostView extends Model
{
    protected $guarded = [];

    public function postView()
    {
        return $this->belongsTo(Post::class);
    }

    public static function createViewLog($post) {

        // $postViews = PostView::firstOrCreate([
        //     'post_id' => $post->id,
        //     'slug' => $post->slug,
        //     'url' => request()->url(),
        //     'session_id' => auth()->check() ? request()->getSession()->getId() : null,
        //     'user_id' => (auth()->check())?auth()->id():null,
        //     'ip' => request()->ip(),
        //     'agent' => request()->header('User-Agent')
        // ]);

        $postViews= new PostView();
        $postViews->post_id = $post->id;
        $postViews->slug = $post->slug;
        $postViews->url = request()->url();
        $postViews->session_id = request()->getSession()->getId();
        $postViews->user_id = (auth()->check())?auth()->id():null; 
        $postViews->ip = request()->ip();
        $postViews->agent = request()->header('User-Agent');
        $postViews->save();
    }
}