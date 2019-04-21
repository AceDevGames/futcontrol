@extends('layout.app',["current"=>"times"])
@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Lista de Times</h5>
        @if(count($times) > 0)
        <table class="table table-ordered table-hover">
            <thead>
            <tr>
                <th>Código</th>
                <th>Nome do Time</th>
                <th>Data de Fundação</th>
                <th>Presidente</th>
                <th>Estádio</th>
                <th>Cidade</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($times as $tim)
                <tr>
                    <td>{{$tim->id}}</td>
                    <td>{{$tim->nome}}</td>
                    <td>{{$tim->fundacao}}</td>
                    <td>{{$tim->presidente}}</td>
                    <td>{{$tim->estadio}}</td>
                    <td>{{$tim->cidade}}</td>
                    <td>
                        <a href="/times/expjogadores/{{$tim->id}}" class="btn btn-sm btn-success" >Exportar jogadores</a>
                        <a href="/times/editar/{{$tim->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/times/apagar/{{$tim->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
              </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
    <div class="card-footer">
        <a href="/times/novo" class="btn btn-sm btn-primary" role="button">Novo time</a>
        <!--a href="/times/exportartimes" class="btn btn-sm btn-success" role="button">Exportar times</a-->

    </div>
</div>
@endsection











