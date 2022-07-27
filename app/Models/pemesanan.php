<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    use HasFactory;
    public $fillable = ['id_identitas', 'jumlah', 'lamas', 'tgl_masuk', 'tgl_keluar', 'id_villa'];
    public $timestamps = true;

    // membuat relasi one to one di model
    public function identitas()
    {
        // data dari model 'Wali' bisa dimiliki
        // oleh model 'Siswa' melalui 'id_siswa'
        return $this->belongsTo(identitas::class, 'id_identitas');
    }

    // method menampilkan image(foto)
    public function villas()
    {
        // data dari model 'Wali' bisa dimiliki
        // oleh model 'Siswa' melalui 'id_siswa'
        return $this->belongsTo(villas::class, 'id_villas');
    }
    // mengahupus image(foto) di storage(penyimpanan) public
    
}
