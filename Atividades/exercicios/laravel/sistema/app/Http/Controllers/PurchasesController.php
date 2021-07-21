<?php

namespace App\Http\Controllers;

use App\Models\Purchases;
use App\Models\People;
use App\Models\Product;
use Illuminate\Http\Request;

class PurchasesController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $purchases = Purchases::orderBy('name')->get();

    return view('purchases.index', ['purchases' => $purchases]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $people = People::orderBy('name')->get();
    $product = Product::orderBy('name')->get();
    return view('purchases.create', ['people' => $people, 'product' => $product]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    Purchases::create($request->all());
    session()->flash('message', 'Compra realizada com sucesso!');
    return redirect()->route('purchases.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Purchases  $purchases
   * @return \Illuminate\Http\Response
   */
  public function show(Purchases $purchases)
  {
    return view('purchases.show', ['purchases' => $purchases]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Purchases  $purchases
   * @return \Illuminate\Http\Response
   */
  public function edit(Purchases $purchases)
  {
    $people = People::orderBy('name')->get();
    $product = Product::orderBy('name')->get();
    return view('purchases.edit', ['purchases' => $purchases, 'people' => $people, 'product' => $product]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Purchases  $purchases
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Purchases $purchases)
  {
    $purchases->fill($request->all());
    $purchases->save();

    session()->flash('message', 'Compra atualizada com sucesso!');
    return redirect()->route('purchases.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Purchases  $purchases
   * @return \Illuminate\Http\Response
   */
  public function destroy(Purchases $purchases)
  {
    $purchases->delete();
    session()->flash('message', 'Compra excluída com sucesso!');
    return redirect()->route('purchases.index');
  }
}
