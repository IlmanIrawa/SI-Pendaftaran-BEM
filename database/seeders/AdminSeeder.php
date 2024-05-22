<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        user::truncate();
        user::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'divisi' => $request->divisi,
            'email' => $request->email,
            'password' => $request->password,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'remember_token'=>str::random(60),
        ]);
    }
}

    
