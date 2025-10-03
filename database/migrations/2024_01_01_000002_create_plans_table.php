<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('name_ar')->nullable();
            $table->string('description')->nullable();
            $table->string('description_ar')->nullable();
            $table->integer('sub_users')->nullable();
            $table->integer('subscription_period')->nullable();
            $table->decimal('price', 19, 2)->default(0.00);
            $table->integer('highlighted')->default(0);
            $table->string('upgrade_to')->nullable();
            $table->smallInteger('status')->default(1);
            $table->string('status_ex')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('plans');
    }
}

