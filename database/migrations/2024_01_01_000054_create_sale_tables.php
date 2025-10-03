<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleTables extends Migration
{
    public function up()
    {
        Schema::create('sale', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('creator_model', 50)->nullable();
            $table->integer('creator_id')->nullable();
            $table->string('payer_model', 50)->nullable();
            $table->integer('payer_id')->nullable();
            $table->string('type')->nullable()->comment('sale, plan-upgrade, etc.');
            $table->enum('status', ['paid', 'unpaid', 'cancelled', 'failed'])->default('unpaid');
            $table->string('status_ex')->nullable();
            $table->string('invoice_id')->nullable();
            $table->longText('metadata')->nullable();
            $table->datetime('order_date')->nullable();
            $table->datetime('due_date')->nullable();
            $table->string('gateway_invoice_id', 500)->nullable();
            $table->string('gateway_invoice_url', 500)->nullable();
            $table->timestamps();
        });

        Schema::create('sale_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('json')->nullable();
            $table->integer('student_id')->nullable();
            $table->datetime('created_at')->useCurrent();
            $table->integer('created_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sale_logs');
        Schema::dropIfExists('sale');
    }
}
