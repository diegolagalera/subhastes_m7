@extends('layouts.layoutf')

@section('title', '| Producte')

@section('content')

<div class="row">
  <div class="col-md-4"><img class="imgproduct" width="350px" height="200px" src="http://127.0.0.1:8000/{{$articles->imatge}}"></div>
  <div class="col-md-4">{{$articles->descripcio}}</div>
  <div class="col-md-4">
    <div class="row text-right">
      <div class="col-md-8">Licitacions: <strong>{{$licitacions}}</strong></div>
    </div>
    <div class="row">
      @include('licitacio.form',[ 'url'=>'/licitacio','id'=>$su->id,'method' => 'POST'])
    </div>
  </div>
</div>
<hr>
<div class="row">
    <div class="col-md-5  text-justify">{{$articles->caracteristiques}}</div>
    <div class="col-md-7 text-right mt-auto p-2">
      <a href="{{url('/subhastes')}}">Tornar</a>
    </div>
</div>
@endsection
