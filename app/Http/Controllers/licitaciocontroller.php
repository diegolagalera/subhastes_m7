<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
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

      /*Si no hi ha cap aposta eres l'actual guanyador*/
      $consulta = DB::table('licitacions')->where('id_subhasta', $request->subhasta)->count();
      if($consulta==0){
        $lic->guanyador=2;
      }else{

        /*Si ningu ha apostat el mateix preu*/
        $consulta = DB::table('licitacions')->where([['id_subhasta', $request->subhasta],['preu',$request->preu]])->count();
        if($consulta==0){

          /*Si el preu que has apostat es més alt que el guanyador participes per si li anula algu altre
          o tu mateix*/
          $consulta = DB::table('licitacions')->where([['id_subhasta', $request->subhasta],['guanyador',2]])->orderBy('preu','ASC')->take(1)->get();
          if(!$consulta->isEmpty()){
            if(($consulta[0]->preu)<($request->preu)){
              $lic->guanyador=1;
              /*Si no vol dir que el teu preu es el mes baix i per aixo ets l'actual guanyador*/
            }else{
                $new = Lisitacio::find($consulta[0]->id);
                $new->guanyador=1;
                $lic->guanyador=2;
                $new->save();
            }
          }else{
            $lic->guanyador=2;
          }

        }else{

          /*Si sols hi ha un amb el mateix preu es canvien els dos valors del guanyador a 9
          perque s'anulen entre ells*/
          $consulta = DB::table('licitacions')->where([['id_subhasta', $request->subhasta],['preu',$request->preu]])->get();
          if($consulta[0]->guanyador==1 || $consulta[0]->guanyador==2){
            $new = Lisitacio::find($consulta[0]->id);
            $new->guanyador=9;
            $lic->guanyador=9;
            $new->save();
            /*Si ens quedem sense guanyador hem de trobar-ne un de nou*/
            if($consulta[0]->guanyador==2){
              $consulta = DB::table('licitacions')->where([['id_subhasta', $request->subhasta],['guanyador',1]])->orderBy('preu','ASC')->take(1)->get();
              if(!$consulta->isEmpty()){
                $new2= Lisitacio::find($consulta[0]->id);
                $new2->guanyador=2;
                $new2->save();
              }
            }
          }
          /*Si no vol dir que l'aposta ja estava anulada i sols s'anula la nova aposta*/
          else{
            $lic->guanyador=9;
          }
        }
      }

        $lic->preu=$request->preu;
        $lic->id_usuari=Auth::user()->id;
        $lic->id_subhasta=$request->subhasta;
        $lic->temps= date('Y-m-j H:i:s');


        if($lic->save()){
          $user =  User::find(Auth::user()->id);
          if($user->saldo>=0.5){
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
        $lic->guanyador=3;
        if($lic->save()){
          $user =  User::find(Auth::user()->id);
          if($user->saldo<$lic->preu){
            return redirect('/licitacio/'.$lic->id);
          }
          $user->saldo= $user->saldo-$lic->preu;
          if($user->save()){
            return redirect('/'.$user->id);
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
