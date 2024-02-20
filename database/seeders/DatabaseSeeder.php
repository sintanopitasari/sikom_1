<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'username'=> 'admin1',
            'email'=> 'sintanopitsari2@gmail.com',
            'password'=> Hash::make ('08112005'),
            'nama_lengkap'=>'admin_satu',
            'role'=>'administrator',
            'verifikasi'=> 'sudah',
            'alamat'=> 'subang'
        ]);
    }
}
