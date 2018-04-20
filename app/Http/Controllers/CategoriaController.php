<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Categoria;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
class CategoriaController extends Controller
{

  public function index()
  {
      $categories = Categoria::orderBy('id','ASC')->paginate(5);
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
    
    $su=DB::table('subhastes')
    ->join('categories_articles','subhastes.id_article','=','categories_articles.id_article')
    ->where([['categories_articles.id_categoria','=',$id],['subhastes.data','>',date('Y-m-j H:i:s')]])->get();

    $ar = collect();
    foreach ($su as $s) {
      $ar->push(DB::select('select * from articles where id = :id', ['id' => $s->id_article]));
    }
    $cat =categoria::find($id);
    return view('home1')->with('su', $su)->with('ar',$ar)->with('nom',$cat->nom);
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
