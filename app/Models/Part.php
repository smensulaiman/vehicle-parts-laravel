<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Part extends Model
{
    use HasFactory;

    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function partName(): BelongsTo
    {
        return $this->belongsTo(PartName::class);
    }

    public function sales()
    {
        return $this->belongsToMany(Sale::class)
            ->withPivot('quantity', 'price_at_sale')
            ->withTimestamps();
    }

    public function getVehicleInfo(): ?array
    {
        return $this->vehicle ? [
            'make' => $this->vehicle->make,
            'model' => $this->vehicle->model,
            'chassis' => $this->vehicle->chassis_number
        ] : null;
    }

}
