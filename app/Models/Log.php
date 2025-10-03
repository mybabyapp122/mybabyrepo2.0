<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $table = 'logs';

    protected $fillable = [
        'model',
        'model_id',
        'user_id',
        'message',
        'color',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
