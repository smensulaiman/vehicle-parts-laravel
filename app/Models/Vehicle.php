<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vehicle extends Model
{
    use HasFactory;

    public function shipment(): BelongsTo
    {
        return $this->belongsTo(Shipment::class);
    }

    public function parts(): HasMany
    {
        return $this->hasMany(Part::class);
    }
}
