<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportsObservation extends Model
{
    use HasFactory;

    protected $table = 'reports_observation';

    protected $fillable = [
        'student_id',
        'parent_id',
        'school_id',
        'grade_id',
        'teacher_id',
        'observation_date',
        'notes',
        'images',
        'milestone',
        'created_by',
    ];

    protected $casts = [
        'observation_date' => 'date',
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

    public function school()
    {
        return $this->belongsTo(User::class, 'school_id');
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}

