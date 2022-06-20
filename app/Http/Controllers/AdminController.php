<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function goLaporan()
    {
        return view('admin.index', ['laporan' => Laporan::all()]);
    }

    public function destroyLaporan(Laporan $laporan)
    {
        Laporan::destroy($laporan->id);

        return back()->with('success', 'Laporan Berhasil Dihapus');
    }

    public function goUser()
    {
        return view('admin.user', ['user' => User::all()]);
    }

    public function storeUser(Request $request)
    {
        User::create([
            'name' => $request->nama,
            'email' => $request->username,
            'password' => Hash::make($request->password),
            'pass_view' => Crypt::encrypt($request->password)
        ]);
        return back()->with('success', 'Akun Berhasil Diinput');
    }
}
