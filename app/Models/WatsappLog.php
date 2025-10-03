<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WatsappLog extends Model
{
    use HasFactory;

    protected $table = 'watsapp_logs';

    protected $fillable = [
        'user_id',
        'user_name',
        'user_email',
        'mobile',
        'message',
        'response',
        'status',
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
