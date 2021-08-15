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
            'artigos' => $artigos,
            'sucesso' => 'Artigo ' . $request->titulo . ' criado com sucesso.'
        ]);
    }

    public function procurarTodosArtigos()
    {
        $artigos = DB::table('artigos')
                        ->latest()
                        ->get();

        return $artigos;
    }

    public function edit(int $id)
    {
        $artigo = Artigo::findOrFail($id);

        return view('artigo.edit', [
            'artigo' => $artigo
        ]);
    }

    public function update(int $id, Request $request)
    {
        $artigo = Artigo::findOrFail($id);

        $artigo->update([
            'titulo' => $request->titulo,
            'conteudo' => $request->conteudo,
            'ativo' => $request->ativo,
            'autor' => $request->autor,
            'resumo' => $request->resumo
        ]);

        $artigos = $this->procurarTodosArtigos();

        return view('news.index')->with([
            'artigos' => $artigos
        ]);
    }

    public function destroy(int $id)
    {
        $artigo = Artigo::findOrFail($id);

        $artigo->delete();

        $artigos = $this->procurarTodosArtigos();

        return view('news.index')->with([
            'artigos' => $artigos
        ]);
    }
}
