<?php

namespace App\Http\Controllers;

use App\Sala;
use App\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class SalaController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */

  public function __construct(){
    $this->middleware('auth');
  }

  public function index()
  {

    return view('salas.index', [
      $salas = Sala::orderBy('nome')->get()
    ], compact('salas'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('salas.create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $rules = array(
      'nome' => 'required'
    );
    $messages = [
      'nome.required'    => 'Favor inserir o nome da sala.'
    ];
    $validator = Validator::make(request()->all(), $rules, $messages);
    // process the login
    if ($validator->fails()) {
      return redirect('salas/adicionar')
      ->withErrors($validator);
    }
    Sala::create([
      'nome' => request('nome')
    ]);
    return redirect('/salas');
  }

  /**
  * Display the specified resource.
  *
  * @param  \App\Sala  $sala
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    return view('salas.show', [
      $sala = Sala::where('id', $id)->firstOrFail(),
      $horarios = Reserva::where('sala_id', $id)->get()
    ], compact('sala', 'horarios'));
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Sala  $sala
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    return view('salas.edit', [
      $sala = Sala::where('id', $id)->firstOrFail()
    ], compact('sala'));
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Sala  $sala
  * @return \Illuminate\Http\Response
  */
  public function update($id)
  {
    $rules = array(
      'nome' => 'required'
    );
    $messages = [
      'nome.required'    => 'Favor inserir o nome da sala.'
    ];
    $validator = Validator::make(request()->all(), $rules, $messages);
    // process the login
    if ($validator->fails()) {
      return redirect('salas/'. $id . '/editar')
      ->withErrors($validator);
    }
    $sala = Sala::where('id', $id)->firstOrFail();
    $sala->nome = request()->get('nome');
    $sala->save();
    return redirect('/salas/'. $id);
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Sala  $sala
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    Sala::destroy($id);
    return redirect('salas');
  }
}
