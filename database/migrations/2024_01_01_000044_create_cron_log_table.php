<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCronLogTable extends Migration
{
    public function up()
    {
        Schema::create('cron_log', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cron_name');
            $table->string('status', 50);
            $table->text('message')->nullable();
            $table->timestamp('executed_at')->useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cron_log');
    }
}
