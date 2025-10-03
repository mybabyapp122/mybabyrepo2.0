<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'model',
        'model_id',
        'sale_id',
        'transaction_id',
        'debit',
        'credit',
        'description',
        'base_amount',
        'vat_amount',
        'total_amount',
        'vat_percent',
        'currency',
        'method',
        'card_type',
        'gateway',
        'gateway_amount',
        'gateway_cost',
        'gateway_live',
        'status',
        'status_ex',
        'payment_url',
        'return_url',
    ];

    protected $casts = [
        'base_amount' => 'decimal:4',
        'vat_amount' => 'decimal:4',
        'total_amount' => 'decimal:4',
        'vat_percent' => 'decimal:4',
        'gateway_amount' => 'decimal:2',
        'gateway_cost' => 'decimal:2',
        'gateway_live' => 'boolean',
    ];

    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }
}
