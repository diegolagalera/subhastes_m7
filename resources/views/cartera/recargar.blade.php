@extends('layouts.layoutf')

@section('title', '| Producte')

@section('content')

<div class="row">
  <div class="col-md-4">{{$user->name}}</div>
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <div class="row text-right">
      <div class="col-md-8">Total: <strong>{{$user->saldo}}</strong></div>
    </div>
    <div class="row">
      @include('cartera.form')
    </div>
  </div>
</div>
<hr>
<div class="row">
    <div class="col-md-5  text-justify"></div>
    <div class="col-md-7 text-right mt-auto p-2">
      <a href="{{url('/subhastes')}}">Tornar</a>
    </div>
</div>
@endsection
