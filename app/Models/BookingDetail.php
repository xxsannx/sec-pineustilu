<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BookingDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'unit_id',
        'item_id',
        'check_out',
        'number_of_people',
        'total_charge',
        'total_price',
        'note',
    ];

    protected $casts = [
        'check_out' => 'boolean',
        'number_of_people' => 'integer',
        'total_charge' => 'decimal:2',
        'total_price' => 'decimal:2',
    ];

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }

    public function unit(): BelongsTo
    {
        return $this->belongsTo(AreaUnit::class, 'unit_id');
    }

    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class);
    }
}
