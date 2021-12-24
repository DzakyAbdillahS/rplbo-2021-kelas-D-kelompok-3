<?php

namespace App\Http\Controllers;

use App\Models\DaftarSuratKeluar;
use App\Models\DaftarSuratMasuk;
use Illuminate\Http\Request;

class DaftarSuratKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DaftarSuratKeluar::all();
        return view('suratkeluar.SuratKeluar', [
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
        return view('suratkeluar.TambahSuratKeluar');
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
            'kode_surat'=>'required',
            'tujuan_surat'=>'required',
            'tanggal_surat'=>'required',
            'index_surat'=>'required',
            'file_surat'=>'required|mimes:pdf|max:2048',
            'jumlah_lampiran'=>'required'
        ]);

        $file = Request()->file_surat;
        $fileName = Request()->kode_surat . '.' . $file->extension();
        $file->move(public_path('surat keluar'), $fileName);


        DaftarSuratKeluar::create([
            'kode_surat'=>Request()->kode_surat,
            'tujuan_surat'=>Request()->tujuan_surat,
            'tanggal_surat'=>Request()->tanggal_surat,
            'index_surat'=>Request()->index_surat,
            'file_surat'=>$fileName,
            'jumlah_lampiran'=>Request()->jumlah_lampiran
        ]);

        return redirect('surat-keluar')->with('success', 'Surat Keluar Ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DaftarSuratKeluar  $daftarSuratKeluar
     * @return \Illuminate\Http\Response
     */
    public function show(DaftarSuratKeluar $daftarSuratKeluar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DaftarSuratKeluar  $daftarSuratKeluar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=DaftarSuratKeluar::find($id);
        return view('suratkeluar.EditSuratKeluar',[
            'data'=>$data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DaftarSuratKeluar  $daftarSuratKeluar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $suratkeluar = DaftarSuratKeluar::find($id);
        $data = $request->all();

        $file = Request()->file_surat;
        $fileName = Request()->kode_surat . '.' . $file->extension();

        if ($data['file_surat']){
            unlink(public_path('surat keluar/'. $suratkeluar->file_surat));
            $file->move(public_path('surat keluar'), $fileName);
            if ($suratkeluar->file_name) {
                unlink(public_path('surat keluar/'. $suratkeluar->file_surat));
            }
        }

        $suratkeluar->update([
            'tujuan_surat'=>$data['tujuan_surat'],
            'tanggal_surat'=>$data['tanggal_surat'],
            'index_surat'=>$data['index_surat'],
            'file_surat'=>$fileName,
            'jumlah_lampiran'=>$data['jumlah_lampiran']
        ]);

        return redirect()->route('surat-keluar.index')->with('success', 'Surat Keluar Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DaftarSuratKeluar  $daftarSuratKeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suratkeluar = DaftarSuratKeluar::find($id);
        if ($suratkeluar->file_surat<> "") {
            unlink(public_path('surat keluar') . '/' . $suratkeluar->file_surat);
        }
        $suratkeluar->delete();
        return redirect('surat-keluar')->with('success', 'Data Berhasil Dihapus!');
    }
}
