<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsActivitiesTable extends Migration
{
    public function up()
    {
        Schema::create('reports_activities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('activities_name');
            $table->string('activities_name_ar')->nullable();
            $table->boolean('status')->default(true);
            $table->integer('created_by')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reports_activities');
    }
}

