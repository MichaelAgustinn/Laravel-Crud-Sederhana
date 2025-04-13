<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class Perpustakaan extends Controller
{
    public function lihat()
    {
        $data = Anggota::all();
        return view("lihat", ['data' => $data]);
    }

    public function tambah(Request $request)
    {
        if ($request->isMethod("post")) {
            $data = new Anggota();
            $data->nisn = $request->nisn;
            $data->nama = $request->nama;
            $data->alamat = $request->alamat;
            $data->no_telepon = $request->no_telepon;
            $data->save();
            return redirect('/lihat')->with("success", "data berhasil di tambahkan");
        }
        return view("tambah");
    }

    public function delete(Request $request)
    {
        $data = Anggota::find($request->nisn);
        $data->delete();
        return redirect('/lihat')->with("success", "data berhasil di hapus");
    }

    public function edit(Request $request)
    {
        $data = Anggota::findOrFail($request->nisn);
        if ($request->isMethod("post")) {
            $data->nisn = $request->nisn;
            $data->nama = $request->nama;
            $data->alamat = $request->alamat;
            $data->no_telepon = $request->no_telepon;
            $data->save();
            return redirect('/lihat')->with("success", "data berhasil di ubah");
        }
        return view("edit", ['data' => $data]);
    }
}
