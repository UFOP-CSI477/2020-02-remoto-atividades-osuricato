<?php

namespace App\Http\Controllers;

use App\Models\Unidade;
use Illuminate\Http\Request;

class UnidadeController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $unidades = Unidade::orderBy('nome')->get();

    return view('unidades.index', ['unidades' => $unidades]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('unidades.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    Unidade::create($request->all());
    session()->flash('message', 'Unidade cadastrada com sucesso!');
    return redirect()->route('unidades.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Unidade
   * @return \Illuminate\Http\Response
   */
  public function show(Unidade $unidade)
  {
    return view('unidades.show', ['unidade' => $unidade]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Unidade
   * @return \Illuminate\Http\Response
   */
  public function edit(Unidade $unidade)
  {
    return view('unidades.edit', ['unidade' => $unidade]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Unidade
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Unidade $unidade)
  {
    $unidade->fill($request->all());
    $unidade->save();

    session()->flash('message', 'Unidade atualizada com sucesso!');
    return redirect()->route('unidades.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Unidade
   * @return \Illuminate\Http\Response
   */
  public function destroy(Unidade $unidade)
  {
    $unidade->delete();
    session()->flash('message', 'Unidade deletada com sucesso!');
    return redirect()->route('unidades.index');
  }
}
