<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessmentAgeGroupsTable extends Migration
{
    public function up()
    {
        Schema::create('assessment_age_groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('age_group_name', 100);
            $table->string('age_group_name_ar', 100);
            $table->unsignedBigInteger('school_id')->nullable();
            $table->string('form_name');
            $table->string('form_name_ar');
            $table->boolean('is_all_schools')->default(false);
            $table->integer('min_age_months');
            $table->integer('max_age_months');
            $table->boolean('status')->default(true);
            $table->string('type', 20)->default('regular')->comment('Age group type: regular or special');
            $table->timestamps();
            
            $table->foreign('school_id')->references('id')->on('users')->onDelete('set null');
            $table->index('type');
        });
    }

    public function down()
    {
        Schema::dropIfExists('assessment_age_groups');
    }
}

