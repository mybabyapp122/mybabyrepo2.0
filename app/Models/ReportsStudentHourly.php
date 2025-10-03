<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportsStudentHourly extends Model
{
    use HasFactory;

    protected $table = 'reports_student_hourly';

    protected $fillable = [
        'student_id',
        'parent_id',
        'grade_id',
        'school_id',
        'teacher_id',
        'date_of_report',
        'time_of_report',
        'mood_icon_id',
        'images',
        'notes',
        'created_by',
    ];

    protected $casts = [
        'date_of_report' => 'date',
        'time_of_report' => 'datetime:H:i',
        'images' => 'array',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function parent()
    {
        return $this->belongsTo(User::class, 'parent_id');
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function school()
    {
        return $this->belongsTo(User::class, 'school_id');
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function moodIcon()
    {
        return $this->belongsTo(ReportsIcon::class, 'mood_icon_id');
    }
}

