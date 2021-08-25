<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use App\Models\Pessoa;
use App\Models\Unidade;
use App\Models\Vacina;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $registros = Registro::orderByDesc('data')->get();

    return view('registros.index', ['registros' => $registros]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $pessoas = Pessoa::orderBy('nome')->get();
    $unidades = Unidade::orderBy('nome')->get();
    $vacinas = Vacina::orderBy('nome')->get();
    return view('registros.create', ['pessoas' => $pessoas, 'unidades' => $unidades, 'vacinas' => $vacinas]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    Registro::create($request->all());
    session()->flash('message', 'Registro realizado com sucesso!');
    return redirect()->route('registros.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Registro
   * @return \Illuminate\Http\Response
   */
  public function show(Registro $registro)
  {
    return view('registros.show', ['registro' => $registro]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Registro
   * @return \Illuminate\Http\Response
   */
  public function edit(Registro $registro)
  {
    $pessoas = Pessoa::orderBy('nome')->get();
    $unidades = Unidade::orderBy('nome')->get();
    $vacinas = Vacina::orderBy('nome')->get();
    return view('registros.edit', ['pessoas' => $pessoas, 'unidades' => $unidades, 'vacinas' => $vacinas]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Registro
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Registro $registro)
  {
    $registro->fill($request->all());
    $registro->save();

    session()->flash('message', 'Registro atualizado com sucesso!');
    return redirect()->route('registros.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Registro
   * @return \Illuminate\Http\Response
   */
  public function destroy(Registro $registro)
  {
    $registro->delete();
    session()->flash('message', 'Registro excluído com sucesso!');
    return redirect()->route('registros.index');
  }
}
