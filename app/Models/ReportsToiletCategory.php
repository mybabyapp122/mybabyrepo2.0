<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportsToiletCategory extends Model
{
    use HasFactory;

    protected $table = 'reports_toilet_categories';

    protected $fillable = [
        'bath_category_name',
        'bath_category_name_ar',
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

