<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_photos', function (Blueprint $table) {
            $table->int('album_id');
            $table->int('photo_id');


            $table->timestamps();

            $table->primary(['album_id', 'photo_id']);
            $table->foreign('album_id')->references('id')->on('albums');
            $table->foreign('photo_id')->references('id')->on('photos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('album_photos');
    }
}
