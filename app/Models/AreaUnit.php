<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AreaUnit extends Model
{
    use HasFactory;

    protected $fillable = [
        'area_id',
        'name',
        'default_people',
        'max_people',
        'tent_type',
    ];

    protected $casts = [
        'default_people' => 'integer',
        'max_people' => 'integer',
    ];

    public function area(): BelongsTo
    {
        return $this->belongsTo(Area::class);
    }

    public function bookingDetails(): HasMany
    {
        return $this->hasMany(BookingDetail::class, 'unit_id');
    }

    public function prices(): HasMany
    {
        return $this->hasMany(Price::class, 'unit_id');
    }
}
