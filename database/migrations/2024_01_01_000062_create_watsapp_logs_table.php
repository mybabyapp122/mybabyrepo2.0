<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWatsappLogsTable extends Migration
{
    public function up()
    {
        Schema::create('watsapp_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('user_name')->nullable();
            $table->string('user_email')->nullable();
            $table->string('mobile', 20)->nullable();
            $table->text('message')->nullable();
            $table->text('response')->nullable();
            $table->string('status', 50)->nullable();
            $table->datetime('created_at')->nullable();
            
            $table->index('user_id');
            $table->index('created_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('watsapp_logs');
    }
}
