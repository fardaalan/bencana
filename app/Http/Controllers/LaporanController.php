<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    //
    public function store(Request $request)
    {
        Laporan::create([
            'nama' => $request->name,
            'lokasi' => $request->lokasi,
            'jenis' => $request->jenis,
            'telp' => $request->telp,
            'deskripsi' => $request->desc,
        ]);

        return back()->with('success', 'Laporan Berhasil Dikirim');
    }
}
