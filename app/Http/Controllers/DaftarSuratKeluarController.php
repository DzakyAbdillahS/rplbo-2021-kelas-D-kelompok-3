<?php

namespace App\Http\Controllers;

use App\Models\DaftarSuratKeluar;
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
        return view('surat-keluar.surat-keluar', [
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(DaftarSuratKeluar $daftarSuratKeluar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DaftarSuratKeluar  $daftarSuratKeluar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DaftarSuratKeluar $daftarSuratKeluar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DaftarSuratKeluar  $daftarSuratKeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy(DaftarSuratKeluar $daftarSuratKeluar)
    {
        //
    }
}
