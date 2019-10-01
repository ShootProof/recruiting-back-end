<?php

namespace ShootProof\Entities;

class User
{
    private $id;
    private $first_name;
    private $last_name;
    private $email;
    private $password_hash;

    public function __construct($first_name, $last_name, $email, $password)
    {
        $this->id = uniqid();
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password_hash = md5($password);
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