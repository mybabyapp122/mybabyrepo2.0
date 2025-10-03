<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherAttendance extends Model
{
    use HasFactory;

    protected $table = 'teacher_attendance';

    protected $fillable = [
        'user_id',
        'school_id',
        'time_in',
        'time_out',
        'work_date',
        'attendance_status',
        'latitude_in',
        'longitude_in',
        'device_type_in',
        'latitude_out',
        'longitude_out',
        'device_type_out',
        'status',
        'date_entered',
        'date_modified',
        'modified_user_id',
        'created_by',
    ];

    protected $casts = [
        'work_date' => 'date',
        'time_in' => 'datetime:H:i',
        'time_out' => 'datetime:H:i',
        'status' => 'boolean',
        'date_entered' => 'datetime',
        'date_modified' => 'datetime',
    ];
}

