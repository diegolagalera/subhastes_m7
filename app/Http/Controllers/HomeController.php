<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\articles;
use App\Subhasta;
use App\Lisitacio;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $su = Subhasta::all();
      $su=DB::select('select * from subhastes where actiu =1');
      // foreach ($su as $c) {
      //   $c->id_article = $c->id_article()->nom;
      // }

      $ar = collect();
      foreach ($su as $s) {
        $ar->push(DB::select('select * from articles where id = :id', ['id' => $s->id_article]));
      }


      // $results = DB::select('select * from articles where id = :id', ['id' => $su->id_article]);
      // $article = articles::orderBy('id','ASC');
      // $ar=new articles(DB::select('select * from articles where id = :id', ['id' => $s->id_article]));




      return view('home1')->with('su', $su)->with('ar',$ar);
    }
    public function index1()
    {
        return view('layouts.layout');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($id) {
         $user = User::find($id);

        $subhasta = DB::table('licitacions')->select(
          'licitacions.id as licid','licitacions.*','subhastes.*','articles.*')
               ->where([
                 ['id_usuari', '=', $id],
                 ['guanyador', '=', '1']
                 ])->join('subhastes', 'subhastes.id', '=', 'licitacions.id_subhasta')
                 ->join('articles', 'articles.id', '=', 'subhastes.id_article')
                ->get();
         return view("users.show",["user"=>$user,"subhasta"=>$subhasta]);
     }
}
