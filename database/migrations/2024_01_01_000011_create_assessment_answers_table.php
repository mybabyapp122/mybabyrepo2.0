<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessmentAnswersTable extends Migration
{
    public function up()
    {
        Schema::create('assessment_answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('assessment_id');
            $table->unsignedBigInteger('question_id');
            $table->string('answer_value')->comment('Rating (1-5), Yes/No, or text answer');
            $table->text('notes')->nullable();
            $table->timestamps();
            
            $table->foreign('assessment_id')->references('id')->on('student_assessments')->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('assessment_questions')->onDelete('cascade');
            
            $table->unique(['assessment_id', 'question_id']);
            $table->index('assessment_id');
            $table->index('question_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('assessment_answers');
    }
}

