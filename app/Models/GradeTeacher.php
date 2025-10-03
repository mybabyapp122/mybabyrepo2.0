<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradeTeacher extends Model
{
    use HasFactory;

    protected $table = 'grade_teacher';

    protected $fillable = [
        'school_id',
        'grade_id',
        'teacher_id',
    ];

    public function school()
    {
        return $this->belongsTo(User::class, 'school_id');
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }
}
