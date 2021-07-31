<div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $artigo->titulo }}</h5>
                    <p class="card-text">{{ $artigo->resumo }}</p>
                    <a href="{{ route('buscar_artigo', $artigo->id) }}" class="btn btn-primary">Consultar Artigo</a>
                </div>
            </div>
        </div>
</div>
