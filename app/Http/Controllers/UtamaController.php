<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class UtamaController extends Controller
{
    public function index()
    {
        $jadwal = Jadwal::all();
        // $ambil = Jadwal::find();
        // $jadwal = DB::select("SELECT * FROM jadwal WHERE hari = 'rabu'");
        $skrg = '';
        $jml = Jadwal::count();



        return view('utama', compact('jadwal', 'jml', 'skrg'));
    }

    public function hari($id){
        // @dd($id);
        $hariDrop = date('d', strtotime($id));

        $hari = explode(',',$id);
        // @dd($hari[0]);
        // @dd($hariDrop);
        // @dd($result = Jadwal::get()->pluck('hari'));
        $skrg = "hari " . $hari[0];
        $jadwal = Jadwal::get()->where('hari','=',$hari[0]);
        $jml = Jadwal::get()->where('hari','=',$hari[0])->count();
        return view('utama', compact('jadwal', 'jml', 'skrg'));


        // @dd($result = DB::select("SELECT * from jadwal WHERE hari = '$id'"));

    }
}

