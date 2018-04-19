@extends('layouts.layoutf')

@section('title', '| Add User')

@section('content')
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="/">Totes</a></li>
    <li class="page-item"><a class="page-link" href="/categories/1">Informàtica</a></li>
    <li class="page-item"><a class="page-link" href="/categories/2">Fotografia</a></li>
    <li class="page-item"><a class="page-link" href="/categories/3">Consoles i jocs</a></li>
    <li class="page-item"><a class="page-link" href="/categories/4">Imatge i so</a></li>
    <li class="page-item"><a class="page-link" href="/categories/5">Telefonia</a></li>
    <li class="page-item"><a class="page-link" href="/categories/6">Gran electrodomèstic</a></li>
    <li class="page-item"><a class="page-link" href="/categories/7">Petit electrodomèstic</a></li>
  </ul>
</nav>
<h1 style="text-align:center"><b>{{$nom}}</b></h1>

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
            <a href="{{ url('subhastes/'.$s->id.'') }}" class="btn btn-success">Lisitació</a>

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

<h2 id='CuentaAtras'></h2>



@endsection
