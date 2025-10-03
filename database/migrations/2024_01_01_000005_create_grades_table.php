<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('school_id')->nullable()->comment('user table');
            $table->string('title')->nullable();
            $table->string('payment_mode', 25)->nullable();
            $table->integer('per_hour_rate')->default(1)->comment('The default value for per hour rate will be taken from here');
            $table->integer('per_month_rate')->default(1);
            $table->integer('per_semester_rate')->default(1);
            $table->integer('per_year_rate')->default(1);
            $table->unsignedBigInteger('permanent_teacher_id')->nullable();
            $table->unsignedBigInteger('temporary_teacher_id')->nullable();
            $table->date('temporary_date')->nullable();
            $table->timestamps();
            
            $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('permanent_teacher_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('temporary_teacher_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('grades');
    }
}

