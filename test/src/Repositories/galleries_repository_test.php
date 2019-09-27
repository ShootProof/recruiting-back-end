<?php

use PHPUnit\Framework\TestCase;
use ShootProof\Entities\User;
use ShootProof\Entities\Gallery;
use ShootProof\Repositories\Galleries;

final class GalleriesTest extends TestCase
{
    private $galleries;

    protected function setUp()
    {
        $this->user = new User("Joshua", "Sandlin", "joshua.sandlin@gmail.com", "password");
        $this->galleries = new Galleries();
    }

    public function testCanBeInstantiated()
    {
        $this->assertEquals($this->galleries->all(), []);
    }

    public function testGalleryCanBeAdded()
    {
        $gallery = new Gallery($this->user, "Test Gallery", "Test Gallery");
        $this->galleries->add($gallery);
        $this->assertEquals($this->galleries->first(), $gallery);
    }

    public function testGalleryCanBeRemoved()
    {
        $gallery = new Gallery($this->user, "Test Gallery", "Test Gallery");
        $id = $this->galleries->add($gallery);
        $this->galleries->remove($id);
        $this->assertEquals($this->galleries->all(), []);
    }

    public function testCanGetGalleriesById()
    {
        $gallery = new Gallery($this->user, "Test Gallery", "Test Gallery");
        $id = $this->galleries->add($gallery);
        $this->assertEquals($this->galleries->findById($id), $gallery);
    }

    /**
     * BUG: There's a bit of a bug here that prevents a user from having multiple galleries
     */
    public function testCanGetGalleriesByUser()
    {
        $gallery = new Gallery($this->user, "Test Gallery", "Test Gallery");
        $this->galleries->add($gallery);
        $result = $this->galleries->findByUser($this->user);
        $this->assertEquals($result, $gallery);
    }
}