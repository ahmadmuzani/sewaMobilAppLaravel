<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Peminjaman_mobil extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'tanggal_peminjaman',
        'tanggal_pengembalian',
        'user_id',
        'mobil_id',
    ];
}
