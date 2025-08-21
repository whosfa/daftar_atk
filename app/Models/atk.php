<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atk extends Model
{
    protected $fillable = ['nama', 'kategori', 'stok', 'deskripsi', 'gambar', 'lokasi',];
        public static function getKategoriList()
    {
        return ['Alat Tulis', 'Baterai', 'Kertas & Amplop', 'Perlengkapan Meja Kantor', 'Perlengkapan Arsip', 'Alat Jepit & Klip', 'Staples & Pelubang', 'Tinta & Cartridge', 'Perekat & Isolasi'];
    }
    
}
