<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $fillable = [
        'device_id',
        'device_type',
        'make',
        'model',
        'os',
        'name',
        'email',
        'mobile',
    ];

    protected $casts = [
        'create_time' => 'datetime',
        'update_time' => 'datetime',
    ];

    public function preferences()
    {
        return $this->hasMany(DevicePreference::class);
    }
}
