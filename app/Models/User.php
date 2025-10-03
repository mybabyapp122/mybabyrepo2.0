<?php

namespace App\Models;

use Hash;
use Carbon\Carbon;
use DateTimeInterface;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use SoftDeletes, Notifiable, HasFactory,HasApiTokens;

    public $table = 'users';

    protected $hidden = [
        'remember_token',
        'password',
    ];

    protected $dates = [
        'email_verified_at',
        'dob',
        'plan_renewal_date',
        'plan_expiry_date',
        'last_activity_time',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $casts = [
        'show_notification' => 'boolean',
        'plan_amount' => 'decimal:2',
    ];

    protected $fillable = [
        'username',
        'name',
        'name_ar',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'mobile',
        'wa_mobile',
        'country_code',
        'dob',
        'gender',
        'auth_key',
        'password_reset_token',
        'show_notification',
        'language',
        'country_id',
        'city_id',
        'street_address',
        'status',
        'status_ex',
        'business_website',
        'social_instagram',
        'social_facebook',
        'plan_id',
        'plan_renewal_date',
        'plan_expiry_date',
        'plan_amount',
        'last_activity_time',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function getIsAdminAttribute()
    {
        return $this->roles()->where('id', 1)->exists();
    }

    public function getEmailVerifiedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setEmailVerifiedAtAttribute($value)
    {
        $this->attributes['email_verified_at'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function setPasswordAttribute($input)
    {
        if ($input) {
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
        }
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'country_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'city_id');
    }

    // School relationships
    public function grades()
    {
        return $this->hasMany(Grade::class, 'school_id');
    }

    public function groups()
    {
        return $this->hasMany(Group::class, 'school_id');
    }

    // Parent relationships
    public function students()
    {
        return $this->hasMany(Student::class, 'parent_id');
    }

    // Teacher relationships
    public function permanentGrades()
    {
        return $this->hasMany(Grade::class, 'permanent_teacher_id');
    }

    public function temporaryGrades()
    {
        return $this->hasMany(Grade::class, 'temporary_teacher_id');
    }

    // Assessment relationships
    public function assessments()
    {
        return $this->hasMany(StudentAssessment::class, 'teacher_id');
    }

    public function createdAssessments()
    {
        return $this->hasMany(StudentAssessment::class, 'created_by');
    }

    // Report relationships
    public function studentReports()
    {
        return $this->hasMany(ReportsStudent::class, 'teacher_id');
    }

    public function hourlyReports()
    {
        return $this->hasMany(ReportsStudentHourly::class, 'teacher_id');
    }

    public function observations()
    {
        return $this->hasMany(ReportsObservation::class, 'teacher_id');
    }

    public function createdObservations()
    {
        return $this->hasMany(ReportsObservation::class, 'created_by');
    }

    public function injuries()
    {
        return $this->hasMany(ReportsInjury::class, 'teacher_id');
    }

    // Communication relationships
    public function sentMessages()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    public function groupMemberships()
    {
        return $this->hasMany(GroupMember::class);
    }

    // Feed relationships
    public function feeds()
    {
        return $this->hasMany(Feed::class);
    }

    public function feedComments()
    {
        return $this->hasMany(FeedComment::class);
    }

    public function feedLikes()
    {
        return $this->hasMany(FeedLike::class);
    }

    // Notification relationships
    public function pushNotifications()
    {
        return $this->hasMany(PushNotification::class);
    }

    public function activityLogs()
    {
        return $this->hasMany(ActivityLog::class);
    }

    // Announcement relationships
    public function announcements()
    {
        return $this->hasMany(Announcement::class);
    }

    // Additional relationships

    public function watsappLogs()
    {
        return $this->hasMany(WatsappLog::class);
    }

    public function logs()
    {
        return $this->hasMany(Log::class);
    }

    public function schoolTimings()
    {
        return $this->hasMany(SchoolTiming::class, 'school_id');
    }

    public function teacherLeaves()
    {
        return $this->hasMany(TeacherLeave::class, 'teacher_id');
    }

    public function gradeTeachers()
    {
        return $this->hasMany(GradeTeacher::class, 'teacher_id');
    }

    public function gradeTeacherSchedules()
    {
        return $this->hasMany(GradeTeacherSchedule::class, 'teacher_id');
    }

    public function schoolSettings()
    {
        return $this->hasOne(SchoolSetting::class, 'school_id');
    }
}
