<?php

namespace ShootProof\Repositories;

use ShootProof\Entities\User;

class Users
{
    private $users;

    public function __construct()
    {
        $this->users = [];
    }

    public function all()
    {
        return $this->users;
    }

    public function first()
    {
        return reset($this->users);
    }

    public function add(User $user)
    {
        $this->users[$user->getId()] = $user;

        return $user->getId();
    }

    public function remove($id)
    {
        unset($this->users[$id]);
    }

    public function findById($id)
    {
        return $this->users[$id];
    }

    public function findByEmail($email)
    {
        $results = array_filter($this->users, function($user) use (&$email) {
           return $user->getEmail() == $email;
        });
        
        return reset($results);
    }
}