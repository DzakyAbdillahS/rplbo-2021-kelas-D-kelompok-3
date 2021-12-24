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
        return view('pengajuan.PengajuanSurat',[
            'datas' => $datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengajuan.FormPengajuanSurat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Request()->validate([
            'nama'=>'required',
            'nis'=>'required',
            'alamat'=>'required',
            'no_telp'=>'required',
            'jenis_surat'=>'required',
            'tujuan_surat'=>'required',
            'status'=>'required'
        ]);

        $data = $request->all();
        PengajuanSurat::create([
            'nama'=>Request()->nama,
            'nis'=>Request()->nis,
            'alamat'=>Request()->alamat,
            'no_telp'=>Request()->no_telp,
            'jenis_surat'=>Request()->jenis_surat,
            'tujuan_surat'=>Request()->tujuan_surat,
            'status'=>Request()->status
        ]);
        return redirect('home')->with('success', 'Surat Berhasil Diajukan!');
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
    public function edit($id)
    {
        $data = PengajuanSurat::find($id);
        return view('pengajuan.EditPengajuanSurat', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PengajuanSurat  $pengajuanSurat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request ->all();
        $pengajuan = PengajuanSurat::find($id);
        $pengajuan->update([
            'status'=>$data['status']
        ]);

        return redirect('pengajuan-surat')->with('success', 'Status Surat Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PengajuanSurat  $pengajuanSurat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengajuan = PengajuanSurat::find($id);
        $pengajuan->delete();
        return redirect('pengajuan-surat')->with('success', 'Data Berhasil Dihapus!');
    }
}
