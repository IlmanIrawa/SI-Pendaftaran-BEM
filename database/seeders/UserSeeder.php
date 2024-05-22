<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\user;
use Illuminate\support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        user::truncate();
        user::create([
            'name' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'nim' => $request->nim,
            'password' => $request->password,
            'konfirmasi_password' => $request->konfirmasi_password,
            'remember_token'=>str::random(60),
        ]);
    }
}
