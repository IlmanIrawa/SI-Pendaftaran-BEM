<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rekapModel extends Model
{
    protected $table = 'pendaftaran_models'; // Nama tabel yang digunakan
    protected $fillable = ['nama', 'nim', 'jurusan', 'tanggal_pendaftaran']; // Kolom yang dapat diisi
    public $timestamps = false; // Tidak menggunakan kolom timestamps (created_at dan updated_at)
}