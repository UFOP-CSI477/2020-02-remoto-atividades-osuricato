<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $user = User::orderBy('name')->get();

    return view('user.index', ['user' => $user]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('user.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    User::create($request->all());
    session()->flash('message', 'Usuário cadastrado com sucesso!');
    return redirect()->route('user.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\User  $User
   * @return \Illuminate\Http\Response
   */
  public function show(User $user)
  {
    return view('user.show', ['user' => $user]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\User  $User
   * @return \Illuminate\Http\Response
   */
  public function edit(User $user)
  {
    return view('user.edit', ['user' => $user]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\User  $User
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, User $user)
  {
    $user->fill($request->all());
    $user->save();

    session()->flash('message', 'Usuário atualizado com sucesso!');
    return redirect()->route('user.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\User  $User
   * @return \Illuminate\Http\Response
   */
  public function destroy(User $user)
  {
    $user->delete();
    session()->flash('message', 'Usuário deletado com sucesso!');
    return redirect()->route('user.index');
  }
}
