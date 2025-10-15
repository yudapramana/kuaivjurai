<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'type','code','name_1','name_2','phone',
        'scheduled_at','location','status','progress','note',
        'payload','created_ip'
    ];

    protected $casts = [
        'scheduled_at' => 'date',
        'payload'      => 'array',
        'progress'     => 'integer',
    ];
}
