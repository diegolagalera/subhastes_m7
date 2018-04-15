@extends('layouts.layoutf')

@section('title', '| Add User')

@section('content')
<h1 style="text-align:center"><b>Subhastes</b></h1>

<div class="row">
  @foreach($ar as $a)

  @foreach($a as $e)

    <div class="col-md-4">
        <div class="panel panel-default">
          <p><h3 style="text-align:center">{{$e->nom}}</h3></p>
        </br>
        <div class="panel-body" style="text-align:center">
          <div style="height:250px;text-align:center;marging-left:50px">
            <img src="http://127.0.0.1:8000/{{$e->imatge}}" style="width:100%;height:100%">
          </div>
        </br>

        <div class="panel-footer" style="text-align: justify">
          <?php
           $a=0;
          ?>
          @foreach($su as $s)
          <?php
           $a = $a+1;
           echo $a;
          ?>
          @if($s->id_article==$e->id)

            <h3 style="text-align:center">{{$s->data}}</h3>
            <h2 id=<?php echo "a".$a; ?>></h2>
            <a href="{{ url('subhastes/'.$s->id.'') }}" class="btn btn-success">Crear Subhastes</a>

            <p>Dias<h4 name="day"></h4>Mes<h4 name="hour"></h4>Hora<h4></h4> Minutos<h4></h4>   </p>

          @endif
          @endforeach

        </div>

        </div>
      </br>

        <!-- <div class="panel-footer" style="text-align: justify">{{$e->caracteristiques}} </div> -->
      </div>

    </div>
  @endforeach
  @endforeach

  <form name="form">
  Tiempo que falta hasta el fin del año 2010.<br><br>
  <input type="text" size="5" class="form_input" name="year" disabled> años<br>
  <input type="text" size="5" class="form_input" name="month" disabled> meses<br>
  <input type="text" size="5" class="form_input" name="day" disabled> dias<br>
  <input type="text" size="5" class="form_input" name="hour" disabled> horas<br>
  <input type="text" size="5" class="form_input" name="minute" disabled> minutos<br>
  <input type="text" size="5" class="form_input" name="second" disabled> segundos<br>
  </form>

  </div>

<h1>Preparando la descarga</h1>
<h2 id='CuentaAtras'></h2>



@endsection
