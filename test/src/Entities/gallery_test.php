<?php

use PHPUnit\Framework\TestCase;
use ShootProof\Entities\User;
use ShootProof\Entities\Gallery;

final class GalleryTest extends TestCase
{
    private $gallery;

    protected function setUp()
    {
        $this->user = new User("Joshua", "Sandlin", "joshua.sandlin@gmail.com", "password");
        $this->gallery = new Gallery($this->user, "Test Gallery", "This is just a test gallery");
    }

    public function testGetId()
    {
        $this->assertNotNull($this->gallery->getId());
    }

    public function testGetTitle()
    {
        $this->assertEquals($this->gallery->getTitle(), "Test Gallery");
    }

    public function testGetDescription()
    {
        $this->assertEquals($this->gallery->getDescription(), "This is just a test gallery");
    }

    public function testGetUserId()
    {
        $this->assertEquals($this->gallery->getUserId(), $this->user->getId());
    }
}