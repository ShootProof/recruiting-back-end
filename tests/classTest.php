<?php
declare(strict_types=1);
include("src/class_lib.php");

use PHPUnit\Framework\TestCase;

final class ClassTest extends TestCase
{
    public function testCanTwoSubClassesBeSeperate(): void
    {
        $mygallery = new gallery();
        $mygallery->set_name("Nick made this");

        $myalbum = new album();
        $myalbum->set_name("Someone else made this");

        $this->assertFalse(
            $mygallery->get_name() == $myalbum->get_name()
        );
    }
}


?>
