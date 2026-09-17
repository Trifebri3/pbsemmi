<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'photo',
        'address',
        'contact_number',
        'instagram_url',
        'description',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
