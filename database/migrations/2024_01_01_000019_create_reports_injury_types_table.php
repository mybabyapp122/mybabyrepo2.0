<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsInjuryTypesTable extends Migration
{
    public function up()
    {
        Schema::create('reports_injury_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('injury_name');
            $table->string('injury_name_ar')->nullable();
            $table->boolean('status')->default(true);
            $table->integer('created_by')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reports_injury_types');
    }
}

