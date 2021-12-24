<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisposisiSuratMasuk extends Model
{
    use HasFactory;
    protected $fillable = [
        'suratmasuk_id',
        'tanggal_penyelesaian',
        'tujuan_disposisi',
        'instruksi_disposisi'
    ];

    public function daftarsuratmasuk(){
        return $this->belongsTo(DaftarSuratMasuk::class,'suratmasuk_id','id');
    }

}
