<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsStudentTable extends Migration
{
    public function up()
    {
        Schema::create('reports_student', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('parent_id');
            $table->unsignedBigInteger('grade_id');
            $table->unsignedBigInteger('school_id');
            $table->unsignedBigInteger('teacher_id');
            $table->date('date_of_report');
            $table->unsignedBigInteger('mood_icon_id');
            $table->unsignedBigInteger('food_type_id');
            $table->time('food_time')->nullable();
            $table->string('food_given_id', 100)->nullable();
            $table->unsignedBigInteger('consumption_icon_id');
            $table->time('sleep_from_time')->nullable();
            $table->time('sleep_to_time')->nullable();
            $table->string('is_sleep_time', 20)->nullable();
            $table->string('activities_id', 100);
            $table->time('potty_time')->nullable();
            $table->unsignedBigInteger('potty_reason_id');
            $table->time('temperature_time')->nullable();
            $table->string('temperature_c', 11)->nullable();
            $table->string('is_fever', 20)->nullable();
            $table->text('attachments')->nullable();
            $table->text('notes')->nullable();
            $table->integer('created_by')->nullable();
            $table->timestamps();
            
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('parent_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('cascade');
            $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('teacher_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('mood_icon_id')->references('id')->on('reports_icons')->onDelete('cascade');
            $table->foreign('food_type_id')->references('id')->on('reports_food_categories')->onDelete('cascade');
            $table->foreign('consumption_icon_id')->references('id')->on('reports_icons')->onDelete('cascade');
            $table->foreign('potty_reason_id')->references('id')->on('reports_toilet_categories')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reports_student');
    }
}

