<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CronLog extends Model
{
    use HasFactory;

    protected $table = 'cron_log';

    protected $fillable = [
        'cron_name',
        'status',
        'message',
    ];

    protected $casts = [
        'executed_at' => 'datetime',
    ];
}
