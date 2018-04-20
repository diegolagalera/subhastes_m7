

@extends('layouts.layoutf')

@section('title', '|as')

@section('content')

<div class='my-auto'>

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
    <h2><i class='fa fa-diamond'></i> Subhastes guanyades</h2>

<input type="text" id="myInput1" onkeyup="myFunction1()" placeholder="Cercar subhastes..." title="Type in a name">
<table id="myTable1">
  <tr class="header">
    <th>Article</th>
    <th>Subhasta finalitzada</th>
    <th>Preu</th>
    <th>Comprar</th>
  </tr>
  @foreach ($subhasta as $sub)
    <tr>
      <td><img src="/{{$sub->imatge}}" height="20%">{{$sub->nom}}</td>
      <td>{{$sub->data}}</td>
      <td ><?php echo number_format($sub->preu,2, ",", ".");?></td>
      <td>
        <a href="{{ url('licitacio/'.$sub->licid) }}" class="btn btn-success">Comprar</a>

      </td>
    </tr>
    @endforeach
</table>
<h2><i class='fa fa-diamond'></i> Subhastes Comprades</h2>
<input type="text" id="myInput2" onkeyup="myFunction2()" placeholder="Cercar subhastes..." title="Type in a name">
<table id="myTable2">
  <tr class="header">
    <th>Article</th>
    <th>Subhasta finalitzada</th>
    <th>Preu</th>
    <th>Veure</th>
    <th>pdf</th>
  </tr>
  @foreach ($compres as $comp)
    <tr>
      <td><img src="/{{$comp->imatge}}" height="20%">{{$comp->nom}}</td>
      <td>{{$comp->data}}</td>
      <td><?php echo number_format($comp->preu,2, ",", ".");?></td>
      <td>
        <a href="{{ url('subhastes/'.$comp->id_subhasta) }}" class="btn btn-success">Veure</a>
        </td>
        <td>
        <a href="/pdf/{{$comp->id}}"><i style="font-size:30px;" class="fa fa-file-pdf-o "></i></a>
      </td>
    </tr>
    @endforeach
</table>
</div>
<div class="row">
    <div class="col-md-5  text-justify"></div>
    <div class="col-md-7 text-right mt-auto p-2">
      <a href="{{url('/')}}">Tornar</a>
    </div>
</div>

<script>
function myFunction1() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable1");
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
function myFunction2() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable2");
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
    #myInput1,#myInput2 {
      background-image: url('/css/searchicon.png');
      background-position: 10px 10px;
      background-repeat: no-repeat;
      width: 100%;
      font-size: 16px;
      padding: 12px 20px 12px 40px;
      border: 1px solid #ddd;
      margin-bottom: 12px;
    }

    #myTable1,#myTable2 {
      border-collapse: collapse;
      width: 100%;
      border: 1px solid #ddd;
      font-size: 18px;
    }

    #myTable1 th, #myTable1 td ,#myTable2 th, #myTable2 td {
      text-align: left;
      padding: 12px;
    }

    #myTable1 tr,#myTable2 tr {
      border-bottom: 1px solid #ddd;
    }

    #myTable1 tr.header, #myTable2 tr.header, #myTable1 tr:hover, #myTable2 tr:hover {
      background-color: #f1f1f1;
    }
    </style>

    @endsection
