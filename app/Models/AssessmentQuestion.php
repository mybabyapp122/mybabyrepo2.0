<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessmentQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'age_group_id',
        'question_text',
        'question_text_ar',
        'question_type',
        'required',
        'rating_min',
        'rating_max',
        'sort_order',
        'status',
        'options',
        'options_ar',
    ];

    protected $casts = [
        'required' => 'boolean',
        'status' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(AssessmentCategory::class, 'category_id');
    }

    public function ageGroup()
    {
        return $this->belongsTo(AssessmentAgeGroup::class, 'age_group_id');
    }

    public function answers()
    {
        return $this->hasMany(AssessmentAnswer::class, 'question_id');
    }
}

