<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendaftaranModel extends Model
{
    use HasFactory;

    protected $table = 'pendaftaran_models'; // Ganti dengan nama tabel yang sesuai

    protected $fillable = [
        'nim', 
        'nama', 
        'alamat', 
        'no_telp', 
        'email', 
        'tanggal_lahir',
        'jenis_kelamin', 
        'tanggal_pendaftaran', 
        'jurusan',
        'status_mahasiswa',
        'foto',
        'status',
        'catatan',
    ];

    // Metode untuk mengambil semua data
    public static function getAllData(){
        return self::all();
    }

    // Metode untuk menambahkan data baru
    public static function addData($data){
        return self::create($data);
    }

    public $timestamps = false;
}
