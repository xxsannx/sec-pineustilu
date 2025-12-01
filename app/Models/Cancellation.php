<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cancellation extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'cancellation_date',
        'cancellation_fee',
        'cancelled_by',
        'total_refund',
        'refund_status',
        'reason',
        'status',
    ];

    protected $casts = [
        'cancellation_date' => 'date',
        'cancellation_fee' => 'decimal:2',
        'total_refund' => 'decimal:2',
    ];

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }
}
