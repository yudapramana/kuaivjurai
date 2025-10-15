<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $table = "galleries";

    protected $primaryKey = 'id_gallery';
 
    protected $guarded = [];

    protected $appends = ['thumbnail_image'];


    public function getThumbnailImageAttribute(){
        $separator = '/upload/';
        $exp = explode($separator, $this->attributes['image_url']);
        return $exp[0] . '/upload/q_5/' . $exp[1];
    }
}
