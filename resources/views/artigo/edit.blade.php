@extends('layout.app')

@section('title')
    Editando artigo {{ $artigo->titulo }}
@endsection


@section('header')
    <h1>Edicação do artigo {{ $artigo->titulo }}</h1>
@endsection

@include('partials.header')

@section('content')
   <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <form action="{{ route('atualizarArtigo', $artigo) }}" method="POST">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="autor" class="form-label">Nome do autor</label>
                    <input type="text" class="form-control" id="autor" name="autor" value="{{ $artigo->autor }}" />
                </div>
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título do artigo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $artigo->titulo }}">
                </div>
                <div class="mb-3">
                    <label for="resumo" class="form-label">Resumo do artigo</label>
                    <textarea class="form-control" name="resumo" id="resumo" rows="3">{{ $artigo->resumo }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="conteudo" class="form-label">Artigo</label>
                    <textarea class="form-control" id="conteudo" name="conteudo" rows="20">{{ $artigo->conteudo }}</textarea>
                </div>
                <div class="mb-3">
                    <button class="btn btn-success">Atualizar</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </article>
@endsection
