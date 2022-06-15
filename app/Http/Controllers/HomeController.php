<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Jadwal;
use App\Models\Matkul;
use App\Models\User;
// use Carbon\Carbon;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\Ruangan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dtJadwal = Jadwal::with('ruangan','matakuliah', 'dosen')->latest()->paginate(5);
        $matkul = Jadwal::count();
        $users = User::count();
        $jummatkul = Matkul::count();
        $dosen = Dosen::count();
        $hari =     Carbon::now()->isoFormat('D MMMM Y');
        $widget = [
            'users' => $users,
            'jadwal' => $dtJadwal,
            'matkul' => $matkul,
            'jummatkul' => $jummatkul,
            'dosen' => $dosen,
            'hari' => $hari
            //...
        ];


        return view('home',$widget);
    }

    public function create()
    {
        $dos = Dosen::all();
        $mat = Matkul::all();
        $ruang = Ruangan::all();
        return view('input', compact('ruang', 'mat', 'dos'));
    }

    public function store(Request $request)
    {
        $test = $request->tgl;
        $ubah = date('D', strtotime($test));
        $ubah = Carbon::parse($ubah)->isoFormat('dddd');
        $mulai =$request->jam_mulai;
        $hari = $request->tgl;
        $selesai = $request->jam_selesai;
        $cekJam = Jadwal::where('jam_mulai', $mulai)->first();
        $cekHari = Jadwal::where('tgl', $hari)->first();
        if($cekJam AND $cekHari){
            return redirect('home')->with('warning', 'Jadwal bentrok');
        }


        Jadwal::create([
            'idmatkul' => $request->idmatkul,
            'kelompok' => $request->kelompok,
            'idnpp' => $request->idnpp,
            'idruangan' => $request->idruangan,
            'tgl' => $request->tgl,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'hari' => $ubah
        ]);

        return redirect('home')->with('success', 'Data Berhasil Ditambahkan!');

    }

    public function edit($id)
    {
        $dos = Dosen::all();
        $mat = Matkul::all();
        $ruang = Ruangan::all();
        $jdl = Jadwal::with('ruangan')->findorfail($id);
        return view('update', compact('jdl', 'ruang', 'mat', 'dos'));
    }

    public function update(Request $request, $id)
    {
        $jdl = Jadwal::findorfail($id);
        $jdl->update($request->all());
        return redirect('home')->with('success', 'Data Berhasil Diubah!');
    }

    public function destroy($id)
    {
        $jdl = Jadwal::findorfail($id);
        $jdl->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }



}
