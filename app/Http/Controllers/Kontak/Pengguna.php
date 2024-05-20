<?php

namespace App\Http\Controllers\Kontak;

use App\Http\Controllers\Controller;
use App\Models\Kontak\Hakaksesmodel;
use App\Models\Kontak\Penggunamodel;
use Illuminate\Http\Request;

class Pengguna extends Controller
{
    function index()
    {
        $data['ambilpengguna'] = Penggunamodel::all();
        // dd($data['ambilpengguna']);
        return view('kontak/pengguna/v_index', $data);
    }

    function tambah()
    {
        $data['hakakses'] = Hakaksesmodel::where('hakakses_status', '1')->get();
        return view('kontak/pengguna/v_tambah', $data);
    }

    function prosestambah()
    {
        Penggunamodel::create([
            'google_id' => '',
            'google_token' => '',
            'avatar' => '',
            'email' => request('email'),
            'password' => md5(request('email')),
            'name' => request('name'),
            'perusahaan' => request('perusahaan'),
            'phone' => request('phone'),
            'role' => request('role'),
            'statusakun' => request('statusakun'),
            'editakundefault' => request('editakundefault'),
        ]);
        return redirect('/kontak/pengguna');
    }

    function edit($id)
    {
        $data['hakakses'] = Hakaksesmodel::where('hakakses_status', '1')->get();
        $data['ambilpengguna_id'] = Penggunamodel::where('id', $id)->first();
        return view('kontak/pengguna/v_edit', $data);
    }

    function update(Request $request, $id)
    {
        Penggunamodel::where('id', $id)->update([
            'name' => $request->name,
            'perusahaan' => $request->perusahaan,
            'phone' => $request->phone,
            'role' => $request->role,
            'statusakun' => $request->statusakun,
            'editakundefault' => $request->editakundefault,
        ]);
        return redirect('/kontak/pengguna');
    }

    function hapus($id)
    {
        Penggunamodel::where('id', $id)->delete();
        return redirect('/kontak/pengguna');
    }
}
