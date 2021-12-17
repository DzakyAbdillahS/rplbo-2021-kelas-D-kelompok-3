<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegalisirSurat extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_siswa',
        'nis',
        'alamat_siswa',
        'no_telephone',
        'file_berkas',
        'isAccepted',
        'isDone'
    ];
}
