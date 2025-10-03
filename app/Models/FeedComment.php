<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedComment extends Model
{
    use HasFactory;

    protected $table = 'feed_comments';

    protected $fillable = [
        'user_id',
        'student_id',
        'feed_id',
        'comment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function feed()
    {
        return $this->belongsTo(Feed::class);
    }
}

