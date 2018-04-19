<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subhasta;
use PDF;
use DB;

class PdfController extends Controller
{
    //
    public function index($id)
    {
      //dd($id);
      $data = DB::table('subhastes')->where('subhastes.id', '=', $id)->join('articles', 'subhastes.id_article', '=', 'articles.id')->get();

      //dd($data);
      $pdf = PDF::loadView('pdf.invoice', compact('data'));
      //return $pdf->download('invoice.pdf');
      //return view("pdf.invoice")->with(['data'=>$data]);
      return $pdf -> download('pdf.invoice.pdf');
    }

}
