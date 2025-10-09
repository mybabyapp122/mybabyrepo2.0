<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMissingForeignKeysAndSchoolSettings extends Migration
{
    public function up()
    {
        // Add foreign key for teacher_leaves.leave_type_id
        Schema::table('teacher_leaves', function (Blueprint $table) {
            $table->foreign('leave_type_id')->references('id')->on('leave_type')->onDelete('cascade');
        });

        // Add foreign key for reports_hourly_student_requests.student_id
        Schema::table('reports_hourly_student_requests', function (Blueprint $table) {
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
        });

        // Add foreign key for reports_hourly_student_requests.grade_id
        Schema::table('reports_hourly_student_requests', function (Blueprint $table) {
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('cascade');
        });

        // Add foreign key for reports_hourly_student_requests.parent_id
        Schema::table('reports_hourly_student_requests', function (Blueprint $table) {
            $table->foreign('parent_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Add foreign key for reports_hourly_student_requests.teacher_id
        Schema::table('reports_hourly_student_requests', function (Blueprint $table) {
            $table->foreign('teacher_id')->references('id')->on('users')->onDelete('set null');
        });

        // Create school_settings table
        Schema::create('school_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('school_id');
            $table->string('school_name')->nullable();
            $table->string('school_name_ar')->nullable();
            $table->string('logo')->nullable();
            $table->string('logo_ar')->nullable();
            $table->string('primary_color', 7)->default('#007bff');
            $table->string('secondary_color', 7)->default('#6c757d');
            $table->string('accent_color', 7)->default('#28a745');
            $table->string('text_color', 7)->default('#212529');
            $table->string('background_color', 7)->default('#ffffff');
            $table->string('header_color', 7)->default('#343a40');
            $table->string('footer_color', 7)->default('#f8f9fa');
            $table->string('button_color', 7)->default('#007bff');
            $table->string('button_text_color', 7)->default('#ffffff');
            $table->string('link_color', 7)->default('#007bff');
            $table->string('border_color', 7)->default('#dee2e6');
            $table->string('success_color', 7)->default('#28a745');
            $table->string('warning_color', 7)->default('#ffc107');
            $table->string('danger_color', 7)->default('#dc3545');
            $table->string('info_color', 7)->default('#17a2b8');
            $table->string('light_color', 7)->default('#f8f9fa');
            $table->string('dark_color', 7)->default('#343a40');
            $table->text('custom_css')->nullable();
            $table->text('custom_js')->nullable();
            $table->string('timezone')->default('UTC');
            $table->string('date_format')->default('Y-m-d');
            $table->string('time_format')->default('H:i:s');
            $table->string('currency', 3)->default('USD');
            $table->string('currency_symbol', 5)->default('$');
            $table->string('language')->default('en');
            $table->string('rtl_language')->default('ar');
            $table->boolean('enable_notifications')->default(true);
            $table->boolean('enable_email_notifications')->default(true);
            $table->boolean('enable_sms_notifications')->default(false);
            $table->boolean('enable_push_notifications')->default(true);
            $table->boolean('enable_attendance_tracking')->default(true);
            $table->boolean('enable_grade_management')->default(true);
            $table->boolean('enable_assessment_system')->default(true);
            $table->boolean('enable_reports_system')->default(true);
            $table->boolean('enable_communication_system')->default(true);
            $table->boolean('enable_pickup_system')->default(true);
            $table->boolean('enable_financial_management')->default(true);
            $table->integer('max_students_per_grade')->default(30);
            $table->integer('max_teachers_per_grade')->default(3);
            $table->integer('session_timeout')->default(30);
            $table->text('terms_and_conditions')->nullable();
            $table->text('privacy_policy')->nullable();
            $table->text('about_us')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('contact_address')->nullable();
            $table->string('website_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->timestamps();
            
            $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
            $table->index('school_id');
        });
    }

    public function down()
    {
        // Drop school_settings table
        Schema::dropIfExists('school_settings');
        
        // Drop foreign keys in reverse order
        Schema::table('reports_hourly_student_requests', function (Blueprint $table) {
            $table->dropForeign(['teacher_id']);
            $table->dropForeign(['parent_id']);
            $table->dropForeign(['grade_id']);
            $table->dropForeign(['student_id']);
        });

        Schema::table('teacher_leaves', function (Blueprint $table) {
            $table->dropForeign(['leave_type_id']);
        });
    }
}
