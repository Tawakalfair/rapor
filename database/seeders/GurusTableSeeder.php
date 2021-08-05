<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class GurusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $guru = new Guru();
        $guru->nig = '000000000';
        $guru->nama_lengkap = 'panji asu';
        $guru->tempat_lahir = 'Gal Panas';
        $guru->tanggal_lahir = '1945-08-17';
        $guru->jenis_kelamin = 'bentol';
        $guru->agama ='konghucu';
        $guru->alamat ='Gal Dingin';
        $guru->nomor_telepon ='08888888888888';
        $guru->save();
        
        $user = new User();
        $user->email = 'panjiasu@gmail.com';
        $user->password = Hash::make("password123");
        $user->role_id = 1;
        $user->guru_id = $guru->id;
        $user->save();
    }
}
