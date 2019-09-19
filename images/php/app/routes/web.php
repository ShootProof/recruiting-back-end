<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//Album CRUD

$router->get('albums',  ['uses' => 'AlbumController@all']);

$router->get('albums/{id}', ['uses' => 'AlbumController@show']);

$router->post('albums', ['uses' => 'AlbumController@create']);

$router->delete('albums/{id}', ['uses' => 'AlbumController@delete']);

$router->put('albums/{id}', ['uses' => 'AlbumController@update']);

$router->post('albums/addphoto', ['uses' => 'AlbumController@addPhotoToAlbum']);

//Photo CRUD
$router->get('photo',  ['uses' => 'PhotoController@all']);

$router->get('photo/{id}', ['uses' => 'PhotoController@show']);

$router->post('photo', ['uses' => 'PhotoController@create']);

$router->delete('photo/{id}', ['uses' => 'PhotoController@delete']);

$router->put('photo/{id}', ['uses' => 'PhotoController@update']);

//Galleries CRUD

$router->get('galleries',  ['uses' => 'GalleryController@all']);

$router->get('galleries/{id}', ['uses' => 'GalleryController@show']);

$router->post('galleries', ['uses' => 'GalleryController@create']);

$router->delete('galleries/{id}', ['uses' => 'GalleryController@delete']);

$router->put('galleries/{id}', ['uses' => 'GalleryController@update']);

$router->post('galleries/addgallery', ['uses' => 'GalleryController@addAlbumToGallery']);
