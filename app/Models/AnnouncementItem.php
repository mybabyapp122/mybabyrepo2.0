<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnouncementItem extends Model
{
    use HasFactory;

    protected $table = 'announcement_items';

    protected $fillable = [
        'announcement_id',
        'student_id',
    ];

    public function announcement()
    {
        return $this->belongsTo(Announcement::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}

