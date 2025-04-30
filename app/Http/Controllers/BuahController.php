<?php

namespace App\Http\Controllers;

use App\Models\Buah;
use Illuminate\Http\Request;

class BuahController extends Controller
{
    public function lihat()
    {
        $data = Buah::all();
        return view('lihatBuah', compact('data'));
    }

    public function hapus(Request $request)
    {
        $data = Buah::find($request->kode_buah);
        $data->delete();
        return redirect('/lihatBuah');
    }

    public function tambah(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = new Buah();
            $data->kode_buah = $request->kode_buah;
            $data->nama = $request->nama;
            $data->warna = $request->warna;
            $data->harga = $request->harga;
            $data->save();
            return redirect('/lihatBuah');
        }
        return view('tambahBuah');
    }

    public function edit(Request $request, $unik)
    {
        $data = Buah::find($request->kode_buah);
        if ($request->isMethod('post')) {
            $data->kode_buah = $request->kode_buah;
            $data->nama = $request->nama;
            $data->warna = $request->warna;
            $data->harga = $request->harga;
            $data->save();
            return redirect('/lihatBuah');
        }
        return view('editBuah', compact('data'));
    }

    // public function editLihat($kodes)
    // {
    //     $data = Buah::where('kode_buah', $kodes)->first();
    //     // dd($data);
    //     return view('editBuah', compact('data'));
    // }
}
