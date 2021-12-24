<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = User::all();
        return view('user.ManajemenUser', [
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
        return view('user.TambahManajemenUser');
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
            'email'=>'required',
            'password'=>'required',
            'nip_nis'=>'required',
            'role'=>'required',
        ]);

        $data = $request ->all();
        User::create([
            'nama'=> request()->nama,
            'email'=> request()->email,
            'password'=> bcrypt(request()->password),
            'nip_nis'=> request()->nip_nis,
            'role'=> request()->role
        ]);
        return redirect('manajemen-user')->with('success', 'User Berhasil Ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::find($id);
        return view('user.EditManajemenUser',
        compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request ->all();
        $user = User::find($id);
        $user->update([
            'nama'=> $data['nama'],
            'email'=> $data['email'],
            'password'=>bcrypt($data['password']),
            'nip_nis'=>$data['nip_nis'],
            'role'=>$data['role']
        ]);
        if($user['password'] !== null) {
            $user->update(['password' => bcrypt($data['password'])]);
        }
        return redirect('manajemen-user')->with('success', 'User Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('manajemen-user')->with('success', 'Data Berhasil Dihapus!');
    }
}
