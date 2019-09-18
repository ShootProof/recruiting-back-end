<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    protected $table = 'photos';

    protected $primaryKey = 'id';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'original_image_url', 
        'large_image_url', 
        'large_image_url_thumbnail', 
        'medium_image_url', 
        'medium_image_url_thumbnail', 
        'small_image_url', 
        'small_image_url_thumbnail',
    ];

    public function albums()
    {
        return $this->hasMany('App\AlbumPhoto', 'photo_id');
    }


}