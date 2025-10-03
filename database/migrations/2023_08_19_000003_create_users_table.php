<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // Basic Laravel user fields
            $table->bigIncrements('id');
            $table->string('username')->unique()->nullable();
            $table->string('name')->nullable();
            $table->string('name_ar')->nullable();
            $table->string('email')->unique()->nullable();
            $table->datetime('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('remember_token')->nullable();
            
            // Old system user fields
            $table->string('mobile')->nullable();
            $table->string('wa_mobile', 50)->nullable();
            $table->string('country_code', 25)->nullable();
            $table->datetime('dob')->nullable();
            $table->enum('gender', ['m', 'f'])->nullable();
            $table->enum('role', ['admin', 'school', 'teacher', 'parent'])->nullable();
            $table->string('auth_key')->nullable();
            $table->string('password_reset_token')->nullable();
            $table->boolean('show_notification')->default(true);
            $table->string('language')->nullable();
            $table->string('country_id')->nullable();
            $table->string('city_id')->nullable();
            $table->string('street_address')->nullable();
            $table->enum('status', ['active', 'pending', 'blocked'])->default('pending');
            $table->string('status_ex')->nullable();
            $table->string('business_website', 500)->nullable();
            $table->string('social_instagram', 500)->nullable();
            $table->string('social_facebook', 500)->nullable();
            
            // Plan and subscription fields
            $table->unsignedBigInteger('plan_id')->default(1);
            $table->datetime('plan_renewal_date')->nullable();
            $table->datetime('plan_expiry_date')->nullable();
            $table->decimal('plan_amount', 19, 2)->default(0.00);
            $table->datetime('last_activity_time')->nullable();
            
            // Timestamps
            $table->timestamps();
            $table->softDeletes();
            
            // Indexes
            $table->index('plan_id');
            $table->index('role');
            $table->index('status');
            $table->index('email');
            $table->index('mobile');
        });
    }
}
