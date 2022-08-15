<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_statistics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('album_id');
            $table->foreign('album_id')->references('id')->on('albums');
            $table->integer('have');
            $table->integer('want');
            $table->float('rating');
            $table->integer('ratings');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('album_statistics');
    }
}
