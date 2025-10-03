<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusTable extends Migration
{
    public function up()
    {
        Schema::create('status', function (Blueprint $table) {
            $table->string('code')->nullable();
            $table->string('en')->nullable();
            $table->string('ar')->nullable();
            $table->string('bg_color')->default('#FFFFFF');
            $table->string('fg_color')->default('#000000');
        });
    }

    public function down()
    {
        Schema::dropIfExists('status');
    }
}
