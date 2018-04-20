<?php include("class_lib.php") ?>
<?php
  $mygallery = new gallery();
  $mygallery->set_name("Nick made this");

  $myalbum = new album();
  $myalbum->set_name("Someone else made this");

  echo "Gallery title:" . $mygallery->get_name();
  echo "\n";
  echo "Album title:" . $myalbum->get_name();
  echo "\n";
 ?>
