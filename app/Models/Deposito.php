<?php

// app/Models/Deposito.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deposito extends Model
{
    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'nik',
        'alamat',
        'jumlah',
        'jangka_waktu',
        'foto_ktp',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
