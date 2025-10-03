<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->unsignedBigInteger('grade_id')->nullable();
            $table->string('name')->nullable();
            $table->bigInteger('id_number')->nullable();
            $table->string('name_ar')->nullable();
            $table->date('dob')->nullable();
            $table->enum('gender', ['m', 'f'])->nullable();
            $table->longText('health')->nullable();
            $table->longText('allergies')->nullable();
            $table->string('status')->default('active');
            $table->string('status_ex')->nullable();
            $table->string('payment_mode', 25)->nullable();
            $table->string('rate', 50)->nullable();
            $table->integer('is_invoice_generated')->default(0);
            $table->integer('is_tax_applicable')->nullable();
            $table->string('delete_last_status', 100)->nullable();
            $table->timestamps();
            
            $table->foreign('parent_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}

