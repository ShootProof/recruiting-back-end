<?php

namespace Models;

use Models\Photo;
use Models\Gallery;
use Carbon\Carbon;

class Album {

    private $photos = [];
    private $galleries = [];

    private $id;
    private $title;
    private $user_id;
    private $gallery_id;

    public static function create(array $albumInfo)
    {
        $album = new Album();

        $album->title = $albumInfo['title'];
        $album->created_at = Carbon::now()->toDateTimeString();

        return $album;
    }

    /**
     * Getters
     */

     public function id()
    {
        return $this->id;
    }

    public function title()
    {
        return $this->title;
    }

    public function user_id()
    {
        return $this->user_id;
    }

    public function gallery_id()
    {
        return $this->gallery_id;
    }

    public function addPhoto(Photo $photo)
    {
        $this->photos[] = $photo;
    }

    /**
     * Relationships
     */

    public function photos()
    {
        if (empty($this->photos)) {
            foreach ($this->photo_ids as $id) {
                $this->photos[] = (new Photo($id));
            }
        }
        return $this->photos;
    }

    public function galleries()
    {
        if (empty($this->galleries)) {
            foreach ($this->gallery_ids as $id) {
                $this->galleries[] = (new Gallery($id));
            }
            return $this->galleries;
        }
    }
}