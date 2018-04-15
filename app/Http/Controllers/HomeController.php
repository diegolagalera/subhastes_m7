<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\articles;
use App\Subhasta;
use App\Lisitacio;
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
        $this->middleware('auth');
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
}
