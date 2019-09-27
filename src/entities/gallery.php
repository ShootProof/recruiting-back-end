<?php

namespace ShootProof\Entities;

class Gallery
{
    private $id;
    private $user_id;
    private $title;
    private $description;

    public function __construct(User $user, $title, $description)
    {
        $this->id = uniqid();
        $this->user_id = $user->getId();
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

    public function getUserId()
    {
        return $this->user_id;
    }
}