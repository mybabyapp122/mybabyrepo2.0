<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Add new columns if they don't exist
            if (!Schema::hasColumn('users', 'username')) {
                $table->string('username')->unique()->nullable()->after('id');
            }
            if (!Schema::hasColumn('users', 'name_ar')) {
                $table->string('name_ar')->nullable()->after('name');
            }
            if (!Schema::hasColumn('users', 'mobile')) {
                $table->string('mobile')->nullable()->after('remember_token');
            }
            if (!Schema::hasColumn('users', 'wa_mobile')) {
                $table->string('wa_mobile', 50)->nullable()->after('mobile');
            }
            if (!Schema::hasColumn('users', 'country_code')) {
                $table->string('country_code', 25)->nullable()->after('wa_mobile');
            }
            if (!Schema::hasColumn('users', 'dob')) {
                $table->datetime('dob')->nullable()->after('country_code');
            }
            if (!Schema::hasColumn('users', 'gender')) {
                $table->enum('gender', ['m', 'f'])->nullable()->after('dob');
            }
            if (!Schema::hasColumn('users', 'role')) {
                $table->enum('role', ['admin', 'school', 'teacher', 'parent'])->nullable()->after('gender');
            }
            if (!Schema::hasColumn('users', 'auth_key')) {
                $table->string('auth_key')->nullable()->after('role');
            }
            if (!Schema::hasColumn('users', 'password_reset_token')) {
                $table->string('password_reset_token')->nullable()->after('auth_key');
            }
            if (!Schema::hasColumn('users', 'show_notification')) {
                $table->boolean('show_notification')->default(true)->after('password_reset_token');
            }
            if (!Schema::hasColumn('users', 'language')) {
                $table->string('language')->nullable()->after('show_notification');
            }
            if (!Schema::hasColumn('users', 'country_id')) {
                $table->string('country_id')->nullable()->after('language');
            }
            if (!Schema::hasColumn('users', 'city_id')) {
                $table->string('city_id')->nullable()->after('country_id');
            }
            if (!Schema::hasColumn('users', 'street_address')) {
                $table->string('street_address')->nullable()->after('city_id');
            }
            if (!Schema::hasColumn('users', 'status')) {
                $table->enum('status', ['active', 'pending', 'blocked'])->default('pending')->after('street_address');
            }
            if (!Schema::hasColumn('users', 'status_ex')) {
                $table->string('status_ex')->nullable()->after('status');
            }
            if (!Schema::hasColumn('users', 'business_website')) {
                $table->string('business_website', 500)->nullable()->after('status_ex');
            }
            if (!Schema::hasColumn('users', 'social_instagram')) {
                $table->string('social_instagram', 500)->nullable()->after('business_website');
            }
            if (!Schema::hasColumn('users', 'social_facebook')) {
                $table->string('social_facebook', 500)->nullable()->after('social_instagram');
            }
            if (!Schema::hasColumn('users', 'plan_id')) {
                $table->unsignedBigInteger('plan_id')->default(1)->after('social_facebook');
            }
            if (!Schema::hasColumn('users', 'plan_renewal_date')) {
                $table->datetime('plan_renewal_date')->nullable()->after('plan_id');
            }
            if (!Schema::hasColumn('users', 'plan_expiry_date')) {
                $table->datetime('plan_expiry_date')->nullable()->after('plan_renewal_date');
            }
            if (!Schema::hasColumn('users', 'plan_amount')) {
                $table->decimal('plan_amount', 19, 2)->default(0.00)->after('plan_expiry_date');
            }
            if (!Schema::hasColumn('users', 'last_activity_time')) {
                $table->datetime('last_activity_time')->nullable()->after('plan_amount');
            }
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'username', 'name_ar', 'mobile', 'wa_mobile', 'country_code', 'dob', 'gender', 'role',
                'auth_key', 'password_reset_token', 'show_notification', 'language', 'country_id',
                'city_id', 'street_address', 'status', 'status_ex', 'business_website', 'social_instagram',
                'social_facebook', 'plan_id', 'plan_renewal_date', 'plan_expiry_date', 'plan_amount', 'last_activity_time'
            ]);
        });
    }
}
