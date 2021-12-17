<?php

namespace App\Http\Controllers;

use App\Models\DaftarSuratMasuk;
use Illuminate\Http\Request;

class DaftarSuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DaftarSuratMasuk::all();
        return view('suratmasuk.SuratMasuk',[
            'datas'=> $datas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suratmasuk.TambahSuratMasuk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        DaftarSuratMasuk::create([
            'kode_surat'=>$data['kode_surat'],
            'tanggal_surat'=>$data['tanggal_surat'],
            'asal_surat'=>$data['asal_surat'],
            'index_surat'=>$data['index_surat'],
            'isi_surat'=>$data['isi_surat'],
            'file_surat'=>$data['file_surat'],
            'jumlah_lampiran_surat'=>$data['jumlah_lampiran_surat']
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DaftarSuratMasuk  $daftarSuratMasuk
     * @return \Illuminate\Http\Response
     */
    public function show(DaftarSuratMasuk $daftarSuratMasuk)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DaftarSuratMasuk  $daftarSuratMasuk
     * @return \Illuminate\Http\Response
     */
    public function edit(DaftarSuratMasuk $daftarSuratMasuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DaftarSuratMasuk  $daftarSuratMasuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DaftarSuratMasuk $daftarSuratMasuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DaftarSuratMasuk  $daftarSuratMasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(DaftarSuratMasuk $daftarSuratMasuk)
    {
        //
    }
}
