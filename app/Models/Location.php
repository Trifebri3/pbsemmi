<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'name',
        'province_id',
        'regency_id',
        'district_name',
        'latitude',
        'longitude',
        'category',
        'status',
        'description',
        'photo',
        'address',
        'contact_number',
        'instagram_url',
    ];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function regency()
    {
        return $this->belongsTo(Regency::class);
    }
}
