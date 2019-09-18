<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlbumPhoto extends Model
{

    protected $table = 'galleries_album';

    protected $primaryKey = array('album_id', 'gallery_id');

    public $incrementing = false;

    public $timestamps = true;

    public function gallery()
    {
        return $this->hasOne('App\Gallery');
    }

    public function album()
    {
        return $this->hasOne('App\Album');
    }
}



}