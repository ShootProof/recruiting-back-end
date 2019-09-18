<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlbumPhoto extends Model
{

    protected $table = 'album_photos';

    protected $primaryKey = array('album_id', 'photo_id');

    public $incrementing = false;

    public $timestamps = true;

    public function photo()
    {
        return $this->hasOne('App\Photo');
    }

    public function album()
    {
        return $this->hasOne('App\Album');
    }
}



}