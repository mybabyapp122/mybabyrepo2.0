<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaveTypeTable extends Migration
{
    public function up()
    {
        Schema::create('leave_type', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50);
            $table->string('name_ar', 100)->nullable();
            $table->string('leave_code');
            $table->text('leave_description');
            $table->text('color');
            $table->boolean('for_leave_apply');
            $table->integer('total_leave')->default(0);
            $table->integer('min_leave')->default(0);
            $table->integer('school_id')->default(0);
            $table->boolean('status')->default(false);
            $table->datetime('date_entered')->nullable();
            $table->datetime('date_modified')->nullable();
            $table->integer('modified_user_id')->nullable();
            $table->integer('created_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('leave_type');
    }
}
