<?php

namespace App\Http\Controllers;
use App\Models\Materi;
use App\Models\Grup;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    protected $guarded = [];
    public function index()
    {
        {
            $materi = Materi::sortable()->paginate(5);
            return view('materi.index', ['materi'=> $materi]);
        }
    }
    public function tambah()
    {    
        return view('materi.tambah');
    }
    public function simpan(Request $request)
    {
        // dd($request->except(['_token', 'submit']));
        $data = Materi::create($request->except(['_token', 'submit']));
        if($request->hasFile('gambar'))
        {
            $request->file('gambar')->move('img/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect('/materi')->with('success', 'Materi Berhasil Ditambahkan!');
    }

    public function destroy($id)
    {
        $materi = Materi::find($id);
        $materi->delete();
        return redirect('/materi');
    }

    public function detail($id)
    {
        $materi = Materi::find($id);
        $grup = Grup::all();
        return view('materi.detail', ['materi'=> $materi, 'grup'=> $grup]);
    }

    public function belajar(Request $request, $idmateri)
    {
        $materi = Materi::find($idmateri);
        if( $materi->grup()->where('grup_id', $request->nama)->exists()){
            return redirect('materi/' .$idmateri. '/belajar')->with('error', 'Data Sudah Ada!');;
        }
        $materi->grup()->attach($request->nama, ['absensi'=> $request->absensi]);
        return redirect('materi/' .$idmateri. '/belajar')->with('success', 'Data Berhasil Ditambah!');;
    }
}
