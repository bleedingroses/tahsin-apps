<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index() {
    $posts = Todo::get();
    return view('skudetto.index', [
        'posts' => $posts ]); }
    
    public function tambah(Request $request) {
        $model = Todo::create($request->all());
        $model->save();
        return redirect('/'); }

}