<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profileModel extends Model
{
    protected $table = 'user_models';
    protected $fillable = [
    'nama', 
    'nim', 
    'divisi',
    'email',
    'password',
    'jenis_kelamin',
    'alamat'];
}
