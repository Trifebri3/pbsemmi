<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['id', 'name', 'latitude', 'longitude'])]
class Province extends Model
{
    public $incrementing = false;

    protected $keyType = 'string';

    public function regencies()
    {
        return $this->hasMany(Regency::class);
    }

    public function locations()
    {
        return $this->hasMany(Location::class);
    }
}
