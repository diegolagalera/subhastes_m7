{{-- \resources\views\users\edit.blade.php --}}

@extends('layouts.layoutf')

@section('title', '| Edit User')

@section('content')

<div class='col-lg-4 col-lg-offset-4'>

    <h1><i class='fa fa-money' id="preu"></i> <?php $q=Auth::user()->saldo; echo number_format($lic->preu,2, ",", ".");?></h1>
  <hr>


    <div class="form-group">

    </div>

    <div class="form-group">
    </div>


    <div class='form-group'>

    </div>

    <div class="form-group">

    </div>

    <div class="form-group">

    </div>
    @include('licitacio.pagar',['url' => 'licitacio/'.$lic->id, 'method'=> 'PATCH'])


</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

  var a =$("#money").text();
  a=a.replace(",",".");
  var b =$("#preu").text();
  b=b.replace(",",".");

  if(a>b){
    document.getElementById("pagar").disabled = true;
  }
});
</script>

@endsection
