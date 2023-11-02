<?php

namespace App\Http\Controllers;
use App\Models\Hafalan;
use Illuminate\Http\Request;
use App\Models\Tahsin;

class HafalanController extends Controller
{
    public function index()
    {
        $hafalan = Hafalan::latest()->paginate(10);
        return view("tahsin.hafalan", compact('hafalan'), ['hafalan'=> $hafalan]);
    }
}
