<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('model')->nullable()->comment('user, order, product, etc.');
            $table->unsignedBigInteger('model_id')->nullable();
            $table->string('category', 500)->nullable();
            $table->string('filename')->nullable();
            $table->string('image_src')->nullable();
            $table->string('thumb_src')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
            
            $table->index('model_id');
            $table->index('category');
            $table->index('model');
        });
    }

    public function down()
    {
        Schema::dropIfExists('images');
    }
}

