<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shipment extends Model
{
    use HasFactory;

    public function vehicles(): HasMany
    {
        return $this->hasMany(Vehicle::class);
    }

    public function costs(): BelongsToMany
    {
        return $this->belongsToMany(Cost::class, 'shipment_costs')
            ->withPivot('amount')
            ->withTimestamps();
    }
}
