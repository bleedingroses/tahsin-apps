<?php

namespace App\Http\Controllers;
use App\Models\Grup;
use Illuminate\Http\Request;

class GrupController extends Controller
{
    protected $guarded = [];
    public function index()
    {
        $grup = Grup::all();
        return view('grup.index', ['grup'=> $grup]);
    }
    public function tambah()
    {    
        return view('grup.tambah');
    }
    public function simpan(Request $request)
    {
        // dd($request->except(['_token', 'submit']));
        $data = Grup::create($request->except(['_token', 'submit']));
        if($request->hasFile('gambar'))
        {
            $request->file('gambar')->move('img/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect('/')->with('success', 'Grup Berhasil Ditambahkan!');
    }
}
