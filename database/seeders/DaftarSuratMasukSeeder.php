<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DaftarSuratMasuk;

class DaftarSuratMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DaftarSuratMasuk::create([
            'kode_surat'=>'SM-001',
            'tanggal_surat'=>'14-02-2001',
            'asal_surat'=>'jek',
            'index_surat'=>'Surat Perizinan',
            'file_surat'=>'jek.pdf',
            'jumlah_lampiran_surat'=>'2'

        ]);
    }
}
