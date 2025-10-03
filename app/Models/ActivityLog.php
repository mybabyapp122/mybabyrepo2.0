<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    use HasFactory;

    protected $table = 'activity_logs';

    protected $fillable = [
        'user_id',
        'username',
        'ip_address',
        'user_agent',
        'controller',
        'action',
        'method',
        'route',
        'full_url',
        'params',
    ];

    protected $casts = [
        'params' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

