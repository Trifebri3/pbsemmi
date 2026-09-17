<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['id', 'province_id', 'name', 'latitude', 'longitude'])]
class Regency extends Model
{
    public $incrementing = false;

    protected $keyType = 'string';

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function locations()
    {
        return $this->hasMany(Location::class);
    }
}
