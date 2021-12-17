<?php

namespace App\Http\Controllers;

use App\Models\PengajuanSurat;
use Illuminate\Http\Request;

class PengajuanSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = PengajuanSurat::all();
        return view('pengajuan-surat.pengajuan-surat',[
            'datas' => $datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengajuan-surat.form-pengajuan-surat');
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
        PengajuanSurat::create([
            'nama_siswa'=>$data['nama_siswa'],
            'nis'=>$data['nis'],
            'alamat_siswa'=>$data['alamat_siswa'],
            'no_telephone'=>$data['no_telephone'],
            'jenis_surat'=>$data['jenis_surat'],
            'tujuan_surat'=>$data['file_surat'],
            'lampiran'=>$data['lampiran']
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PengajuanSurat  $pengajuanSurat
     * @return \Illuminate\Http\Response
     */
    public function show(PengajuanSurat $pengajuanSurat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PengajuanSurat  $pengajuanSurat
     * @return \Illuminate\Http\Response
     */
    public function edit(PengajuanSurat $pengajuanSurat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PengajuanSurat  $pengajuanSurat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PengajuanSurat $pengajuanSurat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PengajuanSurat  $pengajuanSurat
     * @return \Illuminate\Http\Response
     */
    public function destroy(PengajuanSurat $pengajuanSurat)
    {
        //
    }
}
