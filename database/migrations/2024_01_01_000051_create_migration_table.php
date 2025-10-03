<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMigrationTable extends Migration
{
    public function up()
    {
        Schema::create('migration', function (Blueprint $table) {
            $table->string('version', 180)->primary();
            $table->integer('apply_time')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('migration');
    }
}
