@extends('layout.app')

@section('content')
        @include('partials.head')
        <!-- Navigation-->
        @include('partials.header')
        <!-- Main Content-->

        @if (isset($sucesso) && $sucesso)
            <div class="alert alert-success alert-block t">
                    <strong>{{ $sucesso }}</strong>
            </div>
        @endif

        <hr>

        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="row">
                        @forelse ($artigos as $artigo)
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $artigo->titulo }}</h5>
                                        <p class="card-text">{{ $artigo->resumo }}</p>
                                        <a href="{{ route('buscar_artigo', $artigo->id) }}" class="btn btn-primary">Visualizar</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>Não foi encontrado nenhum artigo para esta categoria.</p>
                        @endforelse
                    </div>
                </div>

            </div>
        </div>

@endsection


