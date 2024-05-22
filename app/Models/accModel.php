<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accModel extends Model
{

    use HasFactory;

    protected $table = 'hasil'; 
    protected $fillable = ['nim','status','catatan']; 
    public $timestamps = false; 
}
