<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolSetting extends Model
{
    use HasFactory;

    protected $table = 'school_settings';

    protected $fillable = [
        'school_id',
        'school_name',
        'school_name_ar',
        'logo',
        'logo_ar',
        'primary_color',
        'secondary_color',
        'accent_color',
        'text_color',
        'background_color',
        'header_color',
        'footer_color',
        'button_color',
        'button_text_color',
        'link_color',
        'border_color',
        'success_color',
        'warning_color',
        'danger_color',
        'info_color',
        'light_color',
        'dark_color',
        'custom_css',
        'custom_js',
        'timezone',
        'date_format',
        'time_format',
        'currency',
        'currency_symbol',
        'language',
        'rtl_language',
        'enable_notifications',
        'enable_email_notifications',
        'enable_sms_notifications',
        'enable_push_notifications',
        'enable_attendance_tracking',
        'enable_grade_management',
        'enable_assessment_system',
        'enable_reports_system',
        'enable_communication_system',
        'enable_pickup_system',
        'enable_financial_management',
        'max_students_per_grade',
        'max_teachers_per_grade',
        'session_timeout',
        'terms_and_conditions',
        'privacy_policy',
        'about_us',
        'contact_email',
        'contact_phone',
        'contact_address',
        'website_url',
        'facebook_url',
        'twitter_url',
        'instagram_url',
        'linkedin_url',
        'youtube_url',
    ];

    protected $casts = [
        'enable_notifications' => 'boolean',
        'enable_email_notifications' => 'boolean',
        'enable_sms_notifications' => 'boolean',
        'enable_push_notifications' => 'boolean',
        'enable_attendance_tracking' => 'boolean',
        'enable_grade_management' => 'boolean',
        'enable_assessment_system' => 'boolean',
        'enable_reports_system' => 'boolean',
        'enable_communication_system' => 'boolean',
        'enable_pickup_system' => 'boolean',
        'enable_financial_management' => 'boolean',
        'max_students_per_grade' => 'integer',
        'max_teachers_per_grade' => 'integer',
        'session_timeout' => 'integer',
    ];

    // Relationships
    public function school()
    {
        return $this->belongsTo(User::class, 'school_id');
    }
}
