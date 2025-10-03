<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixTeacherLeavesLeaveTypeIdType extends Migration
{
    public function up()
    {
        Schema::table('teacher_leaves', function (Blueprint $table) {
            // Change leave_type_id from int to bigint unsigned
            $table->unsignedBigInteger('leave_type_id')->default(0)->change();
        });
    }

    public function down()
    {
        Schema::table('teacher_leaves', function (Blueprint $table) {
            // Revert back to int
            $table->integer('leave_type_id')->default(0)->change();
        });
    }
}
