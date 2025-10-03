<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DevicePreference extends Model
{
    use HasFactory;

    protected $table = 'device_preferences';

    protected $fillable = [
        'device_id',
        'project',
        'title',
        'value',
    ];

    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}
