<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class DataMatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtmatkul = Matkul::latest()->paginate(5);
        return view('data_matkul', compact('dtmatkul'));
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
        $mat = Matkul::findorfail($id);
        return view('update-matkul', compact('mat'));
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
        $mat = Matkul::findorfail($id);
        $mat->update($request->all());
        return redirect('data-matkul')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Jadwal::where('idmatkul', $id)->first();
        if($result){
            return back()->with('warning', 'Data Tidak Boleh Dihapus');
        }

        $mat = Matkul::findorfail($id);
        $mat->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
