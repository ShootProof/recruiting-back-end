<?php

namespace Models;

use Models\Album;
use Models\Photo;
use Carbon\Carbon;

class PhotoGallery {

    protected $album_ids = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    private $title;
    private $created_at;
    private $updated_at;
    private $user_id;

    public static function create(array $galleryInfo)
    {
        $photoGallery = new PhotoGallery();

        $photoGallery->title = $galleryInfo['title'];
        $photoGallery->created_at = Carbon::now()->toDateTimeString();

        return $photoGallery;
    }

    /**
     * Getters
     */

    public function title()
    {
        return $this->title;
    }

    public function created_at()
    {
        return $this->created_at;
    }

    public function updated_at()
    {
        return $this->updated_at;
    }

    public function user_id()
    {
        return $this->user_id;
    }

    /**
     * Update
     */

    public function addPhoto(Photo $photo)
    {
        $this->photos[] = $photo;
    }

    public function addAlbum(Album $album)
    {
        $this->albums[] = $album;
    }


    /**
     * Relationships
     */

    public function photos()
    {
        return $this->photos;
    }

    public function albums()
    {
        return $this->albums;
    }

}