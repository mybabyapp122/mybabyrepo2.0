<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRemainingForeignKeys extends Migration
{
    public function up()
    {
        // Add foreign key for push_notifications.user_id
        Schema::table('push_notifications', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Add foreign key for push_notifications.sale_id
        Schema::table('push_notifications', function (Blueprint $table) {
            $table->foreign('sale_id')->references('id')->on('sale')->onDelete('set null');
        });

        // Add foreign key for push_notifications.student_id
        Schema::table('push_notifications', function (Blueprint $table) {
            $table->foreign('student_id')->references('id')->on('students')->onDelete('set null');
        });

        // Add foreign key for activity_logs.user_id
        Schema::table('activity_logs', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });

        // Add foreign key for watsapp_logs.user_id
        Schema::table('watsapp_logs', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Add foreign key for logs.user_id
        Schema::table('logs', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Add foreign key for school_timings.school_id
        Schema::table('school_timings', function (Blueprint $table) {
            $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Add foreign key for teacher_leaves.teacher_id
        Schema::table('teacher_leaves', function (Blueprint $table) {
            $table->foreign('teacher_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Add foreign key for teacher_leaves.school_id
        Schema::table('teacher_leaves', function (Blueprint $table) {
            $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Add foreign key for grade_teacher.teacher_id
        Schema::table('grade_teacher', function (Blueprint $table) {
            $table->foreign('teacher_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Add foreign key for grade_teacher_schedule.teacher_id
        Schema::table('grade_teacher_schedule', function (Blueprint $table) {
            $table->foreign('teacher_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Add foreign key for student_pickup_requests.parent_id
        Schema::table('student_pickup_requests', function (Blueprint $table) {
            $table->foreign('parent_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Add foreign key for student_pickup_requests.school_id
        Schema::table('student_pickup_requests', function (Blueprint $table) {
            $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Add foreign key for reports_hourly_student_requests.parent_id
        Schema::table('reports_hourly_student_requests', function (Blueprint $table) {
            $table->foreign('parent_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Add foreign key for reports_hourly_student_requests.teacher_id
        Schema::table('reports_hourly_student_requests', function (Blueprint $table) {
            $table->foreign('teacher_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Add foreign key for groups.school_id
        Schema::table('groups', function (Blueprint $table) {
            $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Add foreign key for group_members.user_id
        Schema::table('group_members', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Add foreign key for messages.sender_id
        Schema::table('messages', function (Blueprint $table) {
            $table->foreign('sender_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Add foreign key for feed_comments.user_id
        Schema::table('feed_comments', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Add foreign key for feed_likes.user_id
        Schema::table('feed_likes', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        // Drop foreign keys in reverse order
        Schema::table('feed_likes', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::table('feed_comments', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::table('messages', function (Blueprint $table) {
            $table->dropForeign(['sender_id']);
        });

        Schema::table('group_members', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::table('groups', function (Blueprint $table) {
            $table->dropForeign(['school_id']);
        });

        Schema::table('reports_hourly_student_requests', function (Blueprint $table) {
            $table->dropForeign(['teacher_id']);
            $table->dropForeign(['parent_id']);
        });

        Schema::table('student_pickup_requests', function (Blueprint $table) {
            $table->dropForeign(['school_id']);
            $table->dropForeign(['parent_id']);
        });

        Schema::table('grade_teacher_schedule', function (Blueprint $table) {
            $table->dropForeign(['teacher_id']);
        });

        Schema::table('grade_teacher', function (Blueprint $table) {
            $table->dropForeign(['teacher_id']);
        });

        Schema::table('teacher_leaves', function (Blueprint $table) {
            $table->dropForeign(['school_id']);
            $table->dropForeign(['teacher_id']);
        });

        Schema::table('school_timings', function (Blueprint $table) {
            $table->dropForeign(['school_id']);
        });

        Schema::table('logs', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::table('watsapp_logs', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::table('activity_logs', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::table('push_notifications', function (Blueprint $table) {
            $table->dropForeign(['student_id']);
            $table->dropForeign(['sale_id']);
            $table->dropForeign(['user_id']);
        });
    }
}
