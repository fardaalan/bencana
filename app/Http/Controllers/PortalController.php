<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class PortalController extends Controller
{
    public function portal_disaster()
    {
        $laporans = Laporan::paginate(25);
        return view('home.disasters', compact('laporans'));
    }
}
