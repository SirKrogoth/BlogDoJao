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
            {{ $artigo->conteudo }}
        </div>
      </div>
    </div>
  </article>

@endsection
