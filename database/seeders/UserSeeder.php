<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama'=>'Administrator',
            'email'=>'administrator@gmail.com',
            'password'=>bcrypt('1'),
            'nip_nis'=>'1',
            'role'=>'Administrator'
        ]);

        User::create([
            'nama'=>'Ainun',
            'email'=>'ainun@gmail.com',
            'password'=>bcrypt('1'),
            'nip_nis'=>'119510',
            'role'=>'Resepsionis'
        ]);

        User::create([
            'nama'=>'Alfitra',
            'email'=>'alfitra@gmail.com',
            'password'=>bcrypt('1'),
            'nip_nis'=>'120191',
            'role'=>'Siswa'
        ]);

        User::create([
            'nama'=>'Dzaky',
            'email'=>'dzaky@gmail.com',
            'password'=>bcrypt('1'),
            'nip_nis'=>'181201',
            'role'=>'Staff TU'
        ]);

        User::create([
            'nama'=>'farizd',
            'email'=>'farizd@gmail.com',
            'password'=>bcrypt('1'),
            'nip_nis'=>'129211',
            'role'=>'Alumni'
        ]);

        User::create([
            'nama'=>'fadil',
            'email'=>'fadil@gmail.com',
            'password'=>bcrypt('1'),
            'nip_nis'=>'129211',
            'role'=>'Kepala TU'
        ]);

        User::create([
            'nama'=>'ikhwan',
            'email'=>'ikhwan@gmail.com',
            'password'=>bcrypt('1'),
            'nip_nis'=>'129211',
            'role'=>'Kepala Sekolah'
        ]);
    }
}
