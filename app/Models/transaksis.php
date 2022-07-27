<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksis extends Model
{
    use HasFactory;
    public $fillable = ['id_pemesanan', 'total'];
    public $timestamps = true;

    // membuat relasi one to one di model
    public function pemesanan()
    {
        // data dari model 'Wali' bisa dimiliki
        // oleh model 'Siswa' melalui 'id_siswa'
        return $this->belongsTo(pemesanan::class, 'id_pemesanan');
    }
   
}
