<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class TambahUserController extends Controller
{
    public function index()
    {
        $du = User::all();
        return view('tambah_user', compact('du'));
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'hak_akses' => 'User',
            'password' => $request->password,
        ]);

        return redirect('data-user')->with('success', 'Data Berhasil Ditambahkan!');
    }
}
