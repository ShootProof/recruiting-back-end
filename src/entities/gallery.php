<?php

namespace ShootProof\Entities;

class Gallery
{
    private $id;
    private $user_id;
    private $title;
    private $description;

    public function __construct($user_id, $title, $description)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password_hash = $password_hash;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPasswordHash()
    {
        return $this->password_hash;
    }
}