<?php

namespace App\Http\Controllers;

use App\Models\LegalisirSurat;
use App\Models\User;
use Illuminate\Http\Request;

class LegalisirSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = LegalisirSurat::all();
        return view('legalisir.LegalisirSurat', [
            'datas'=>$datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('legalisir.FormLegalisirSurat');
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
            'file_surat' => 'required|mimes:pdf|max:2048',
            'status'=>'required'
        ]);

        $file = Request()->file_surat;
        $fileName = Request()->nis . '.' . $file->extension();
        $file->move(public_path('legalisir surat'), $fileName);


        LegalisirSurat::create([
            'nama'=>Request()->nama,
            'nis'=>Request()->nis,
            'alamat'=>Request()->alamat,
            'no_telp'=>Request()->no_telp,
            'file_surat'=>$fileName,
            'status'=>Request()->status,
        ]);

        // $data = $request ->all();
        // LegalisirSurat::create([
        //     'nama'=> $data['nama'],
        //     'nis'=> $data['nis'],
        //     'alamat'=>$data['alamat'],
        //     'no_telp'=>$data['no_telp'],
        //     'file_surat'=>$data['file_surat'],
        //     'status'=>$data['status'],
        // ]);
        return redirect('home')->with('success', 'Legalisir Berhasil Diajukan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LegalisirSurat  $legalisirSurat
     * @return \Illuminate\Http\Response
     */
    public function show(LegalisirSurat $legalisirSurat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LegalisirSurat  $legalisirSurat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=LegalisirSurat::find($id);
        return view('legalisir.EditLegalisirSurat', compact(
            'data'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LegalisirSurat  $legalisirSurat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data= $request->all();
        $legalisir = LegalisirSurat::find($id);
        $legalisir->update([
            'status'=>$data['status']
        ]);
        return redirect('legalisir-surat')->with('success', 'Status Legalisir Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LegalisirSurat  $legalisirSurat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = LegalisirSurat::find($id);
        if ($data->file_surat<> "") {
            unlink(public_path('legalisir surat') . '/' . $data->file_surat);
        }
        $data->delete();
        return redirect('legalisir-surat')->with('success', 'Data Berhasil Dihapus!');
    }
}
