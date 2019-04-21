<?php

namespace App\Http\Controllers;

use App\Time;
use App\Jogador;
use Illuminate\Http\Request;
use Laracsv;

class ControladorTime extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $times = Time::all();
        return view('times', compact('times'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novotime');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tim = new Time();
        $tim->nome = $request->input('nomeTimenomeTime');
        $tim->fundacao = $request->input('fundacaoTime');
        $tim->presidente = $request->input('presidenteTime');
        $tim->estadio = $request->input('estadioTime');
        $tim->cidade = $request->input('cidadeTime');
        $tim->save();
        return redirect('/times');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //return view('exportajogadores',compact('times','jogadores'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tim = Time::find($id);
        if (isset($tim)){
            return view('editartime', compact('tim'));
        }
        return redirect('/times');
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
        $tim = Time::find($id);
        if (isset($tim)){
            $tim->nome = $request->input('nomeTime');
            $tim->fundacao = $request->input('fundacaoTime');
            $tim->presidente = $request->input('presidenteTime');
            $tim->estadio = $request->input('estadioTime');
            $tim->cidade = $request->input('cidadeTime');
            $tim->save();
        }
        return redirect('/times');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tim = Time::find($id);
        if (isset($tim)){
            $tim->delete();
        }
        return redirect('/times');
    }

    public function exportcsv($id){

        $time = Time::find($id);
        $jog = Jogador::all()->where('time_id','=',$id);


        $csvExporter = new \Laracsv\Export();
        $csvExporter->build($jog, ['Nome', 'Idade','Cidade','Salário','Posição'])->download('Jogadores.csv');

    }public function exportTimesCSV(){

        $time = Time::all();
        $csvExporter = new \Laracsv\Export();
        $csvExporter->build($time, ['Nome', 'Fundação','Presidente','Estádio','Cidade'])->download('Times.csv');

    }
}
