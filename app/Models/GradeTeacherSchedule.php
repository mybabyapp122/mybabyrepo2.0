<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradeTeacherSchedule extends Model
{
    use HasFactory;

    protected $table = 'grade_teacher_schedule';

    protected $fillable = [
        'grade_id',
        'teacher_id',
        'day_of_week',
        'start_time',
        'end_time',
        'start_date',
        'end_date',
    ];

    protected $casts = [
        'start_time' => 'datetime:H:i',
        'end_time' => 'datetime:H:i',
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }
}
