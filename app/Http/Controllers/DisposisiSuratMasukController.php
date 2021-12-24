<?php

namespace App\Http\Controllers;

use App\Models\DaftarSuratMasuk;
use App\Models\DisposisiSuratMasuk;
use Illuminate\Http\Request;

class DisposisiSuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $ids = $id;
        $datas = DisposisiSuratMasuk::where('suratmasuk_id',$id)->get();
        return view('disposisi.DisposisiSuratMasuk', [
            'datas'=> $datas,
            'ids'=> $ids
        ]);
        // $datas = DisposisiSuratMasuk::where('suratmasuk_id', DaftarSuratMasuk:: );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        return view('disposisi.TambahDisposisiSurat',['id'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

        $data = $request->all();
        DisposisiSuratMasuk::create([
            'suratmasuk_id'=> $id,
            'tanggal_penyelesaian'=>$data['tanggal_penyelesaian'],
            'tujuan_disposisi'=>$data['tujuan_disposisi'],
            'instruksi_disposisi'=>$data['instruksi_disposisi']
        ]);
        return redirect()->route('disposisi-surat.index',$id)->with('success', 'Disposisi Berhasil Ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DisposisiSuratMasuk  $disposisiSuratMasuk
     * @return \Illuminate\Http\Response
     */
    public function show(DisposisiSuratMasuk $disposisiSuratMasuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DisposisiSuratMasuk  $disposisiSuratMasuk
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$disposisi_id)
    {
        $disposisi_ids = (int)$disposisi_id;
        $surat_ids = (int)$id;
        $data=DisposisiSuratMasuk::find($disposisi_ids);
        return view('disposisi.EditDisposisiSurat', compact(
            'data', 'surat_ids', 'disposisi_ids'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DisposisiSuratMasuk  $disposisiSuratMasuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $disposisi_id)
    {
        $data = $request ->all();
        $disposisi = DisposisiSuratMasuk::find($disposisi_id);
        $disposisi->update([
            'tanggal_penyelesaian'=> $data['tanggal_penyelesaian'],
            'tujuan_disposisi'=>$data['tujuan_disposisi'],
            'instruksi_disposisi'=>$data['instruksi_disposisi']
        ]);

        return redirect()->route('disposisi-surat.index',$disposisi->suratmasuk_id)->with('success', 'Disposisi Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DisposisiSuratMasuk  $disposisiSuratMasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $disposisi = DisposisiSuratMasuk::find($id);
        $disposisi->delete();
        return redirect()->back()->with('success', 'Data Berhasil Dihapus!');
    }
}
