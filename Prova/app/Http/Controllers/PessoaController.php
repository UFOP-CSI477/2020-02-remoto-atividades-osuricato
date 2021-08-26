<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $pessoas = Pessoa::orderBy('nome')->get();

    return view('pessoas.index', ['pessoas' => $pessoas]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('pessoas.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    Pessoa::create($request->all());
    session()->flash('message', 'Pessoa cadastrada com sucesso!');
    return redirect()->route('pessoas.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Pessoa  $Pessoa
   * @return \Illuminate\Http\Response
   */
  public function show(Pessoa $pessoa)
  {
    return view('pessoas.show', ['pessoa' => $pessoa]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Pessoa  $Pessoa
   * @return \Illuminate\Http\Response
   */
  public function edit(Pessoa $pessoa)
  {
    return view('pessoas.edit', ['pessoa' => $pessoa]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Pessoa  $Pessoa
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Pessoa $pessoa)
  {
    $pessoa->fill($request->all());
    $pessoa->save();

    session()->flash('message', 'Pessoa atualizada com sucesso!');
    return redirect()->route('pessoas.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Pessoa  $Pessoa
   * @return \Illuminate\Http\Response
   */
  public function destroy(Pessoa $pessoa)
  {
    if (count($pessoa->registros) > 0) {
      session()->flash('message-failed', 'Existe(m) registro(s) dessa pessoa, portanto não pode ser deletada!');
      return redirect()->route('pessoas.index');
    }
    
    $pessoa->delete();
    session()->flash('message', 'Pessoa deletada com sucesso!');
    return redirect()->route('pessoas.index');
  }
}
