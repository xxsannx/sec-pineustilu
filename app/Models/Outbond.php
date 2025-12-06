<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Outbond extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'min_participation',
        'max_participation',
        'duration',
        'age',
    ];

    protected $casts = [
        'min_participation' => 'integer',
        'max_participation' => 'integer',
        'duration' => 'integer',
        'age' => 'integer',
    ];

    public function galleries(): HasMany
    {
        return $this->hasMany(Gallery::class);
    }

    public function bookingOutbonds(): HasMany
    {
        return $this->hasMany(BookingOutbond::class);
    }

    public function prices(): HasMany
    {
        return $this->hasMany(Price::class);
    }
}
