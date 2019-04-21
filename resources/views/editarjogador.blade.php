@extends('layout.app',["current"=>"jogadores"])
@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/jogadores/{{$jogadores->id}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nomeJogador">Nome do Jogador</label>
                    <input type="text" class="form-control" name="nomeJogador" value="{{$jogadores->nome}}"
                           id="nomeJogador" placeholder="Nome Jogador">
                </div>

                <div class="form-group">
                    <label for="idadeJogador">Idade do Jogador</label>
                    <input type="text" class="form-control" name="idadeJogador" value="{{$jogadores->idade}}"
                           id="idadeJogador" placeholder="Idade Jogador">
                </div>
                <div class="form-group">
                    <label for="cidadeJogador">Cidade do Jogador</label>
                    <input type="text" class="form-control" name="cidadeJogador" value="{{$jogadores->cidade}}"
                           id="cidadeJogador" placeholder="Cidade Jogador">
                </div>
                <div class="form-group">
                    <label for="salarioJogador">Salário do Jogador</label>
                    <input type="text" class="form-control" name="salarioJogador" value="{{$jogadores->salario}}"
                           id="salarioJogador" placeholder="Salário Jogador">
                </div>
                <div class="form-group">
                    <label for="posicaoJogador">Posição do Jogador</label>
                    <input type="text" class="form-control" name="posicaoJogador" value="{{$jogadores->posicao}}"
                           id="posicaoJogador" placeholder=Posição Jogador">
                </div>
                <div class="form-group">
                    <label for="timeJogador">Time Jogador</label>
                    <select class="custom-select mr-sm-2" name="timeJogador" value="{{$jogadores->time_id}}" id="timeJogador">
                        <option selected>Escolha o time do jogador...</option>
                        @foreach($times as $tim)
                            @if($tim->id === $jogadores->time_id )
                            <option selected value="{{$tim->id}}">{{$tim->nome}}</option>
                        @else
                            <option value="{{$tim->id}}">{{$tim->nome}}</option>
                        @endif
                    @endforeach
                </div>
                </select>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@endsection