<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'sale';

    protected $fillable = [
        'creator_model',
        'creator_id',
        'payer_model',
        'payer_id',
        'type',
        'status',
        'status_ex',
        'invoice_id',
        'metadata',
        'order_date',
        'due_date',
        'gateway_invoice_id',
        'gateway_invoice_url',
    ];

    protected $casts = [
        'metadata' => 'array',
        'order_date' => 'datetime',
        'due_date' => 'datetime',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function logs()
    {
        return $this->hasMany(SaleLog::class);
    }
}
