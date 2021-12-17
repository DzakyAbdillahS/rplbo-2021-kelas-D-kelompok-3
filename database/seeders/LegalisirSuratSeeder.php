<?php

namespace Database\Seeders;

use App\Models\LegalisirSurat;
use Illuminate\Database\Seeder;

class LegalisirSuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LegalisirSurat::create([
            'nama_siswa'=>'joy',
            'nis'=>'14110',
            'alamat_surat'=>'jl. sidomulyo',
            'no_telephone'=>'089981',
            'file_surat'=>'jek.pdf',
            'isAccepted'=>'1',
            'isDone'=>'1'
        ]);
    }
}
