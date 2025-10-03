<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PushNotification extends Model
{
    use HasFactory;

    protected $table = 'push_notifications';

    protected $fillable = [
        'user_id',
        'sale_id',
        'student_id',
        'student_name',
        'type',
        'title',
        'message',
        'project',
        'receiver_token',
        'receiver_email',
        'receiver_mobile',
        'send_push',
        'send_email',
        'send_sms',
        'status',
        'is_read',
    ];

    protected $casts = [
        'send_push' => 'boolean',
        'send_email' => 'boolean',
        'send_sms' => 'boolean',
        'is_read' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}

