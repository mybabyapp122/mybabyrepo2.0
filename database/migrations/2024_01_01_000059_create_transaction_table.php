<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionTable extends Migration
{
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('model')->nullable();
            $table->integer('model_id')->nullable();
            $table->unsignedBigInteger('sale_id')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('debit')->nullable()->comment('amount taken from');
            $table->string('credit')->nullable()->comment('amount added to');
            $table->string('description', 500)->nullable();
            $table->decimal('base_amount', 19, 4)->nullable();
            $table->decimal('vat_amount', 19, 4)->default(0.0000);
            $table->decimal('total_amount', 19, 4)->default(0.0000);
            $table->decimal('vat_percent', 19, 4)->nullable();
            $table->string('currency', 32)->default('SAR');
            $table->string('method')->nullable()->comment('cash, card, applepay, gpay, etc.');
            $table->string('card_type')->nullable()->comment('mada, visa, mastercard, etc.');
            $table->string('gateway')->nullable()->comment('moyasar, etc.');
            $table->decimal('gateway_amount', 19, 2)->default(0.00);
            $table->decimal('gateway_cost', 19, 2)->default(0.00);
            $table->boolean('gateway_live')->default(true);
            $table->enum('status', ['created', 'initiated', 'paid', 'cancelled', 'refunded', 'failed', 'unknown'])->default('created');
            $table->string('status_ex')->nullable();
            $table->string('payment_url')->nullable();
            $table->string('return_url')->nullable();
            $table->timestamps();
            
            $table->foreign('sale_id')->references('id')->on('sale')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaction');
    }
}
