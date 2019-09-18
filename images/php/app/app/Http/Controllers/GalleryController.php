<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\GalleryAlbum;

class GalleryController extends Controller
{


    /**
     * Get all the Gallerys
     */
    public function all() {
        return response()->json(Gallery::all());
    }

    /**
     * Create an Gallery
     */
    public function create(Request $request) {

        $Gallery = Gallery::create($request->all());

        return response()->json($Gallery, 201);

    }

    /**
     * Update an Gallery
     */
    public function update(Request $request, $id) {

        $Gallery = Gallery::findOrFail($id);
        $Gallery->update($request->all());

        return response()->json($Gallery, 200);

    }

    /**
     * Show 1 Gallery
     */
    public function show($id)
    {
        return response()->json(Gallery::find($id));
    }

    /**
     * Remove an Gallery
     */
    public function delete($id)
    {
        Gallery::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

    /**
     * Add album to gallery
     */
    public function addAlbumToGallery(Request $request) {

        $GalleryAlbum= GalleryAlbum::create($request->all());

        return response()->json($GalleryAlbum, 201);

    }
}
