<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $people = People::orderBy('name')->get();

    return view('people.index', ['people' => $people]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('people.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    People::create($request->all());
    session()->flash('message', 'Pessoa cadastrada com sucesso!');
    return redirect()->route('people.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\People  $people
   * @return \Illuminate\Http\Response
   */
  public function show(People $people)
  {
    return view('people.show', ['people' => $people]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\People  $people
   * @return \Illuminate\Http\Response
   */
  public function edit(People $people)
  {
    return view('people.edit', ['people' => $people]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\People  $people
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, People $people)
  {
    $people->fill($request->all());
    $people->save();

    session()->flash('message', 'Pessoa atualizada com sucesso!');
    return redirect()->route('people.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\People  $people
   * @return \Illuminate\Http\Response
   */
  public function destroy(People $people)
  {
    $people->delete();
    session()->flash('message', 'Pessoa excluída com sucesso!');
    return redirect()->route('people.index');
  }
}
