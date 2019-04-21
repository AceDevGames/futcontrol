@extends('layout.app',["current"=>"times"])
@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/times" method="post">
                @csrf
                <div class="form-group">
                    <label for="nomeTime">Nome do Time</label>
                    <input type="text" class="form-control" name="nomeTime"
                           id="nomeTime" placeholder="Preencha o nome do time!">
                </div>

                <div class="form-group">
                    <label for="fundacaoTime">Ano de Fundação</label>
                    <input type="text" class="form-control" name="fundacaoTime"
                           id="fundacaoTime" placeholder="Preencha o ano de fundação do time!">
                </div>
                <div class="form-group">
                    <label for="presidenteTime">Presidente do Time</label>
                    <input type="text" class="form-control" name="presidenteTime"
                           id="presidenteTime" placeholder="Preencha o nome do presidente do time!">
                </div>
                <div class="form-group">
                    <label for="estadioTime">Estádio do Time</label>
                    <input type="text" class="form-control" name="estadioTime"
                           id="estadioTime" placeholder="Preencha o nome do estádio do time!">
                </div>
                <div class="form-group">
                    <label for="cidadeTime">Cidade do Jogador</label>
                    <input type="text" class="form-control" name="cidadeTime"
                           id="cidadeTime" placeholder="Preencha o nome da cidade do time!">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@endsection