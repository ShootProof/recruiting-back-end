<?php

use PHPUnit\Framework\TestCase;
use ShootProof\Entities\User;
use ShootProof\Entities\Gallery;
use ShootProof\Entities\Album;
use ShootProof\Repositories\Galleries;

final class GalleriesTest extends TestCase
{
    private $galleries;

    protected function setUp()
    {
        $this->user = new User("Joshua", "Sandlin", "joshua.sandlin@gmail.com", "password");
        $this->gallery = new Gallery($this->user, "Test Gallery", "Test Gallery");
        $this->galleries = new Galleries();
    }

    public function testCanBeInstantiated()
    {
        $this->assertEquals($this->galleries->all(), []);
    }

    public function testGalleryCanBeAdded()
    {
        $this->galleries->add($this->gallery);
        $this->assertEquals($this->galleries->first(), $this->gallery);
    }

    public function testGalleryCanBeRemoved()
    {
        $id = $this->galleries->add($this->gallery);
        $this->galleries->remove($id);
        $this->assertEquals($this->galleries->all(), []);
    }

    public function testCanGetGalleriesById()
    {
        $id = $this->galleries->add($this->gallery);
        $this->assertEquals($this->galleries->findById($id), $this->gallery);
    }

    /**
     * BUG: There's a bit of a bug here that prevents a user from having multiple galleries
     */
    public function testCanGetGalleriesByUser()
    {
        $this->galleries->add($this->gallery);
        $result = $this->galleries->findByUser($this->user);
        $this->assertEquals($result, $this->gallery);
    }
}