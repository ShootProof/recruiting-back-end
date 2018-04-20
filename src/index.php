<?php include("class_lib.php") ?>
<?php
  $mygallery = new gallery();
  $mygallery->set_name("Nick made this");

  echo "Gallery title:" . $mygallery->get_name();

 ?>
