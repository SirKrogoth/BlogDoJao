@extends('layout.app')

@section('title')
    {{ $artigo->titulo }}
@endsection

@section('header')
    <h1>{{ $artigo->titulo }}</h1>
    <h5><i><p style="text-align:right;">Por {{ $artigo->autor }}</p></i></h5>
@endsection

@include('partials.header')

@section('content')

   <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <pre wrap="">
                <p style="text-align: justify;">{{ $artigo->conteudo }}</p>
            </pre>
        </div>
      </div>

      <br>

      <div class="row">
        <a href="{{ route('editarArtigo', $artigo->id) }}" class="btn btn-warning">Alterar Artigo</a>
      </div>

      <form action="{{ route('excluirArtigo', $artigo->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <div class="row">
            <button class="btn btn-danger" type="submit" onclick="return confirm('Deseja realmente excluir este artigo?')">Excluir Artigo</button>
        </div>
      </form>

    </div>
  </article>

@endsection
