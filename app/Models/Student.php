<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'grade_id',
        'name',
        'id_number',
        'name_ar',
        'dob',
        'gender',
        'health',
        'allergies',
        'status',
        'status_ex',
        'payment_mode',
        'rate',
        'is_invoice_generated',
        'is_tax_applicable',
        'delete_last_status',
    ];

    protected $casts = [
        'health' => 'array',
        'allergies' => 'array',
        'dob' => 'date',
        'is_invoice_generated' => 'boolean',
        'is_tax_applicable' => 'boolean',
    ];

    public function parent()
    {
        return $this->belongsTo(User::class, 'parent_id');
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function assessments()
    {
        return $this->hasMany(StudentAssessment::class);
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }

    public function reports()
    {
        return $this->hasMany(ReportsStudent::class);
    }

    public function hourlyReports()
    {
        return $this->hasMany(ReportsStudentHourly::class);
    }

    public function observations()
    {
        return $this->hasMany(ReportsObservation::class);
    }

    public function injuries()
    {
        return $this->hasMany(ReportsInjury::class);
    }

    public function pickupRequests()
    {
        return $this->hasMany(StudentPickupRequest::class);
    }

    public function schedules()
    {
        return $this->hasMany(StudentSchedule::class);
    }

    public function hourlyRequests()
    {
        return $this->hasMany(ReportsHourlyStudentRequest::class);
    }
}

