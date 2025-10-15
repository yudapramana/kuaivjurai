<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $table = "services";

    protected $primaryKey = 'id_service';
 
    protected $guarded = [];

    protected $appends = ['square_cover_image', 'rectangle_content_image'];

    public function products() {
        return $this->hasMany(Products::class);
    }

    public function getSquareCoverImageAttribute(){
        $separator = '/upload/';
        $exp = explode($separator, $this->attributes['cover_image_url']);

        return $exp[0] . '/upload/c_fill,h_450,w_450,f_avif,q_30/' . $exp[1];
    }

    public function getRectangleContentImageAttribute(){
        $separator = '/upload/';
        $exp = explode($separator, $this->attributes['content_image_url']);

        return $exp[0] . '/upload/c_fill,ar_16:9,q_50,f_avif/' . $exp[1];
    }
}
