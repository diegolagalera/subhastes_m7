@extends('layouts.layoutf')

@section('title', '| Producte')

@section('content')

<div class="row">
    <div class="col-md-1 col-md-push-1">

    </div>
      <p><h2 id="dias">00</h2> dias </p>
      <h2 id="horas">00</h2>
      <span>horas</span>
      <h2 id="min">00</h2>
      <span>min</span>
      <h2 id="seg">00</h2>
      <span>seg</span>
</div>
<div class="row">
  <div class="col-md-4"><img class="imgproduct" width="350px" height="200px" src="http://127.0.0.1:8000/{{$articles->imatge}}"></div>
  <div class="col-md-4">{{$articles->descripcio}}
    <p id="dataaa">{{$su->data}}</p>

  </div>
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

<script type="text/javascript">
var data=document.getElementById("dataaa").innerHTML;

function getTime() {
  now = new Date();
  fecha = new Date(data);

  days = (fecha - now) / 1000 / 60 / 60 / 24;
  daysRound = Math.floor(days);
  hours = (fecha - now) / 1000 / 60 / 60 - (24 * daysRound);
  hoursRound = Math.floor(hours);
  minutes = (fecha - now) / 1000 /60 - (24 * 60 * daysRound) - (60 * hoursRound);
  minutesRound = Math.floor(minutes);
  seconds = (fecha - now) / 1000 - (24 * 60 * 60 * daysRound) - (60 * 60 * hoursRound) - (60 * minutesRound);
  secondsRound = Math.round(seconds);
  if (daysRound <= "-1") {
    //   IMPORTANTE  //
    //Si el conteo regresivo del script el valor de los días es mayor a -1 se para el script,
    //ya que la fecha esperada se a cumplido, es necesaria este línea de código ya que si no se pone
    //seguiria el conteo regresívo pero en valores negativos.
  }
  else{
    document.getElementById('dias').innerHTML = daysRound;
    document.getElementById('horas').innerHTML = hoursRound;
    document.getElementById('min').innerHTML = minutesRound;
    document.getElementById('seg').innerHTML = secondsRound;
  }
  newtime = window.setTimeout("getTime();", 1000);
}
</script>

@endsection
