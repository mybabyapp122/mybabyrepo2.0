<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsIconsTable extends Migration
{
    public function up()
    {
        Schema::create('reports_icons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('icon_name');
            $table->string('icon_name_ar')->nullable();
            $table->string('image')->nullable();
            $table->boolean('status')->default(true);
            $table->string('icon_for', 20)->nullable();
            $table->longText('base64_image')->nullable();
            $table->integer('created_by')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reports_icons');
    }
}

