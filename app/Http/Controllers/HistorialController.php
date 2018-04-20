<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HistorialController extends Controller
{

  public function index()
  {
    $subhasta=DB::select('SELECT *,
    (SELECT COUNT(*) FROM licitacions WHERE id_subhasta=subhastes.id)AS apostes
    FROM subhastes
    LEFT JOIN articles
    ON subhastes.id_article=articles.id
    LEFT JOIN licitacions
    ON subhastes.id = licitacions.id_subhasta
    LEFT JOIN users
    ON licitacions.id_usuari=users.id
    WHERE licitacions.guanyador BETWEEN 2 AND 3
    AND data<\''.date('Y-m-j H:i:s').'\'
    ORDER BY data');

    return view('home2')->with('subhasta', $subhasta);
  }
}
