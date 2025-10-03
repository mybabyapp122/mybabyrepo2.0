<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveType extends Model
{
    use HasFactory;

    protected $table = 'leave_type';

    protected $fillable = [
        'name',
        'name_ar',
        'leave_code',
        'leave_description',
        'color',
        'for_leave_apply',
        'total_leave',
        'min_leave',
        'school_id',
        'status',
        'date_entered',
        'date_modified',
        'modified_user_id',
        'created_by',
    ];

    protected $casts = [
        'for_leave_apply' => 'boolean',
        'status' => 'boolean',
        'date_entered' => 'datetime',
        'date_modified' => 'datetime',
    ];
}
