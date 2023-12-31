<?php

namespace App\Http\Controllers;
use App\Models\Santri;
use App\Models\Grup;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    protected $guarded = [];
    public function index()
    {
        $santri = Santri::sortable()->paginate(5);
        return view('santri.index', ['santri'=> $santri]);
    }
    
    public function tambah()
    {
        $grup = Grup::all();    
        return view('santri.tambah', compact('grup'));
    }

    public function simpan(Request $request)
    {
        // dd($request->except(['_token', 'submit']));
        $santri = Santri::create($request->except(['_token', 'submit']));
        if($request->hasFile('gambar'))
        {
            $request->file('gambar')->move('img/', $request->file('gambar')->getClientOriginalName());
            $santri->gambar = $request->file('gambar')->getClientOriginalName();
            $santri->save();
        }
        return redirect('/santri')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function ubah($id)
    {
        $santri = Santri::find($id);
        $grup = Grup::all(); 
        return view('santri.ubah', compact('santri','grup'));
    }

    public function update($id, Request $request)
    {
        $santri = Santri::find($id);
        $santri->update($request->except(['_token', 'submit']));
        if($request->hasFile('gambar'))
        {
            $request->file('gambar')->move('img/', $request->file('gambar')->getClientOriginalName());
            $santri->gambar = $request->file('gambar')->getClientOriginalName();
            $santri->save();
        }
        return redirect('/santri')->with('success', 'Data Berhasil Diubah!');
    }

    public function destroy($id)
    {
        $santri = Santri::find($id);
        $santri->delete();
        return redirect('/santri');
    }
}
