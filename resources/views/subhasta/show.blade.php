@extends('layouts.layoutf')

@section('title', '| Producte')

@section('content')

<div class="row">
  <div class="col-md-4"><img class="imgproduct" width="350px" height="200px" src="http://127.0.0.1:8000/{{$articles->imatge}}"></div>
  <div class="col-md-4">{{$articles->descripcio}}</div>
  <div class="col-md-4">
    <div class="row text-right">
      <div class="col-md-8 font-weight-bold">Licitacions {{$licitacions}}</div>
    </div>
    <div class="row">
      <div class="col-md-0"><input type="number"></input></div>
      <div class="col-md-2"><button>pujar</button></div>
    </div>
  </div>
</div>
<hr>
<div class="row">
    <div class="col-md-6 text-justify">{{$articles->caracteristiques}}</div>
</div>
@endsection
