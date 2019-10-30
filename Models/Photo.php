<?php

namespace Models;

use Models\Album;
use Models\PhotoGallery;
use Carbon\Carbon;

class Photo {

    private $albums = [];
    private $gallery;

    private $id;
    private $title;
    private $created_at;
    private $udpated_at;

    public static function create(array $photoInfo)
    {
        $photo = new Photo();

        $photo->title = $photoInfo['title'];
        $photo->created_at = Carbon::now()->toDateTimeString();

        return $photo;
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

    /**
     * Relationships
     */

    public function albums()
    {
        if (empty($this->albums)) {
            foreach ($this->album_ids as $id) {
                $this->albums[] = (new Album($id));
            }
        }

        return $this->albums;
    }

    public function gallery()
    {
        if (empty($this->gallery)) {
            $this->gallery = (new PhotoGallery($this->gallery_id));
        }
        return $this->gallery;
    }

    /**
     * Generate Stub Data
     */

    public static function all()
    {
        $all = [];

        for ($i = 0; $i < 10; $i ++) {
            $all[] = (new Photo($i));
        }

        return $all;
    }

}