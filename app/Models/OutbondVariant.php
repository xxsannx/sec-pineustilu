<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OutbondVariant extends Model
{
    use HasFactory;

    protected $fillable = [
        'outbond_id',
        'variant_type',
        'variant_label',
        'min_pax_per_unit',
        'max_pax_per_unit',
        'includes_documentation',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'min_pax_per_unit' => 'integer',
        'max_pax_per_unit' => 'integer',
        'includes_documentation' => 'boolean',
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];

    public function outbond(): BelongsTo
    {
        return $this->belongsTo(Outbond::class);
    }

    public function prices(): HasMany
    {
        return $this->hasMany(Price::class);
    }

    public function bookingOutbonds(): HasMany
    {
        return $this->hasMany(BookingOutbond::class);
    }
}
