<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsToiletCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('reports_toilet_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bath_category_name');
            $table->string('bath_category_name_ar')->nullable();
            $table->boolean('status')->default(true);
            $table->integer('created_by')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reports_toilet_categories');
    }
}

