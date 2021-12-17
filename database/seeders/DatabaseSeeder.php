<?php

namespace Database\Seeders;

use App\Models\DaftarSuratKeluar;
use App\Models\LegalisirSurat;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            DaftarSuratMasukSeeder::class,
            DaftarSuratKeluarSeeder::class,
            LegalisirSuratSeeder::class
        ]);

    }
}
