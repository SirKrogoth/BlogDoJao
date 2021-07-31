<?php

namespace App\Http\Controllers;

use App\Models\Artigo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtigoController extends Controller
{
    //
    public function index()
    {
        $artigos = $this->procurarTodosArtigos();

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

    public function novo()
    {
        return view('artigo.novo');
    }

    public function store(Request $request)
    {
        $artigo = $request->all();

        Artigo::create($artigo);

        $artigos = $this->procurarTodosArtigos();

        return view('news.index')->with([
            'artigos' => $artigos
        ]);
    }

    public function procurarTodosArtigos()
    {
        $artigos = DB::table('artigos')
                        ->latest()
                        ->get();

        return $artigos;
    }
}
