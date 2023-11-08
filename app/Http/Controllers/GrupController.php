<?php

namespace App\Http\Controllers;
use App\Models\Grup;
use Illuminate\Http\Request;

class GrupController extends Controller
{
    protected $guarded = [];
    public function index()
    {
        $grup = Grup::sortable()->paginate(5);
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
    public function ubah($id)
    {
        $grup = Grup::find($id);
        return view('grup.ubah', compact('grup'));
    }

    public function update($id, Request $request)
    {
        $grup = Grup::find($id);
        $grup->update($request->except(['_token', 'submit']));
        if($request->hasFile('gambar'))
        {
            $request->file('gambar')->move('img/', $request->file('gambar')->getClientOriginalName());
            $grup->gambar = $request->file('gambar')->getClientOriginalName();
            $grup->save();
        }
        return redirect('/')->with('success', 'Data Berhasil Diubah!');
    }
    public function destroy($id)
    {
        $grup = Grup::find($id);
        $grup->delete();
        return redirect('/');
    }
}
