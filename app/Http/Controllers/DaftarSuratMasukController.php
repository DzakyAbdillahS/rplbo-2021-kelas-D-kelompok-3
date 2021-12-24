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
        Request()->validate([
            'kode_surat'=>'required',
            'tanggal_surat'=>'required',
            'asal_surat'=>'required',
            'index_surat'=>'required',
            'file_surat'=>'required|mimes:pdf|max:2048',
            'jumlah_lampiran'=>'required'
        ]);

        $file = Request()->file_surat;
        $fileName = Request()->kode_surat . '.' . $file->extension();
        $file->move(public_path('surat masuk'), $fileName);


        DaftarSuratMasuk::create([
            'kode_surat'=>Request()->kode_surat,
            'tanggal_surat'=>Request()->tanggal_surat,
            'asal_surat'=>Request()->asal_surat,
            'index_surat'=>Request()->index_surat,
            'file_surat'=>$fileName,
            'jumlah_lampiran'=>Request()->jumlah_lampiran
        ]);

        return redirect('surat-masuk')->with('success', 'Surat Masuk Ditambah!');
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
    public function edit($id)
    {
        $data=DaftarSuratMasuk::find($id);
        return view('suratmasuk.EditSuratMasuk',[
            'data'=>$data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DaftarSuratMasuk  $daftarSuratMasuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $suratmasuk = DaftarSuratMasuk::find($id);
        $data = $request ->all();

        $file = Request()->file_surat;
        $fileName = Request()->kode_surat . '.' . $file->extension();

        if ($data['file_surat']){
            unlink(public_path('surat masuk/'. $suratmasuk->file_surat));
            $file->move(public_path('surat masuk'), $fileName);
            if ($suratmasuk->file_name) {
                unlink(public_path('surat masuk/'. $suratmasuk->file_surat));
            }
        }

        $suratmasuk->update([
            'tanggal_surat'=> $data['tanggal_surat'],
            'asal_surat'=> ($data['asal_surat']),
            'index_surat'=> $data['index_surat'],
            'file_surat'=> $fileName,
            'jumlah_lampiran'=> $data['jumlah_lampiran']
        ]);

        return redirect()->route('surat-masuk.index')->with('success', 'Surat Masuk Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DaftarSuratMasuk  $daftarSuratMasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suratmasuk = DaftarSuratMasuk::find($id);
        if ($suratmasuk->file_surat<> "") {
            unlink(public_path('surat masuk') . '/' . $suratmasuk->file_surat);
        }
        $suratmasuk->delete();
        return redirect('surat-masuk')->with('success', 'Data Berhasil Dihapus!');
    }
}
