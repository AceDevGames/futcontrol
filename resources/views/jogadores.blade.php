@extends('layout.app',["current"=>"jogadores"])
@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Lista de Jogadores</h5>
            @if(count($jogadores) > 0)
                <table class="table table-ordered table-hover">
                    <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome do Jogador</th>
                        <th>Idade</th>
                        <th>Cidade</th>
                        <th>Salário</th>
                        <th>Posição</th>
                        <th>Time</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($jogadores as $jog)
                        <tr>
                            <td>{{$jog->id}}</td>
                            <td>{{$jog->nome}}</td>
                            <td>{{$jog->idade}}</td>
                            <td>{{$jog->cidade}}</td>
                            <td>{{$jog->salario}}</td>
                            <td>{{$jog->posicao}}</td>
                            <td>
                                @foreach($times as $tim)
                                    @if( $tim->id === $jog->time_id )
                                        {{$tim->nome}}
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                <a href="/jogadores/editar/{{$jog->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/jogadores/apagar/{{$jog->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        <div class="card-footer">
            <a href="/jogadores/novo" class="btn btn-sm btn-primary" role="button">Novo jogador</a>
        </div>
    </div>
@endsection