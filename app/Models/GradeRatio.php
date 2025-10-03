<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradeRatio extends Model
{
    use HasFactory;

    protected $table = 'grade_ratio';

    protected $fillable = [
        'grade_id',
        'teacher_ratio',
        'student_ratio',
    ];

    protected $casts = [
        'create_time' => 'datetime',
        'update_time' => 'datetime',
    ];

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }
}
