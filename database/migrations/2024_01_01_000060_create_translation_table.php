<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranslationTable extends Migration
{
    public function up()
    {
        Schema::create('translation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('en')->nullable();
            $table->text('ur')->nullable();
            $table->text('ar')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('translation');
    }
}
