<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsInjuryTable extends Migration
{
    public function up()
    {
        Schema::create('reports_injury', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('parent_id');
            $table->unsignedBigInteger('grade_id');
            $table->unsignedBigInteger('school_id');
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('injury_type_id');
            $table->unsignedBigInteger('mood_icon_id');
            $table->unsignedBigInteger('other_grade_id')->nullable();
            $table->unsignedBigInteger('other_student_id')->nullable();
            $table->unsignedBigInteger('staff_witness_teacher_id')->nullable();
            $table->text('notes')->nullable();
            $table->text('images')->nullable();
            $table->integer('created_by')->nullable();
            $table->timestamps();
            
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('parent_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('cascade');
            $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('teacher_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('injury_type_id')->references('id')->on('reports_injury_types')->onDelete('cascade');
            $table->foreign('mood_icon_id')->references('id')->on('reports_icons')->onDelete('cascade');
            $table->foreign('other_grade_id')->references('id')->on('grades')->onDelete('set null');
            $table->foreign('other_student_id')->references('id')->on('students')->onDelete('set null');
            $table->foreign('staff_witness_teacher_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reports_injury');
    }
}

