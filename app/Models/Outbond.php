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
        'slug',
        'description',
        'pricing_type',
        'unit_name',
        'min_participants',
        'max_participants',
        'min_age',
        'duration',
        'distance',
        'has_variants',
        'allows_documentation_addon',
        'requires_transportation',
        'has_camping_package',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'min_participants' => 'integer',
        'max_participants' => 'integer',
        'min_age' => 'integer',
        'duration' => 'integer',
        'distance' => 'decimal:2',
        'has_variants' => 'boolean',
        'allows_documentation_addon' => 'boolean',
        'requires_transportation' => 'boolean',
        'has_camping_package' => 'boolean',
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];

    public function variants(): HasMany
    {
        return $this->hasMany(OutbondVariant::class);
    }

    public function facilities(): HasMany
    {
        return $this->hasMany(Facility::class);
    }

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
