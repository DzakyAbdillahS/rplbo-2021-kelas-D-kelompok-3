<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarSuratKeluar extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_surat',
        'tujuan_surat',
        'tanggal_surat',
        'index_surat',
        'file_surat',
        'jumlah_lampiran'
    ];
}
