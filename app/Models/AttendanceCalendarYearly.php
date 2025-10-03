<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceCalendarYearly extends Model
{
    use HasFactory;

    protected $table = 'attendance_calendar_yearly';

    protected $fillable = [
        'date',
        'type',
        'status',
    ];

    protected $casts = [
        'date' => 'date',
        'status' => 'boolean',
        'created_at' => 'datetime',
        'update_at' => 'datetime',
    ];
}
