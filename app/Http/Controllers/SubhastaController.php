<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\articles;
use App\Subhasta;
use App\Lisitacio;
use DB;
class SubhastaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $su = Subhasta::all();
      foreach ($su as $c) {
        $c->id_article = $c->id_article()->nom;
      }
      return view('subhasta.index')->with('su', $su);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $article = articles::orderBy('id','ASC')->pluck('nom','id')->toArray();
      //dd($article);
      return view('subhasta.create')->with("articles",$article);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $subhasta = new Subhasta($request->all());
      $subhasta->save();
      return redirect('subhastes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $lic = DB::table('licitacions')->where('id_subhasta', $id)->count();

      $su = Subhasta::find($id);
      $articles = articles::find($su->id_article);
      
      return view("subhasta.show",["su"=>$su,"licitacions"=>$lic,"articles"=>$articles]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $subhasta=Subhasta::find($id);
      $article = articles::orderBy('id','ASC')->pluck('nom','id')->toArray();
      return view('subhasta.editar')->with('subhasta',$subhasta)->with("articles",$article);

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
      $subhasta=Subhasta::find($id);
      $subhasta->fill($request->all());
      $subhasta->save();
      return redirect('subhastes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $subhasta=Subhasta::find($id);
      $subhasta->delete();
      return redirect('subhastes');

    }
}
