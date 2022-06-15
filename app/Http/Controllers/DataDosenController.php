<?php

namespace App\Http\Controllers;
use App\Models\Dosen;
use App\Models\Jadwal;
use App\Models\Matkul;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input as InputInput;

class DataDosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtdosen = Dosen::latest()->paginate(5);
        return view('data_dosen', compact('dtdosen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dos = Dosen::findorfail($id);
        return view('update-dosen', compact('dos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dos = Dosen::findorfail($id);
        $dos->update($request->all());
        return redirect('data-dosen')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Jadwal::where('idnpp', $id)->first();
        if($result){
            return back()->with('warning', 'Data Tidak Boleh Dihapus');
        }

        $dos = Dosen::findorfail($id);
        $dos->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
        // $ck = Matkul::findorfail($id);

        // $dos = Dosen::where('id', '=', Jadwal::get('idnpp'))->first();
        // if($dos === null){
        //     $dos = Dosen::findorfail($id);
        //     // $dos->delete();
        //     return back()->with('info', 'Data Berhasil Dihapus!');
        // }
        // else{
        //     return back()->with('iWoiii');
        // }
        // return back()->with('info', );


    }
}
