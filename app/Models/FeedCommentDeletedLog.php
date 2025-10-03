<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedCommentDeletedLog extends Model
{
    use HasFactory;

    protected $table = 'feed_comments_deleted_logs';

    protected $fillable = [
        'comment_id',
        'feed_id',
        'user_id',
        'deleted_by',
        'comment_text',
    ];

    protected $casts = [
        'deleted_at' => 'datetime',
    ];
}
