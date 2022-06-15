<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DataUserController extends Controller
{
    public function index()
    {
        $dtuser = User::orderBy('hak_akses')->paginate(5);
        // $dtusertampil = User::all()->orderBy('hak_akses');
        return view('data_user', compact('dtuser'));
    }

    public function edit($id)
    {
        $du= User::findorfail($id);
        return view('update-user', compact('du'));
    }


    public function destroy($id)
    {
        $du = User::findorfail($id);
        $du->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }

    // public function update(Request $request, $id)
    // {
    //     $du = User::findorfail($id);
    //     $du->update($request->all());
    //     return redirect('data-user')->with('success', 'Data Berhasil Diubah!');
    // }
    public function update(Request $request, $id)
    {
        $du = User::findorfail($id);

        $du->update($request->all());
        // dd($du->hak_akses);
        return redirect('data-user')->with('success', 'Data Berhasil Diubah!');
    }
}
