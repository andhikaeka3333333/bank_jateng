<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// app/Models/Pembiayaan.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembiayaan extends Model
{
    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'nik',
        'alamat',
        'jumlah',
        'tujuan_pembiayaan',
        'foto_ktp',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
