<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftarModel extends Model
{
    protected $table = 'pendaftaran_models'; 
    protected $fillable = ['nim', 'nama', 'no_telp', 'jurusan','tanggal_pendaftaran','foto','status','catatan']; 
    public $timestamps = false; // Tidak menggunakan kolom timestamps (created_at dan updated_at)

    
}

