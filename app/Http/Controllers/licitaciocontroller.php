<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lisitacio;
use App\User;
use Illuminate\Support\Facades\Auth;

class licitaciocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lic = new Lisitacio();
        $lic->preu=$request->preu;
        $lic->id_usuari=Auth::user()->id;
        $lic->id_subhasta=$request->subhasta;
        $lic->temps= date('Y-m-j H:i:s');
        $lic->guanyador=0;

        if($lic->save()){
          $user =  User::find(Auth::user()->id);
          if($user->saldo>0.5){
            $user->saldo= $user->saldo-0.5;
            $user->save();
          }
            return redirect($request->url);
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
      $lic= Lisitacio::find($id);
      return view("licitacio.show",["lic"=>$lic]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $lic= Lisitacio::find($id);
        $lic->guanyador=2;
        if($lic->save()){
          $user =  User::find(Auth::user()->id);
          if($user->saldo<$lic->preu){
            return redirect('/licitacio/'.$lic->id);
          }
          $user->saldo= $user->saldo-$lic->preu;
          if($user->save()){
            return redirect('/users/'.$user->id);
          }
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
        //
    }
}
