<?php

use PHPUnit\Framework\TestCase;
use ShootProof\Entities\User;
use ShootProof\Repositories\Users;

final class UsersTest extends TestCase
{
    private $users;

    protected function setUp()
    {
        $this->users = new Users();
    }

    public function testCanBeInstantiated()
    {
        $this->assertEquals($this->users->all(), []);
    }

    public function testUserCanBeAdded()
    {
        $user = new User("Josh", "Sandlin", "joshua.sandlin@gmail.com", "password");
        $this->users->add($user);
        $this->assertEquals($this->users->first(), $user);
    }

    public function testUserCanBeRemoved()
    {
        $user = new User("Josh", "Sandlin", "joshua.sandlin@gmail.com", "password");
        $id = $this->users->add($user);
        $this->users->remove($id);
        $this->assertEquals($this->users->all(), []);
    }

    public function testCanGetUsersById()
    {
        $user = new User("Josh", "Sandlin", "joshua.sandlin@gmail.com", "password");
        $id = $this->users->add($user);
        $this->assertEquals($this->users->findById($id), $user);
    }

    public function testCanGetUserByEmail()
    {
        $user = new User("Josh", "Sandlin", "joshua.sandlin@gmail.com", "password");
        $this->users->add($user);
        $this->assertEquals($this->users->findByEmail("joshua.sandlin@gmail.com"), $user);
    }
}