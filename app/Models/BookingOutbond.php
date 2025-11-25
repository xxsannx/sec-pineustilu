<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BookingOutbond extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'outbond_id',
        'schedule_date',
        'schedule_time',
        'number_of_people',
        'total_price',
        'note',
    ];

    protected $casts = [
        'schedule_date' => 'date',
        'schedule_time' => 'datetime:H:i',
        'number_of_people' => 'integer',
        'total_price' => 'decimal:2',
    ];

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }

    public function outbond(): BelongsTo
    {
        return $this->belongsTo(Outbond::class);
    }
}
