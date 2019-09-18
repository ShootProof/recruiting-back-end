<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('original_image_url');
            $table->string('large_image_url');
            $table->string('large_image_url_thumbnail');
            $table->string('medium_image_url');
            $table->string('medium_image_url_thumbnail');
            $table->string('small_image_url');
            $table->string('small_image_url_thumbnail');
            $table->timestamps();

            $table->index(['album_id']);
            $table->foreign('album_id')->references('id')->on('albums');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photos');
    }
}
