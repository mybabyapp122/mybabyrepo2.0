<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceCalendarYearlyTable extends Migration
{
    public function up()
    {
        Schema::create('attendance_calendar_yearly', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->string('type', 11);
            $table->boolean('status')->default(true);
            $table->datetime('created_at')->useCurrent();
            $table->datetime('update_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('attendance_calendar_yearly');
    }
}
