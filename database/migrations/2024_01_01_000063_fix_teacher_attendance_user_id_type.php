<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixTeacherAttendanceUserIdType extends Migration
{
    public function up()
    {
        Schema::table('teacher_attendance', function (Blueprint $table) {
            // Change user_id from varchar(100) to bigint unsigned
            $table->unsignedBigInteger('user_id')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('teacher_attendance', function (Blueprint $table) {
            // Revert back to varchar(100)
            $table->string('user_id', 100)->nullable()->change();
        });
    }
}
