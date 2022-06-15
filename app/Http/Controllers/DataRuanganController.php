<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Ruangan;
use App\Models\Matkul;
use Illuminate\Http\Request;

class DataRuanganController extends Controller
{
    public function index()
    {
        $dtruang = Ruangan::all()->sortBy('ruangan');
        // $dtruang->sortByDesc('ruangan');
        return view('data_ruangan', compact('dtruang'));
    }



    public function edit($id)
    {
        $rg = Ruangan::findorfail($id);
        return view('update-ruangan', compact('rg'));
    }

    public function update(Request $request, $id)
    {
        $rg = Ruangan::findorfail($id);
        $rg->update($request->all());
        return redirect('data-ruangan')->with('success', 'Data Berhasil Diubah!');
    }

    public function destroy($id)
    {
        $result = Jadwal::where('idruangan', $id)->first();
        if($result){
            return back()->with('warning', 'Data Tidak Boleh Dihapus');
        }

        $rg = Ruangan::findorfail($id);
        $rg->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }

}

