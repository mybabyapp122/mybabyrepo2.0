<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessmentAgeGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'age_group_name',
        'age_group_name_ar',
        'school_id',
        'form_name',
        'form_name_ar',
        'is_all_schools',
        'min_age_months',
        'max_age_months',
        'status',
        'type',
    ];

    protected $casts = [
        'is_all_schools' => 'boolean',
        'status' => 'boolean',
    ];

    public function school()
    {
        return $this->belongsTo(User::class, 'school_id');
    }

    public function questions()
    {
        return $this->hasMany(AssessmentQuestion::class, 'age_group_id');
    }

    public function assessments()
    {
        return $this->hasMany(StudentAssessment::class, 'age_group_id');
    }
}

