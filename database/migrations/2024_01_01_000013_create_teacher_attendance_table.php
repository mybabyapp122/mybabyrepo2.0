<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherAttendanceTable extends Migration
{
    public function up()
    {
        Schema::create('teacher_attendance', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id', 100)->nullable();
            $table->unsignedBigInteger('school_id')->nullable();
            $table->time('time_in')->nullable();
            $table->time('time_out')->nullable();
            $table->date('work_date');
            $table->string('attendance_status', 100)->nullable();
            $table->string('latitude_in', 30)->nullable();
            $table->string('longitude_in', 30)->nullable();
            $table->enum('device_type_in', ['manual', 'machine', 'api', 'ios', 'android'])->default('manual');
            $table->string('latitude_out', 30)->nullable();
            $table->string('longitude_out', 30)->nullable();
            $table->enum('device_type_out', ['manual', 'machine', 'api', 'ios', 'android'])->default('manual');
            $table->boolean('status')->default(true);
            $table->datetime('date_entered')->nullable();
            $table->datetime('date_modified')->nullable();
            $table->integer('modified_user_id')->nullable();
            $table->integer('created_by')->nullable();
            $table->timestamps();
            
            $table->unique(['id', 'work_date']);
            $table->index('work_date');
            $table->index('attendance_status');
            $table->index('user_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('teacher_attendance');
    }
}

