<?php

use PHPUnit\Framework\TestCase;

use ShootProof\Entities\User;
use ShootProof\Entities\Gallery;
use ShootProof\Entities\Album;

final class AlbumTest extends TestCase
{
    private $album;

    protected function setUp()
    {
        $this->user = new User("Joshua", "Sandlin", "joshua.sandlin@gmail.com", "password");
        $this->gallery = new Gallery($this->user, "Test Gallery", "This is just a test gallery");
        $this->album = new Album($this->gallery, "Test Album", "This is just a test album");
    }

    public function testGetId()
    {
        $this->assertNotNull($this->album->getId());
    }

    public function testGetTitle()
    {
        $this->assertEquals($this->album->getTitle(), "Test Album");
    }

    public function testGetDescription()
    {
        $this->assertEquals($this->album->getDescription(), "This is just a test album");
    }

    public function testGetGalleryId()
    {
        $this->assertEquals($this->album->getGalleryId(), $this->gallery->getId());
    }
}