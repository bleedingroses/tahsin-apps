<?php

namespace App\Http\Controllers;
use App\Models\Hafalan;
use App\Models\Santri;
use Illuminate\Http\Request;

class HafalanController extends Controller
{
    public function index()
    {
        $hafalan = Hafalan::latest()->paginate(10);
        return view("hafalan.index", compact('hafalan'), ['hafalan'=> $hafalan]);
    }
    public function tambah()
    {
        $hafalan = Hafalan::all();    
        return view('hafalan.tambah', compact('hafalan'));
    }

    public function simpan(Request $request)
    {
        // dd($request->except(['_token', 'submit']));
        $hafalan = Hafalan::create($request->except(['_token', 'submit']));
        if($request->hasFile('gambar'))
        {
            $request->file('gambar')->move('img/', $request->file('gambar')->getClientOriginalName());
            $hafalan->gambar = $request->file('gambar')->getClientOriginalName();
            $hafalan->save();
        }
        return redirect('/hafalan')->with('success', 'Data Berhasil Ditambahkan!');
    }
    public function ubah($id)
    {
        $hafalan = Hafalan::find($id); 
        return view('hafalan.ubah', compact('hafalan'));
    }

    public function update($id, Request $request)
    {
        $hafalan = Hafalan::find($id);
        $hafalan->update($request->except(['_token', 'submit']));
        if($request->hasFile('gambar'))
        {
            $request->file('gambar')->move('img/', $request->file('gambar')->getClientOriginalName());
            $hafalan->gambar = $request->file('gambar')->getClientOriginalName();
            $hafalan->save();
        }
        return redirect('/hafalan')->with('success', 'Data Berhasil Diubah!');
    }

    public function destroy($id)
    {
        $hafalan = Hafalan::find($id);
        $hafalan->delete();
        return redirect('/hafalan');
    }
    public function detail($id)
    {
        $hafalan = Hafalan::find($id);
        $santri = Santri::all();
        return view('hafalan.detail', ['hafalan'=> $hafalan, 'santri'=> $santri]);
    }
    public function hafiz(Request $request, $idhafalan)
    {
        $hafalan = Hafalan::find($idhafalan);
        if( $hafalan->santri()->where('santri_id', $request->nama)->exists()){
            return redirect('hafalan/' .$idhafalan. '/detail')->with('error', 'Data Sudah Ada!');;
        }
        $hafalan->santri()->attach($request->nama, ['ayat'=> $request->ayat]);
        return redirect('hafalan/' .$idhafalan. '/detail')->with('success', 'Data Berhasil Ditambah!');;
    }

    public function hapus($idhafalan, $idsantri)
    {
        $hafalan = Hafalan::find($idhafalan);
        $hafalan->santri()->detach($idsantri);
        return redirect()->back()->with('success','Data Berhasil Dihapus!');
    }
}
