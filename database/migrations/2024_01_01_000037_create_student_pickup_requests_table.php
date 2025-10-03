<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentPickupRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('student_pickup_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('parent_id');
            $table->unsignedBigInteger('grade_id');
            $table->string('teacher_id')->nullable();
            $table->unsignedBigInteger('school_id');
            $table->datetime('pickup_time');
            $table->enum('status', ['on_the_way', 'at_the_gate', 'child_sent_at_gate', 'received', 'cancelled'])->default('on_the_way');
            $table->datetime('status_updated_at');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_pickup_requests');
    }
}

