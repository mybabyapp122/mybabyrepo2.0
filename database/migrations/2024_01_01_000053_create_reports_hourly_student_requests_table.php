<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsHourlyStudentRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('reports_hourly_student_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('grade_id');
            $table->unsignedBigInteger('parent_id');
            $table->unsignedBigInteger('teacher_id')->nullable();
            $table->datetime('request_date')->useCurrent();
            $table->enum('status', ['pending', 'processed', 'rejected'])->default('pending');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reports_hourly_student_requests');
    }
}
