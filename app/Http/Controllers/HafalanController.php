<?php

namespace App\Http\Controllers;
use App\Models\Hafalan;
use Illuminate\Http\Request;
use App\Models\Tahsin;

class HafalanController extends Controller
{
    public function index()
    {
        $hafalan = Hafalan::all();
        return view("tahsin.hafalan", ['hafalan'=> $hafalan]);
    }
}
