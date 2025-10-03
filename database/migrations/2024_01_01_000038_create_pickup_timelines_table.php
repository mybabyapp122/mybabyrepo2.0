<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePickupTimelinesTable extends Migration
{
    public function up()
    {
        Schema::create('pickup_timelines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pickup_request_id');
            $table->unsignedBigInteger('student_id');
            $table->enum('status', ['on_the_way', 'at_the_gate', 'child_sent_at_gate', 'child_received']);
            $table->enum('current', ['in_process', 'completed'])->default('in_process');
            $table->datetime('created_at')->useCurrent();
            
            $table->foreign('pickup_request_id')->references('id')->on('student_pickup_requests')->onDelete('cascade');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pickup_timelines');
    }
}

