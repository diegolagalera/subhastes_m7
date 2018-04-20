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
    <li><a href="/historial"><button type="button"  class="btn btn-outline-light btn-sm">Historial</button></a></li>
  </ul>
</nav>

<h1 style="text-align:center"><b>Historial</b></h1>

      <table style="width: 100%">
          <tr>
          <th>Article</th>
          <th>Guanyador</th>
          <th>Preu</th>
          <th>Lisitacions</th>
          <th>Veure</th>
        </tr>
        @foreach($subhasta as $su)
        <tr>
          <td><img src="/{{$su->imatge}}" height='60%'><br> {{$su->nom}}</td>
          <td>{{$su->name}}</td>
          <td><?php echo number_format($su->preu,2, ",", ".");?></td>
          <td>{{$su->apostes}}</td>
          <td><a href="/subhastes/{{$su->id_subhasta}}"><button class="btn btn-success">Veure</button></a></td>
        </tr>
        @endforeach
      </table>



@endsection
