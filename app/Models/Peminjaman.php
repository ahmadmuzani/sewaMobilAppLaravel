<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal_peminjaman',
        'tanggal_pengembalian',
        'user_id',
        'mobil_id',
    ];
}
