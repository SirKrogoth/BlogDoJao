@extends('layout.app')

@section('title')
    Criando novo artigo
@endsection


@section('header')
    <h1>Publicação de Novo Artigo</h1>
@endsection

@include('partials.header')

@section('content')
   <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <form action="{{ route('store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="autor" class="form-label">Nome do autor</label>
                    <input type="text" class="form-control" id="autor" name="autor" placeholder="João Rafael Menezes">
                </div>
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título do artigo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Como escrever uma carta">
                </div>
                <div class="mb-3">
                    <label for="resumo" class="form-label">Resumo do artigo</label>
                    <textarea data-ls-module="charCounter" maxlength="300" class="form-control" name="resumo" onkeyup="contadorDeResumoFunction()" placeholder="Informe aqui um breve resumo do seu artigo. Este conteúdo será utilizado para chamar a atenção na time-line." id="resumo" rows="3"></textarea>
                    <span class="ls-label-text" style="font-size: 12px;">(<span class="ls-label-text" style="font-size: 12px;" id="contadorDeResumo" name="contadorDeResumo">0</span>/300)</span>
                </div>
                <div class="mb-3">
                    <label for="conteudo" class="form-label">Artigo</label>
                    <textarea class="form-control" id="conteudo" name="conteudo" rows="20"></textarea>
                </div>
                <div class="mb-3">
                    <button class="btn btn-success">Publicar</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </article>
@endsection
