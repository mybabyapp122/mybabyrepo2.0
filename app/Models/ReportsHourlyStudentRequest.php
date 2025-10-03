<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportsHourlyStudentRequest extends Model
{
    use HasFactory;

    protected $table = 'reports_hourly_student_requests';

    protected $fillable = [
        'student_id',
        'grade_id',
        'parent_id',
        'teacher_id',
        'status',
    ];

    protected $casts = [
        'request_date' => 'datetime',
    ];
}
