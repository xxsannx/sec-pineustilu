<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'booking_type',
        'booking_date',
        'token_code',
        'status',
        'guest_name',
        'guest_phone',
        'guest_email',
    ];

    protected $casts = [
        'booking_date' => 'date',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function bookingDetails(): HasMany
    {
        return $this->hasMany(BookingDetail::class);
    }

    public function bookingOutbonds(): HasMany
    {
        return $this->hasMany(BookingOutbond::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

    public function reschedules(): HasMany
    {
        return $this->hasMany(Reschedule::class, 'old_book_id');
    }

    public function cancellation(): HasOne
    {
        return $this->hasOne(Cancellation::class);
    }
}
