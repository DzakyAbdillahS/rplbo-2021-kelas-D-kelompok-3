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
            'nama'=>'Dzaky',
            'email'=>'dzakyabdillah18@gmail.com',
            'password'=>bcrypt('dzaky1812'),
            'nip_nis'=>'1195011',
            'role'=>'Staff TU'
        ]);
    }
}
