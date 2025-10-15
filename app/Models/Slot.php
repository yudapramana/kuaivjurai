<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class Slot extends Model 
{
    use HasFactory, SoftDeletes;

    protected $table = "slots";

    protected $primaryKey = 'id_slot';
 
    protected $guarded = [];

    public function slot() {
        return $this->hasOne(Item::class, 'id_item');
    }
}
