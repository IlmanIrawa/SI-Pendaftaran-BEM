<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kuis extends Model
{
    protected $table = 'kuis';
    protected $fillable = [
        'nama',
        'nim',
        'prodi',
        'email',
    ];
    public $timestamps = false;
}
