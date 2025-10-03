<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentPickupRequest extends Model
{
    use HasFactory;

    protected $table = 'student_pickup_requests';

    protected $fillable = [
        'student_id',
        'parent_id',
        'grade_id',
        'teacher_id',
        'school_id',
        'pickup_time',
        'status',
        'status_updated_at',
    ];

    protected $casts = [
        'pickup_time' => 'datetime',
        'status_updated_at' => 'datetime',
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

    public function timelines()
    {
        return $this->hasMany(PickupTimeline::class, 'pickup_request_id');
    }
}

