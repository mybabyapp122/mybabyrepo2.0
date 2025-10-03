<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportsIcon extends Model
{
    use HasFactory;

    protected $table = 'reports_icons';

    protected $fillable = [
        'icon_name',
        'icon_name_ar',
        'image',
        'status',
        'icon_for',
        'base64_image',
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

