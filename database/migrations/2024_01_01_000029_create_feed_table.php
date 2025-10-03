<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedTable extends Migration
{
    public function up()
    {
        Schema::create('feed', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('grade_id')->nullable();
            $table->string('caption', 500)->nullable();
            $table->text('tagged_user_ids')->nullable()->comment('Comma-separated list of user IDs');
            $table->string('status')->default('active');
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('set null');
            $table->index('status');
        });
    }

    public function down()
    {
        Schema::dropIfExists('feed');
    }
}

