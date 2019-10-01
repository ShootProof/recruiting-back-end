<?php

namespace ShootProof\Entities;

use ShootProof\Entities\Gallery;

class Album
{
    private $id;
    private $gallery_id;
    private $title;
    private $description;

    public function __construct(Gallery $gallery, $title, $description)
    {
        $this->id = uniqid();
        $this->gallery_id = $gallery->getId();
        $this->title = $title;
        $this->description = $description;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getGalleryId()
    {
        return $this->gallery_id;
    }
}