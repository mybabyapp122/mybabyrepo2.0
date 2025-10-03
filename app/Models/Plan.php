<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'name_ar',
        'description',
        'description_ar',
        'sub_users',
        'subscription_period',
        'price',
        'highlighted',
        'upgrade_to',
        'status',
        'status_ex',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'highlighted' => 'integer',
        'status' => 'integer',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}

