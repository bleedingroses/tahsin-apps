<?php

namespace App\Http\Controllers;
use App\Models\Hafalan;
use Illuminate\Http\Request;
use App\Models\Tahsin;

class HafalanController extends Controller
{
    public function hafal($id)
    {
        $hafal = Hafalan::find($id);
        return view('tahsin.profile', ['hafalan'=> $hafal]);
    }

    public function hafalan()
    {
        return $this->belongsTo(Tahsin::class);
    }
}
