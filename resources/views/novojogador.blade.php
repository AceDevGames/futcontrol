@extends('layout.app',["current"=>"jogadores"])
@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/jogadores" method="post">
                @csrf
                <div class="form-group">
                    <label for="nomeJogador">Nome do Jogador</label>
                    <input type="text" class="form-control" name="nomeJogador"
                    id="nomeJogador" placeholder="Nome Jogador">
                </div>

                <div class="form-group">
                    <label for="idadeJogador">Idade do Jogador</label>
                    <input type="text" class="form-control" name="idadeJogador"
                    id="idadeJogador" placeholder="Idade Jogador">
                </div>
                <div class="form-group">
                    <label for="cidadeJogador">Cidade do Jogador</label>
                    <input type="text" class="form-control" name="cidadeJogador"
                    id="cidadeJogador" placeholder="Cidade Jogador">
                </div>
                <div class="form-group">
                    <label for="salarioJogador">Salário do Jogador</label>
                    <input type="text" class="form-control" name="salarioJogador"
                    id="salarioJogador" placeholder="Salário Jogador">
                </div>
                <div class="form-group">
                    <label for="posicaoJogador">Posição do Jogador</label>
                    <input type="text" class="form-control" name="posicaoJogador"
                    id="posicaoJogador" placeholder=Posição Jogador">
                </div>
                <div class="form-group">
                    <label  class="mr-sm-2 sr-only" for="timeJogador">Time Jogador</label>
                    <select class="custom-select mr-sm-2" name="timeJogador" id="timeJogador">
                        <option selected>Escolha o time do jogador...</option>
                        @foreach($times as $tim)
                        <option value="{{$tim->id}}">{{$tim->nome}}</option>
                        @endforeach
                </div>
                    </select>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@endsection