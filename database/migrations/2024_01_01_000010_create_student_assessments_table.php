<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentAssessmentsTable extends Migration
{
    public function up()
    {
        Schema::create('student_assessments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('grade_id');
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('parent_id');
            $table->unsignedBigInteger('school_id');
            $table->unsignedBigInteger('age_group_id');
            $table->string('assessment_month', 7)->comment('Format: YYYY-MM');
            $table->date('assessment_date');
            $table->text('notes')->nullable();
            $table->integer('total_score')->nullable();
            $table->integer('total_score_required')->nullable();
            $table->decimal('percentage_obtained', 5, 2)->nullable();
            $table->string('overall_classification', 50)->nullable();
            $table->longText('domain_scores')->nullable();
            $table->longText('domain_classifications')->nullable();
            $table->enum('status', ['draft', 'completed'])->default('draft');
            $table->unsignedBigInteger('created_by');
            $table->timestamps();
            
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('cascade');
            $table->foreign('teacher_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('parent_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('age_group_id')->references('id')->on('assessment_age_groups')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            
            $table->unique(['student_id', 'assessment_month']);
            $table->index('student_id');
            $table->index('grade_id');
            $table->index('teacher_id');
            $table->index('parent_id');
            $table->index('school_id');
            $table->index('age_group_id');
            $table->index('assessment_month');
            $table->index('total_score');
            $table->index('overall_classification');
            $table->index('percentage_obtained');
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_assessments');
    }
}

