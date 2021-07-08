<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class SiswasController extends Controller
{
    /**
     * Display a listing of the resource.
     
    

     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $datas = Siswa::latest()->paginate(10);
        return view('home',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'        => 'required|min: 5',
            'tanggal'     => 'required',
            'asalsekolah' => 'required|min:5',
            'alamat'      => 'required|min:5',
            'gambar'      => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        //upload image
        $image = $request->file('gambar');
        $image->storeAs('public/image', $image->hashName());

        $data               = $request->all();
        $siswa              = Siswa::create($data);
        if($siswa){
            return redirect()->route('home')->with('success','Item created successfully!');
        }else{
            return redirect()->route('home')->with('error','You have no permission for this page!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $data = Siswa::findOrFail($id);
        // return view('show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Siswa::findOrFail($id);
        return view('edit',compact('data'))->with('success','Data berhasil diedit');;
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
        $validated = $request->validate([
            'nama'        => 'required|min: 5',
            'tanggal'     => 'required',
            'asalsekolah' => 'required|min:5',
            'alamat'      => 'required|min:5',
            'gambar'      => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $siswa = Siswa::findOrFail($id); //mencari user berdasarkan id user
        $data = $request->all(); //menerima request dari view
        $siswa->update($data); //update data user
        return redirect('/home')
                        ->withErrors($validated)
                        ->withInput(); //kembalikan kel halaman home
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect('/home');
    }
}
