<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'order_id',
        'transaction_id',
        'payment_type',
        'transaction_status',
        'payment_code',
        'fraud_status',
        'gross_amount',
        'bank',
        'va_number',
        'qr_string',
        'deeplink_url',
        'snaptoken',
        'expired_at',
    ];

    protected $casts = [
        'gross_amount' => 'decimal:2',
        'expired_at' => 'datetime',
    ];

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }

    public function invoice(): HasOne
    {
        return $this->hasOne(Invoice::class);
    }
}
