<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherLeavesTable extends Migration
{
    public function up()
    {
        Schema::create('teacher_leaves', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('teacher_id');
            $table->integer('leave_type_id')->default(0);
            $table->string('leave_type', 20)->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('total_days');
            $table->string('reason');
            $table->enum('status', ['Pending', 'Approved', 'Rejected'])->default('Pending');
            $table->unsignedBigInteger('school_id')->nullable();
            $table->datetime('approve_reject_at')->nullable();
            $table->string('rejection_reason')->nullable();
            $table->timestamps();
            
            $table->index('teacher_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('teacher_leaves');
    }
}
