<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleriesAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries_albums', function (Blueprint $table) {
            $table->int('album_id');
            $table->int('gallery_id');


            $table->timestamps();

            $table->primary(['album_id', 'gallery_id']);
            $table->foreign('album_id')->references('id')->on('albums');
            $table->foreign('gallery_id')->references('id')->on('galleries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galleries_albums');
    }
}
