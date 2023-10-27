<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Tahsin;
use Illuminate\Http\Request;

class TahsinController extends Controller
{
    public function show()
    {
        $data= Tahsin::sortable()->paginate(5);
        return view('tahsin.index', ['tahsins' => $data]);
    }
    
    public function tambah()
    {
        $categories = Category::all();    
        return view('tahsin.tambah', compact('categories'));
    }

    public function simpan(Request $request)
    {
        // dd($request->except(['_token', 'submit']));
        $data = Tahsin::create($request->except(['_token', 'submit']));
        if($request->hasFile('gambar'))
        {
            $request->file('gambar')->move('img/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect('/tahsin')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function ubah($id)
    {
        $tahsin = Tahsin::find($id);
        $categories = Category::all(); 
        return view('tahsin.ubah', compact('tahsin','categories'));
    }

    public function update($id, Request $request)
    {
        $tahsin = Tahsin::find($id);
        $tahsin->update($request->except(['_token', 'submit']));
        if($request->hasFile('gambar'))
        {
            $request->file('gambar')->move('img/', $request->file('gambar')->getClientOriginalName());
            $tahsin->gambar = $request->file('gambar')->getClientOriginalName();
            $tahsin->save();
        }
        return redirect('/tahsin')->with('success', 'Data Berhasil Diubah!');
    }

    public function destroy($id)
    {
        $tahsin = Tahsin::find($id);
        $tahsin->delete();
        return redirect('/tahsin');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function profile($id)
    {
        $tahsin = Tahsin::find($id);
        return view('tahsin.profile', ['tahsin'=> $tahsin]);
    }
}
