<?php

namespace App\Services;

use App\Models\Part;
use App\Models\PartName;
use Illuminate\Database\Eloquent\Collection;

class PartService
{
    protected Collection $partNames;

    public function __construct()
    {
        $this->partNames = PartName::all();
    }

    public function storeVehicleParts($vehicleId): void
    {
        foreach ($this->partNames as $partName) {
            $part = new Part();
            $part->vehicle_id = $vehicleId;
            $part->part_name_id = $partName->id;
            $part->quantity = $partName->quantity;
            $part->save();
        }
    }
}
