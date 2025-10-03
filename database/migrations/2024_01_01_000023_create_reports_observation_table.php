<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsObservationTable extends Migration
{
    public function up()
    {
        Schema::create('reports_observation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->unsignedBigInteger('school_id');
            $table->unsignedBigInteger('grade_id');
            $table->unsignedBigInteger('teacher_id');
            $table->date('observation_date');
            $table->text('notes')->nullable();
            $table->text('images')->nullable();
            $table->string('milestone', 50)->nullable();
            $table->unsignedBigInteger('created_by');
            $table->datetime('created_at');
            
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('parent_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('cascade');
            $table->foreign('teacher_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            
            $table->index('student_id');
            $table->index('parent_id');
            $table->index('school_id');
            $table->index('grade_id');
            $table->index('teacher_id');
            $table->index('created_by');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reports_observation');
    }
}

