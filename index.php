<?php

require __DIR__.'/vendor/autoload.php';

use Models\PhotoGallery;
use Models\Album;
use Models\Photo;

// create a couple albums
$mountains = Album::create([
    'title' => 'Mountains'
]);

$beach = Album::create([
    'title' => 'Beach'
]);

$city = Album::create([
    'title' => 'City'
]);

// create some test photos
$photos = [];
for ($i = 0; $i < 10; $i ++) {
    $photos[] = Photo::create([
        'title' => 'Test Photo ' . $i
    ]);
}

$city->addPhoto($photos[0]);
$city->addPhoto($photos[1]);

$beach->addPhoto($photos[2]);
$beach->addPhoto($photos[3]);
$beach->addPhoto($photos[4]);

$city->addPhoto($photos[5]);
$city->addPhoto($photos[6]);
$city->addPhoto($photos[7]);

// create a gallery
$photoGallery = PhotoGallery::create(['title' => 'Vacations']);

// add an ablum to the gallery
$photoGallery->addAlbum($beach);

echo 'Photo Gallery: '. $photoGallery->title() . '<br>';
// echo the ablum titles from the gallery
echo 'Albums: <br>';
foreach ($photoGallery->albums() as $album) {
    echo $album->title() . '<br>';
}

// echo the photos from the albums
echo 'Photos: <br>';
foreach ($photoGallery->albums() as $album) {
    echo $album->title() . '</br>';
    foreach ($album->photos() as $photo) {
        echo $photo->title() . '<br>';
    }
}