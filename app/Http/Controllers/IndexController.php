<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function daftar()
    {
        return view('daftar');
    }

    public function simpan(Request $request)
    {
        $validated = $request->validate([
            'nama'        => 'required|min: 5',
            'tanggal'     => 'required',
            'asalsekolah' => 'required|min:5',
            'alamat'      => 'required|min:5',
            'gambar'      => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $data               = $request->all();
        $siswa              = Siswa::create($data);
        return redirect('/');
    }
}
