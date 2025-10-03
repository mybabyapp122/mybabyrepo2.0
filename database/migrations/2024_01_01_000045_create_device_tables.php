<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceTables extends Migration
{
    public function up()
    {
        Schema::create('device', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('device_id', 500)->nullable()->comment('Android/iOS etc');
            $table->string('device_type', 500)->nullable()->comment('Android/iOS etc');
            $table->string('make')->nullable()->comment('iphone');
            $table->string('model')->nullable()->comment('14 pro max');
            $table->string('os')->nullable()->comment('16.1');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->datetime('create_time')->useCurrent()->comment('when did user started using our app');
            $table->datetime('update_time')->useCurrent()->useCurrentOnUpdate();
        });

        Schema::create('device_preferences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('device_id')->nullable();
            $table->string('project')->nullable()->comment('provider_app, client_app, etc.');
            $table->string('title')->nullable()->comment('last_used, views, likes, etc.');
            $table->text('value')->nullable();
            
            $table->foreign('device_id')->references('id')->on('device')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('device_preferences');
        Schema::dropIfExists('device');
    }
}
