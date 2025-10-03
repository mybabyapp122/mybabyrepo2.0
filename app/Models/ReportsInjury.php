<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportsInjury extends Model
{
    use HasFactory;

    protected $table = 'reports_injury';

    protected $fillable = [
        'student_id',
        'parent_id',
        'grade_id',
        'school_id',
        'teacher_id',
        'injury_type_id',
        'mood_icon_id',
        'other_grade_id',
        'other_student_id',
        'staff_witness_teacher_id',
        'notes',
        'images',
        'created_by',
    ];

    protected $casts = [
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

    public function injuryType()
    {
        return $this->belongsTo(ReportsInjuryType::class, 'injury_type_id');
    }

    public function moodIcon()
    {
        return $this->belongsTo(ReportsIcon::class, 'mood_icon_id');
    }

    public function otherGrade()
    {
        return $this->belongsTo(Grade::class, 'other_grade_id');
    }

    public function otherStudent()
    {
        return $this->belongsTo(Student::class, 'other_student_id');
    }

    public function staffWitnessTeacher()
    {
        return $this->belongsTo(User::class, 'staff_witness_teacher_id');
    }
}

