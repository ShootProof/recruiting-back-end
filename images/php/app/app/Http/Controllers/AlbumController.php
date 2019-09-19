<?php

namespace App\Http\Controllers;

use App\Album;
use App\AlbumPhoto;

class AlbumController extends Controller
{


    /**
     * Get all the albums
     */
    public function all() {
        return response()->json(Album::all());
    }

    /**
     * Create an album
     */
    public function create(Request $request) {

        $album = Album::create($request->all());

        return response()->json($album, 201);

    }

    /**
     * Update an album
     */
    public function update(Request $request, $id) {

        $album = Album::findOrFail($id);
        $album->update($request->all());

        return response()->json($album, 200);

    }

    /**
     * Show 1 album
     */
    public function show($id)
    {
        return response()->json(Album::find($id));
    }

    /**
     * Remove an album
     */
    public function delete($id)
    {
        Album::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

    /**
     * Add 
     */
    public function addPhotoToAlbum() {

        $albumPhoto = AlbumPhoto::create($request->all());

        return response()->json($albumPhoto, 201);

    }
}
