<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'extra_charge_full',
        'extra_charge_breakfast',
    ];

    protected $casts = [
        'extra_charge_full' => 'decimal:2',
        'extra_charge_breakfast' => 'decimal:2',
    ];

    public function facilities(): HasMany
    {
        return $this->hasMany(Facility::class);
    }

    public function galleries(): HasMany
    {
        return $this->hasMany(Gallery::class);
    }

    public function areaUnits(): HasMany
    {
        return $this->hasMany(AreaUnit::class);
    }
}
