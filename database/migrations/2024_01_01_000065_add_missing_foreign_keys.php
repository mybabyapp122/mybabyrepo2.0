<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddMissingForeignKeys extends Migration
{
    /**
     * Check if a foreign key constraint exists for a given table and column
     */
    private function foreignKeyExists($table, $column)
    {
        $constraints = DB::select("
            SELECT CONSTRAINT_NAME 
            FROM INFORMATION_SCHEMA.KEY_COLUMN_USAGE 
            WHERE TABLE_NAME = ? 
            AND COLUMN_NAME = ? 
            AND CONSTRAINT_NAME LIKE '%foreign%'
        ", [$table, $column]);
        
        return !empty($constraints);
    }
    public function up()
    {
        // Add foreign key for teacher_attendance.user_id (skip if already exists)
        if (!$this->foreignKeyExists('teacher_attendance', 'user_id')) {
            Schema::table('teacher_attendance', function (Blueprint $table) {
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            });
        }
        
        // Add foreign key for teacher_attendance.school_id (skip if already exists)
        if (!$this->foreignKeyExists('teacher_attendance', 'school_id')) {
            Schema::table('teacher_attendance', function (Blueprint $table) {
                $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
            });
        }

        // Add foreign key for groups.school_id (skip if already exists)
        if (!$this->foreignKeyExists('groups', 'school_id')) {
            Schema::table('groups', function (Blueprint $table) {
                $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
            });
        }

        // Add foreign key for group_members.user_id (skip if already exists)
        if (!$this->foreignKeyExists('group_members', 'user_id')) {
            Schema::table('group_members', function (Blueprint $table) {
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            });
        }

        // Add foreign key for messages.sender_id (skip if already exists)
        if (!$this->foreignKeyExists('messages', 'sender_id')) {
            Schema::table('messages', function (Blueprint $table) {
                $table->foreign('sender_id')->references('id')->on('users')->onDelete('cascade');
            });
        }

        // Add foreign key for feed.user_id (skip if already exists)
        if (!$this->foreignKeyExists('feed', 'user_id')) {
            Schema::table('feed', function (Blueprint $table) {
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            });
        }

        // Add foreign key for feed_comments.user_id (skip if already exists)
        if (!$this->foreignKeyExists('feed_comments', 'user_id')) {
            Schema::table('feed_comments', function (Blueprint $table) {
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            });
        }

        // Add foreign key for feed_likes.user_id (skip if already exists)
        if (!$this->foreignKeyExists('feed_likes', 'user_id')) {
            Schema::table('feed_likes', function (Blueprint $table) {
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            });
        }

        // Add foreign key for announcements.user_id (skip if already exists)
        if (!$this->foreignKeyExists('announcements', 'user_id')) {
            Schema::table('announcements', function (Blueprint $table) {
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            });
        }

        // Add foreign key for push_notifications.user_id (skip if already exists)
        if (!$this->foreignKeyExists('push_notifications', 'user_id')) {
            Schema::table('push_notifications', function (Blueprint $table) {
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            });
        }

        // Add foreign key for activity_logs.user_id (skip if already exists)
        if (!$this->foreignKeyExists('activity_logs', 'user_id')) {
            Schema::table('activity_logs', function (Blueprint $table) {
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            });
        }

        // Add foreign key for watsapp_logs.user_id (skip if already exists)
        if (!$this->foreignKeyExists('watsapp_logs', 'user_id')) {
            Schema::table('watsapp_logs', function (Blueprint $table) {
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            });
        }

        // Add foreign key for logs.user_id (skip if already exists)
        if (!$this->foreignKeyExists('logs', 'user_id')) {
            Schema::table('logs', function (Blueprint $table) {
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            });
        }

        // Add foreign key for school_timings.school_id (skip if already exists)
        if (!$this->foreignKeyExists('school_timings', 'school_id')) {
            Schema::table('school_timings', function (Blueprint $table) {
                $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
            });
        }

        // Add foreign key for teacher_leaves.teacher_id (skip if already exists)
        if (!$this->foreignKeyExists('teacher_leaves', 'teacher_id')) {
            Schema::table('teacher_leaves', function (Blueprint $table) {
                $table->foreign('teacher_id')->references('id')->on('users')->onDelete('cascade');
            });
        }

        // Add foreign key for grade_teacher.teacher_id (skip if already exists)
        if (!$this->foreignKeyExists('grade_teacher', 'teacher_id')) {
            Schema::table('grade_teacher', function (Blueprint $table) {
                $table->foreign('teacher_id')->references('id')->on('users')->onDelete('cascade');
            });
        }

        // Add foreign key for grade_teacher_schedule.teacher_id (skip if already exists)
        if (!$this->foreignKeyExists('grade_teacher_schedule', 'teacher_id')) {
            Schema::table('grade_teacher_schedule', function (Blueprint $table) {
                $table->foreign('teacher_id')->references('id')->on('users')->onDelete('cascade');
            });
        }

        // Add foreign key for student_pickup_requests.parent_id (skip if already exists)
        if (!$this->foreignKeyExists('student_pickup_requests', 'parent_id')) {
            Schema::table('student_pickup_requests', function (Blueprint $table) {
                $table->foreign('parent_id')->references('id')->on('users')->onDelete('cascade');
            });
        }

        // Add foreign key for student_pickup_requests.school_id (skip if already exists)
        if (!$this->foreignKeyExists('student_pickup_requests', 'school_id')) {
            Schema::table('student_pickup_requests', function (Blueprint $table) {
                $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
            });
        }

        // Add foreign key for reports_hourly_student_requests.parent_id (skip if already exists)
        if (!$this->foreignKeyExists('reports_hourly_student_requests', 'parent_id')) {
            Schema::table('reports_hourly_student_requests', function (Blueprint $table) {
                $table->foreign('parent_id')->references('id')->on('users')->onDelete('cascade');
            });
        }

        // Add foreign key for reports_hourly_student_requests.teacher_id (skip if already exists)
        if (!$this->foreignKeyExists('reports_hourly_student_requests', 'teacher_id')) {
            Schema::table('reports_hourly_student_requests', function (Blueprint $table) {
                $table->foreign('teacher_id')->references('id')->on('users')->onDelete('cascade');
            });
        }

        // Add foreign key for teacher_leaves.school_id (skip if already exists)
        if (!$this->foreignKeyExists('teacher_leaves', 'school_id')) {
            Schema::table('teacher_leaves', function (Blueprint $table) {
                $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
            });
        }
    }

    public function down()
    {
        // Drop foreign keys in reverse order
        Schema::table('teacher_leaves', function (Blueprint $table) {
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
            $table->dropForeign(['user_id']);
        });

        Schema::table('announcements', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::table('feed_likes', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::table('feed_comments', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::table('feed', function (Blueprint $table) {
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

        Schema::table('assessment_age_groups', function (Blueprint $table) {
            $table->dropForeign(['school_id']);
        });

        Schema::table('teacher_attendance', function (Blueprint $table) {
            $table->dropForeign(['school_id']);
            $table->dropForeign(['user_id']);
        });
    }
}
