

@extends('layouts.layoutf')

@section('title', '|as')

@section('content')

<div class='my-auto' onload="sd()">

    <h1><i class='fa fa-user'></i> User</h1>
    <hr>
    <div class="form-group">
  <strong>Nom : </strong> {{$user->name}}

    </div>

    <div class="form-group">
    <strong>Cognom :</strong>  {{$user->surname}}
    </div>

    <div class="form-group">
      <strong>DNI : </strong>  {{$user->dni}}
    </div>

    <div class="form-group">
      <strong>Població : </strong>  {{$user->country}}
    </div>

    <div class="form-group">
      <strong>Codi postal : </strong>  {{$user->cp}}
    </div>

    <div class="form-group">
      <strong>Ciutat : </strong>  {{$user->city}}
    </div>

    <div class="form-group">
      <strong>Telefon : </strong>  {{$user->tel}}
    </div>

    <div class="form-group">
      <strong>Email : </strong>  {{$user->email}}
    </div>
    <hr>
    <div class="row">
      <div class="col-md-9 mt-auto p-0">
        <a href="{{ url('/users/'.$user->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
      </div>
      <div class="col-md-2 mt-auto p-0">
        <a href="{{ url('/recargar', $user->id) }}" class="btn btn-success pull-left" style="margin-right: 3px;"><i class="fa fa-money"></i> Recargar</a>
      </div>
    </div>
    <hr>
    <h1><i class='fa fa-diamond'></i> Subhastes guanyades</h1>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cercar subhastes..." title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th>Article</th>
    <th>Subhasta finalitzada</th>
    <th>Preu</th>
    <th>Comprar</th>
  </tr>
  @foreach ($subhasta as $sub)
    <tr>
      <td><img src="/{{$sub->imatge}}" height="40%">{{$sub->nom}}</td>
      <td>{{$sub->data}}</td>
      <td >{{$sub->preu}}</td>
      <td>
        <a href="{{ url('licitacio/'.$sub->licid) }}" class="btn btn-success">Editar</a>

      </td>
    </tr>
    @endforeach
</table>

</div>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>

@endsection
