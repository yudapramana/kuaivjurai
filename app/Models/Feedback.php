<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    // Pastikan ke tabel 'feedbacks'
    protected $table = 'feedbacks';

    protected $fillable = [
        'context',
        'rating',
        'comment',
        'registration_code',
        'phone',
        'created_ip',
    ];

    protected $casts = [
        'rating' => 'integer',
    ];
}
