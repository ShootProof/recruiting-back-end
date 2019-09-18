<?php

namespace App\Http\Controllers;

use App\Photo;

class PhotoController extends Controller
{


    /**
     * Get all the Photos
     */
    public function all() {
        return response()->json(Photo::all());
    }

    /**
     * Create an Photo
     */
    public function create(Request $request) {

        $Photo = Photo::create($request->all());

        return response()->json($Photo, 201);

    }

    /**
     * Update an Photo
     */
    public function update(Request $request, $id) {

        $Photo = Photo::findOrFail($id);
        $Photo->update($request->all());

        return response()->json($Photo, 200);

    }

    /**
     * Show 1 Photo
     */
    public function show($id)
    {
        return response()->json(Photo::find($id));
    }

    /**
     * Remove an Photo
     */
    public function delete($id)
    {
        Photo::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
