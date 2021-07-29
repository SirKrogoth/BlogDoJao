@extends('layout.app')

@section('title')
    {{ $artigo->titulo }}
@endsection

@section('header')
    {{ $artigo->titulo }}
@endsection

@include('partials.header')

@section('content')

   <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            {{ $artigo->conteudo }}
        </div>
      </div>
    </div>
  </article>

@endsection
