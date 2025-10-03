<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportsFoodGiven extends Model
{
    use HasFactory;

    protected $table = 'reports_food_given';

    protected $fillable = [
        'food_given_name',
        'food_given_name_ar',
        'status',
        'created_by',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}

