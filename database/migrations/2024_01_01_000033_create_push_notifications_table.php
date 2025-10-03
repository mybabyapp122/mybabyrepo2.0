<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePushNotificationsTable extends Migration
{
    public function up()
    {
        Schema::create('push_notifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('sale_id')->nullable();
            $table->unsignedBigInteger('student_id')->nullable();
            $table->string('student_name')->nullable();
            $table->string('type')->nullable();
            $table->string('title');
            $table->text('message');
            $table->string('project')->nullable();
            $table->string('receiver_token')->nullable();
            $table->string('receiver_email')->nullable();
            $table->string('receiver_mobile')->nullable();
            $table->boolean('send_push')->default(false);
            $table->boolean('send_email')->default(false);
            $table->boolean('send_sms')->default(false);
            $table->string('status')->default('pending');
            $table->integer('is_read')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('push_notifications');
    }
}

