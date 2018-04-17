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
          @foreach($su as $s)
          @if($s->id_article==$e->id)
            <h3 style="text-align:center">{{$s->data}}</h3>
            <a href="{{ url('subhastes/'.$s->id.'') }}" class="btn btn-success">Crear Subhastes</a>

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



  </div>

<h1>Preparando la descarga</h1>
<h2 id='CuentaAtras'></h2>



@endsection
