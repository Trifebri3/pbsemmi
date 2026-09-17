<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $fillable = [
        'branch_id',
        'title',
        'slug',
        'content',
        'type',
        'status',
        'image',
        'rejection_reason',
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
