<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PartName extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    public function part(): HasOne{
        return $this->hasOne(Part::class);
    }
}
