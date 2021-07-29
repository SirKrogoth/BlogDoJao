<?php

namespace App\Http\Controllers;

use App\Models\Artigo;
use Illuminate\Http\Request;

class ArtigoController extends Controller
{
    //
    public function index()
    {
        $artigos = Artigo::orderby('created_at', 'desc')->paginate(2);

        return view('news.index')->with([
            'artigos' => $artigos
        ]);
    }

    public function show($id)
    {
        $artigo = Artigo::findOrFail($id);

        return view('artigo.artigo',[
            'artigo' => $artigo
        ]);
    }
}
