<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolTiming extends Model
{
    use HasFactory;

    protected $table = 'school_timings';

    protected $fillable = [
        'school_id',
        'start_time',
        'end_time',
        'updated_by',
    ];

    protected $casts = [
        'start_time' => 'datetime:H:i',
        'end_time' => 'datetime:H:i',
    ];

    public function school()
    {
        return $this->belongsTo(User::class, 'school_id');
    }
}
