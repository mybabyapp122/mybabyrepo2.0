<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessmentQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('assessment_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id')->nullable()->comment('Category ID (nullable)');
            $table->unsignedBigInteger('age_group_id');
            $table->text('question_text');
            $table->text('question_text_ar');
            $table->string('question_type', 20)->comment('Question type: rating, radio, checkbox, text, input');
            $table->boolean('required')->default(true);
            $table->integer('rating_min')->default(1);
            $table->integer('rating_max')->default(5);
            $table->integer('sort_order')->default(0);
            $table->boolean('status')->default(true);
            $table->text('options')->nullable()->comment('Options for radio/checkbox questions (one per line)');
            $table->text('options_ar')->nullable()->comment('Arabic options for radio/checkbox questions (one per line)');
            $table->timestamps();
            
            $table->foreign('category_id')->references('id')->on('assessment_categories')->onDelete('cascade');
            $table->foreign('age_group_id')->references('id')->on('assessment_age_groups')->onDelete('cascade');
            $table->index(['category_id', 'age_group_id']);
            $table->index('age_group_id');
            $table->index('sort_order');
        });
    }

    public function down()
    {
        Schema::dropIfExists('assessment_questions');
    }
}

