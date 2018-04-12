<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{

  public function index()
  {
      $categories = Categoria::all();
    //  dd($categories);

      return view("categoria.index",["categoria"=>$categories]);
  }

  public function create()
  {
      $categoria = new Categoria;
      return view("categoria.create",["categoria"=>$categoria]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      $categoria = new Categoria;
      $categoria->nom=$request->nom;
      $categoria->descripcio=$request->descripcio;

      if($categoria->save()){
          return redirect("/categories");
      }else{

          return view("categoria.create");
      }
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $categories = Categoria::all();
    $categoria = Categoria::find($id);
    return view("categoria.edit",["categoria"=>$categoria]);

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {

    $categoria = Categoria::find($id);
    $categoria->nom=$request->nom;
    $categoria->descripcio=$request->descripcio;

    if($categoria->save()){

        return redirect("/categories");
    }else{

        return view("categoria.edit");
    }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $categoria = Categoria::find($id);
      $categoria->deletcateart($id);
      Categoria::destroy($id);

      return redirect('/categories');
  }

}
