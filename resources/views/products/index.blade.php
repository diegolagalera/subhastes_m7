{{-- \resources\views\users\index.blade.php --}}
@extends('layouts.layout')

@section('title', '| Users')

@section('content')

<div class="col-lg-10 col-lg-offset-1">
    <h1><i class="fa fa-users"></i><h1>Productes</h1>

  <hr>
  <div class="table-responsive">
      <table id="example"  class="table table-bordered table-striped">
      <thead>
        <tr>
          <td></td>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
          <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->nom}}</td>
            <td>{{$product->descripcio}}</td>
            <td>{{$product->caracteristiques}}</td>
            <td><img class="imgproduct" width="80%" src="{{$product->imatge}}"></td>
            <td>@include('products.delete',['product'=>$product])
              <a href="{{ url('productes/'.$product->id.'/edit') }}" class="btn btn-success">Editar</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <a href="{{ url('productes/create') }}" class="btn btn-success">Afegir producte</a>

  </div>
</div>
@endsection
