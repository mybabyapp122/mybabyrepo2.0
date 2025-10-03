<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportsStudent extends Model
{
    use HasFactory;

    protected $table = 'reports_student';

    protected $fillable = [
        'student_id',
        'parent_id',
        'grade_id',
        'school_id',
        'teacher_id',
        'date_of_report',
        'mood_icon_id',
        'food_type_id',
        'food_time',
        'food_given_id',
        'consumption_icon_id',
        'sleep_from_time',
        'sleep_to_time',
        'is_sleep_time',
        'activities_id',
        'potty_time',
        'potty_reason_id',
        'temperature_time',
        'temperature_c',
        'is_fever',
        'attachments',
        'notes',
        'created_by',
    ];

    protected $casts = [
        'date_of_report' => 'date',
        'food_time' => 'datetime:H:i',
        'sleep_from_time' => 'datetime:H:i',
        'sleep_to_time' => 'datetime:H:i',
        'potty_time' => 'datetime:H:i',
        'temperature_time' => 'datetime:H:i',
        'attachments' => 'array',
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

    public function foodType()
    {
        return $this->belongsTo(ReportsFoodCategory::class, 'food_type_id');
    }

    public function consumptionIcon()
    {
        return $this->belongsTo(ReportsIcon::class, 'consumption_icon_id');
    }

    public function pottyReason()
    {
        return $this->belongsTo(ReportsToiletCategory::class, 'potty_reason_id');
    }
}

