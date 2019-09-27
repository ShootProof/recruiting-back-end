<?php

use PHPUnit\Framework\TestCase;
use ShootProof\Entities\User;

final class UserTest extends TestCase
{
    private $user;

    protected function setUp()
    {
        $this->user = new User("Josh", "Sandlin", "joshua.sandlin@gmail.com", "password");
    }

    public function testGetId()
    {
        $this->assertNotNull($this->user->getId());
    }

    public function testGetFirstName()
    {
        $this->assertEquals($this->user->getFirstName(), "Josh");
    }

    public function testGetLastName()
    {
        $this->assertEquals($this->user->getLastName(), "Sandlin");
    }

    public function testGetEmail()
    {
        $this->assertEquals($this->user->getEmail(), "joshua.sandlin@gmail.com");
    }

    public function testGetPasswordHash()
    {
        $this->assertEquals($this->user->getPasswordHash(), "5f4dcc3b5aa765d61d8327deb882cf99");
    }
}