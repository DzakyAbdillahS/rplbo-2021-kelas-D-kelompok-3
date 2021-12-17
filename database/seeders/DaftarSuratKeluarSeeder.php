<?php

namespace Database\Seeders;

use App\Models\DaftarSuratKeluar;
use Illuminate\Database\Seeder;

class DaftarSuratKeluarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DaftarSuratKeluar::create([
            'kode_surat'=>'SM-001',
            'tujuan_surat'=>'SMAN 4',
            'tanggal_surat'=>'15-12-2021',
            'index_surat'=>'Surat Perizinan',
            'file_surat'=>'jek.pdf',
            'jumlah_lampiran_surat'=>'2'

        ]);
    }
}
