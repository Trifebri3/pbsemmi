<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'branch_id',
        'name',
        'email',
        'phone',
        'campus',
        'status_kaderisasi',
        'photo',
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
