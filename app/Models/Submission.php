<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $fillable = [
        'user_id',
        'full_name',
        'nik',
        'address',
        'savings_type',
        'initial_balance',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
