<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = "products";

    protected $primaryKey = 'id_product';
 
    protected $guarded = [];

    protected $appends = ['rectangle_cover_image'];


    public function service(){
        return $this->belongsTo(Services::class, 'id_service', 'id_service');
    }

    public function getRectangleCoverImageAttribute(){
        $separator = '/upload/';
        $exp = explode($separator, $this->attributes['cover_image_url']);


        return $exp[0] . '/upload/c_fill,ar_16:9,q_50/' . $exp[1];
    }
}
