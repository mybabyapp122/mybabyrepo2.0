<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailTables extends Migration
{
    public function up()
    {
        Schema::create('email_templates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('template_key', 100);
            $table->string('language', 10)->default('en');
            $table->string('subject');
            $table->text('body');
            $table->text('variables')->nullable()->comment('JSON array of available variables');
            $table->timestamps();
            
            $table->unique(['template_key', 'language']);
        });

        Schema::create('email_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('template_id')->nullable();
            $table->string('template_key', 100)->nullable();
            $table->string('recipient');
            $table->string('subject');
            $table->text('body');
            $table->string('status', 20)->default('pending');
            $table->text('error_message')->nullable();
            $table->timestamp('sent_at')->useCurrent();
            $table->text('params')->nullable()->comment('JSON data used for template');
            
            $table->foreign('template_id')->references('id')->on('email_templates')->onDelete('set null')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('email_logs');
        Schema::dropIfExists('email_templates');
    }
}
