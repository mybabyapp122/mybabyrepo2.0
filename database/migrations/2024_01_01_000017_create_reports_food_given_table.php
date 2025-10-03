<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsFoodGivenTable extends Migration
{
    public function up()
    {
        Schema::create('reports_food_given', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('food_given_name');
            $table->string('food_given_name_ar')->nullable();
            $table->boolean('status')->default(true);
            $table->integer('created_by')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reports_food_given');
    }
}

