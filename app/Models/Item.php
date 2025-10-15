<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "items";

    protected $primaryKey = 'id_item';
 
    protected $guarded = [];
}
