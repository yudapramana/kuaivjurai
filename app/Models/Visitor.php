<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $table = "shetabit_visits";

    public $timestamps = FALSE;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */

    protected $appends = ['date'];


    public function getDateAttribute(){
        
        return $this->attributes['created_at']->format('Y-m-d');
    }

}