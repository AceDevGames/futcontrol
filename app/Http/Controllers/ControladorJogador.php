<?php

namespace App\Http\Controllers;

use App\Time;
use Illuminate\Http\Request;
use App\Jogador;

class ControladorJogador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $times = Time::all();
        $jogadores = Jogador::all();
        return view('jogadores', compact('times','jogadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $times = Time::all();

        return view('novojogador',compact('times'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jog = new Jogador();
        $jog->nome = $request->input('nomeJogador');
        $jog->idade = $request->input('idadeJogador');
        $jog->cidade = $request->input('cidadeJogador');
        $jog->salario = $request->input('salarioJogador');
        $jog->posicao = $request->input('posicaoJogador');
        $jog->time_id = $request->input('timeJogador');
        $jog->save();
        return redirect('/jogadores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $times = Time::all();
        $jogadores = Jogador::find($id);
        if (isset($jogadores)){
            return view('editarjogador', compact('jogadores','times'));
        }
        return redirect('/jogadores');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jog = Jogador::find($id);
        if (isset($jog)){
            $jog->nome = $request->input('nomeJogador');
            $jog->idade = $request->input('idadeJogador');
            $jog->cidade = $request->input('cidadeJogador');
            $jog->salario = $request->input('salarioJogador');
            $jog->posicao = $request->input('posicaoJogador');
            $jog->time_id = $request->input('timeJogador');
            $jog->save();
        }
        return redirect('/jogadores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jog = Jogador::find($id);
        if (isset($jog)){
            $jog->delete();
        }
        return redirect('/jogadores');
    }
}
