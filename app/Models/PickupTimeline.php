<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickupTimeline extends Model
{
    use HasFactory;

    protected $table = 'pickup_timelines';

    protected $fillable = [
        'pickup_request_id',
        'student_id',
        'status',
        'current',
    ];

    public function pickupRequest()
    {
        return $this->belongsTo(StudentPickupRequest::class, 'pickup_request_id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}

