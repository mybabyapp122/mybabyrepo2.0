<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportsInjuryType extends Model
{
    use HasFactory;

    protected $table = 'reports_injury_types';

    protected $fillable = [
        'injury_name',
        'injury_name_ar',
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

    public function injuries()
    {
        return $this->hasMany(ReportsInjury::class, 'injury_type_id');
    }
}

