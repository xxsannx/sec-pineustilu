<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reschedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'old_book_id',
        'new_book_id',
        'reschedule_date',
        'reschedule_fee',
        'reason',
        'status',
    ];

    protected $casts = [
        'reschedule_date' => 'date',
        'reschedule_fee' => 'decimal:2',
    ];

    public function oldBooking(): BelongsTo
    {
        return $this->belongsTo(Booking::class, 'old_book_id');
    }

    public function newBooking(): BelongsTo
    {
        return $this->belongsTo(Booking::class, 'new_book_id');
    }
}
