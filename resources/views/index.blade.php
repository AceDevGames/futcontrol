@extends('layout.app',["current"=>"home"])
@section('body')
    <h1>Fut Control</h1>
    <div class="jumbotron bg-light border border-secondary">
        <div class="row">
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de Times</h5>
                        <p class="card-text">
                            Lista de times
                        </p>
                        <a href="/times" class="btn btn-primary">Cadastrar</a>
                    </div>
                </div>
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de Jogadores</h5>
                        <p class="card-text">
                            Lista de jogadores
                        </p>
                        <a href="/times" class="btn btn-primary">Cadastrar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection