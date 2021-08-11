<?php

namespace App\Http\Controllers;

use App\Models\Equipament;
use Illuminate\Http\Request;

class equipamentController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $equipament = Equipament::orderBy('name')->get();

    return view('equipament.index', ['equipament' => $equipament]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('equipament.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    Equipament::create($request->all());
    session()->flash('message', 'Usuário cadastrado com sucesso!');
    return redirect()->route('equipament.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Equipament  $equipament
   * @return \Illuminate\Http\Response
   */
  public function show(Equipament $equipament)
  {
    return view('equipament.show', ['equipament' => $equipament]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Equipament  $equipament
   * @return \Illuminate\Http\Response
   */
  public function edit(Equipament $equipament)
  {
    return view('equipament.edit', ['equipament' => $equipament]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Equipament  $equipament
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Equipament $equipament)
  {
    $equipament->fill($request->all());
    $equipament->save();

    session()->flash('message', 'Usuário atualizado com sucesso!');
    return redirect()->route('equipament.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Equipament  $equipament
   * @return \Illuminate\Http\Response
   */
  public function destroy(Equipament $equipament)
  {
    $equipament->delete();
    session()->flash('message', 'Usuário deletado com sucesso!');
    return redirect()->route('equipament.index');
  }
}
