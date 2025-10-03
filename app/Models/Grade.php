<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_id',
        'title',
        'payment_mode',
        'per_hour_rate',
        'per_month_rate',
        'per_semester_rate',
        'per_year_rate',
        'permanent_teacher_id',
        'temporary_teacher_id',
        'temporary_date',
    ];

    public function school()
    {
        return $this->belongsTo(User::class, 'school_id');
    }

    public function permanentTeacher()
    {
        return $this->belongsTo(User::class, 'permanent_teacher_id');
    }

    public function temporaryTeacher()
    {
        return $this->belongsTo(User::class, 'temporary_teacher_id');
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function assessments()
    {
        return $this->hasMany(StudentAssessment::class);
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }

    public function ratio()
    {
        return $this->hasOne(GradeRatio::class);
    }

    public function teachers()
    {
        return $this->hasMany(GradeTeacher::class);
    }

    public function teacherSchedules()
    {
        return $this->hasMany(GradeTeacherSchedule::class);
    }

    public function studentSchedules()
    {
        return $this->hasMany(StudentSchedule::class);
    }
}

