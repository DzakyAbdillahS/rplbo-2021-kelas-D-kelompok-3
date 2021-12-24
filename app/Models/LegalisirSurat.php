<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegalisirSurat extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'nis',
        'alamat',
        'no_telp',
        'file_surat',
        'status'
    ];
}
