<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleLog extends Model
{
    use HasFactory;

    protected $table = 'sale_logs';

    protected $fillable = [
        'json',
        'student_id',
        'created_by',
    ];

    protected $casts = [
        'json' => 'array',
        'created_at' => 'datetime',
    ];
}
