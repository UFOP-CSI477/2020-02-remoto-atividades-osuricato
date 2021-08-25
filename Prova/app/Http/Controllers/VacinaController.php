<?php

namespace App\Http\Controllers;

use App\Models\Vacina;
use Illuminate\Http\Request;

class VacinaController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $vacinas = Vacina::orderBy('nome')->get();

    return view('vacinas.index', ['vacinas' => $vacinas]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('vacinas.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    Vacina::create($request->all());
    session()->flash('message', 'Vacina cadastrada com sucesso!');
    return redirect()->route('vacinas.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Vacina
   * @return \Illuminate\Http\Response
   */
  public function show(Vacina $vacina)
  {
    return view('vacinas.show', ['vacina' => $vacina]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Vacina
   * @return \Illuminate\Http\Response
   */
  public function edit(Vacina $vacina)
  {
    return view('vacinas.edit', ['vacina' => $vacina]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Vacina
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Vacina $vacina)
  {
    $vacina->fill($request->all());
    $vacina->save();

    session()->flash('message', 'Vacina atualizada com sucesso!');
    return redirect()->route('vacinas.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Vacina
   * @return \Illuminate\Http\Response
   */
  public function destroy(Vacina $vacina)
  {
    $vacina->delete();
    session()->flash('message', 'Vacina deletada com sucesso!');
    return redirect()->route('vacinas.index');
  }
}
