<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanSurat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nis',
        'alamat',
        'no_telp',
        'jenis_surat',
        'tujuan_surat',
        'status'
    ];
}
