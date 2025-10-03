<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailLog extends Model
{
    use HasFactory;

    protected $table = 'email_logs';

    protected $fillable = [
        'template_id',
        'template_key',
        'recipient',
        'subject',
        'body',
        'status',
        'error_message',
        'params',
    ];

    protected $casts = [
        'sent_at' => 'datetime',
        'params' => 'array',
    ];

    public function template()
    {
        return $this->belongsTo(EmailTemplate::class, 'template_id');
    }
}
