<?php

namespace App\Http\Controllers;

use App\Models\Grup;
use App\Models\Kajian;
use App\Models\Materi;
use Illuminate\Http\Request;

class KajianController extends Controller
{
    public function index()
    {
        $kajian = Kajian::sortable()->paginate(5);
        return view('kajian.index', ['kajian'=> $kajian]);
    }

    public function tambah()
    {
        $materi = Materi::all();    
        $grup = Grup::all();
        return view('kajian.tambah', compact('materi', 'grup'));
    }

    public function simpan(Request $request)
    {
        // dd($request->except(['_token', 'submit']));
        $kajian = Kajian::create($request->except(['_token', 'submit']));
        if($request->hasFile('gambar'))
        {
            $request->file('gambar')->move('img/', $request->file('gambar')->getClientOriginalName());
            $kajian->gambar = $request->file('gambar')->getClientOriginalName();
            $kajian->save();
        }
        return redirect('/kajian')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function ubah($id)
    {
        $kajian = Kajian::find($id);
        $materi = Materi::all();
        $grup = Grup::all(); 
        return view('kajian.ubah', compact('materi','grup'));
    }
    public function update($id, Request $request)
    {
        $kajian = Kajian::find($id);
        $kajian->update($request->except(['_token', 'submit']));
        if($request->hasFile('gambar'))
        {
            $request->file('gambar')->move('img/', $request->file('gambar')->getClientOriginalName());
            $kajian->gambar = $request->file('gambar')->getClientOriginalName();
            $kajian->save();
        }
        return redirect('/kajian')->with('success', 'Data Berhasil Diubah!');
    }
    public function destroy($id)
    {
        $kajian = Kajian::find($id);
        $kajian->delete();
        return redirect('/kajian');
    }
}
