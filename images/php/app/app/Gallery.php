<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{

    protected $table = 'galleries';

    protected $primaryKey = 'id';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'name',
    ];

    public function albums()
    {
        return $this->hasMany('App\GalleriesAlbum', 'gallery_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }


}