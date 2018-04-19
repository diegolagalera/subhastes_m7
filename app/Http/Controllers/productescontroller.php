<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\articles;
use App\Categoria;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
class productescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = articles::orderBy('id','ASC')->paginate(2);
        return view("products.index",["products"=>$articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new articles;
        $categories = Categoria::all();
        return view("products.create",["categories"=>$categories, "product"=>$product]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $r="images/noimg.png";
      if($request->file('imatge')!=null){
        //IMATGE
        $image = $request->file('imatge');
        $path = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('images');
        $image->move($destinationPath, $path);
        $r=(string)$request->root().'/images/'.''.$path;
        ///IMATGE
      }


        $product = new articles;
        $product->nom=$request->nom;
        $product->descripcio=$request->descripcio;
        $product->caracteristiques=$request->caracteristiques;
        $product->imatge=$r;

        if($product->save()){
          $product->afegircate($product->id,$request->categoria);
            return redirect("/productes");
        }else{

            return view("products.create");
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
      $articles = articles::find($id);
      return view("products.edit",["categories"=>$categories,"product"=>$articles]);

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


      $product = articles::find($id);
      $product->nom=$request->nom;
      $product->descripcio=$request->descripcio;
      $product->caracteristiques=$request->caracteristiques;
      //IMATGE
      if($request->file('imatge')!=null){
        $image = $request->file('imatge');
        $path = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('images');
        $image->move($destinationPath, $path);
        $r=(string)$request->root().'/images/'.''.$path;
        $product->imatge=$r;
      }
      ///IMATGE

      if($product->save()){
        $product->afegircate($product->id,$request->categoria);
          return redirect("/productes");
      }else{

          return view("products.edit");
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
        $product = articles::find($id);
        $product->deletartcate($id);
        articles::destroy($id);

        return redirect('/productes');
    }
}
