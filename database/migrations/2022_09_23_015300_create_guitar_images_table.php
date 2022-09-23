<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuitarImagesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guitar_images', function (Blueprint $table) {
            $table->id('id');
            $table->string('image');
            $table->integer('guitar_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('guitar_id')->references('id')->on('guitars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('guitar_images');
    }
}
