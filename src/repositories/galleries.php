<?php

namespace ShootProof\Repositories;

use ShootProof\Entities\Gallery;
use ShootProof\Entities\User;

class Galleries
{
    private $galleries;

    public function __construct()
    {
        $this->galleries = [];
    }

    public function all()
    {
        return $this->galleries;
    }

    public function add(Gallery $gallery)
    {
        $this->galleries[$gallery->getId()] = $gallery;

        return $gallery->getId();
    }

    public function first()
    {
        return reset($this->galleries);
    }

    public function remove($id)
    {
        unset($this->galleries[$id]);
    }

    public function findById($id)
    {
        return $this->galleries[$id];
    }

    public function findByUser(User $user)
    {

        $result =  array_filter($this->galleries, function($gallery) use (&$user) {
            return $gallery->getUserId() == $user->getId();
        });

        return reset($result);
    }
}