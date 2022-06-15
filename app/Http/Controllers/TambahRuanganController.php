<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class TambahRuanganController extends Controller
{
    public function index()
    {
        $rg = Ruangan::all();
        return view('tambah_ruangan', compact('rg'));
    }

    public function store(Request $request)
    {
        Ruangan::create([
            'ruangan' => $request->ruangan,
        ]);

        return redirect('data-ruangan')->with('success', 'Data Berhasil Ditambahkan!');
    }

    
}
