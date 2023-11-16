<?php

namespace App\Http\Controllers;

use App\Models\Grup;
use App\Models\Santri;
use App\Models\Kajian;
use Illuminate\Contracts\Session\Session;
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
        $grup = Grup::all();
        $santri = Santri::all();
        return view('kajian.tambah', compact('grup', 'santri'));
    }

    public function simpan(Request $request)
    {
        $request->merge([ 'absensi' => implode(',', (array) $request->get('absensi'))]);

        Kajian::create($request->except(['_token', 'submit']));

        return redirect('/kajian')->with('success', 'Data Berhasil Ditambahkan!');
    }
    public function destroy($id)
    {
        $kajian = Kajian::find($id);
        $kajian->delete();
        return redirect('/kajian');
    }
}
