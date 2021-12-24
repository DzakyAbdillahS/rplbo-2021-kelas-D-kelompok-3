<?php

namespace App\Http\Controllers;

use App\Models\DaftarSuratMasuk;
use App\Models\LegalisirSurat;
use App\Models\PengajuanSurat;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jml_pengajuan = PengajuanSurat::all()->count();
        $jml_legalisir = LegalisirSurat::all()->count();
        return view('home',[
            'jml_pengajuan'=>$jml_pengajuan,
            'jml_legalisir'=>$jml_legalisir
            ]
        );
    }
}
