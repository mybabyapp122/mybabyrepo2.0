<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAssessment extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'grade_id',
        'teacher_id',
        'parent_id',
        'school_id',
        'age_group_id',
        'assessment_month',
        'assessment_date',
        'notes',
        'total_score',
        'total_score_required',
        'percentage_obtained',
        'overall_classification',
        'domain_scores',
        'domain_classifications',
        'status',
        'created_by',
    ];

    protected $casts = [
        'assessment_date' => 'date',
        'domain_scores' => 'array',
        'domain_classifications' => 'array',
        'percentage_obtained' => 'decimal:2',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function parent()
    {
        return $this->belongsTo(User::class, 'parent_id');
    }

    public function school()
    {
        return $this->belongsTo(User::class, 'school_id');
    }

    public function ageGroup()
    {
        return $this->belongsTo(AssessmentAgeGroup::class, 'age_group_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function answers()
    {
        return $this->hasMany(AssessmentAnswer::class, 'assessment_id');
    }
}

