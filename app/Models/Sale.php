<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    public function parts()
    {
        return $this->belongsToMany(Part::class)
            ->withPivot('quantity', 'price_at_sale')
            ->withTimestamps();
    }

}
