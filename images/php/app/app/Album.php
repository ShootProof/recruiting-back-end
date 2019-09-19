<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{

    protected $table = 'albums';

    protected $primaryKey = 'id';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'title', 'description', 'user_id'
    ];

    public function photos()
    {
        return $this->hasMany('App\AlbumPhoto', 'album_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }


}