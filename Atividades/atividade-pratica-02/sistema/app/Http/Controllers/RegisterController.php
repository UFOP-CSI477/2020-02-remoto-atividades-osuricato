<?php

namespace App\Http\Controllers;

use App\Models\Register;
use App\Models\User;
use App\Models\Equipament;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $registers = Register::orderByDesc('limit_date')->get();

    return view('registers.index', ['registers' => $registers]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $users = User::orderBy('name')->get();
    $equipaments = Equipament::orderBy('name')->get();
    return view('registers.create', ['users' => $users, 'equipaments' => $equipaments]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    Register::create($request->all());
    session()->flash('message', 'Registro realizado com sucesso!');
    return redirect()->route('registers.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Register
   * @return \Illuminate\Http\Response
   */
  public function show(Register $register)
  {
    return view('registers.show', ['register' => $register]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Register
   * @return \Illuminate\Http\Response
   */
  public function edit(Register $register)
  {
    $users = User::orderBy('name')->get();
    $equipaments = Equipament::orderBy('name')->get();
    return view('registers.edit', ['register' => $register, 'users' => $users, 'equipaments' => $equipaments]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Register
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Register $register)
  {
    $register->fill($request->all());
    $register->save();

    session()->flash('message', 'Registro atualizado com sucesso!');
    return redirect()->route('registers.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Register
   * @return \Illuminate\Http\Response
   */
  public function destroy(Register $register)
  {
    $register->delete();
    session()->flash('message', 'Registro excluído com sucesso!');
    return redirect()->route('registers.index');
  }
}
