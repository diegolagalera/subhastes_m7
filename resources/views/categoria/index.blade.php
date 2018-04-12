{{-- \resources\views\users\index.blade.php --}}
@extends('layouts.layout')

@section('title', '| Users')

@section('content')
<div class="col-lg-10 col-lg-offset-1">
    <h1><i class="fa fa-users"></i><h1>Categories</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <td></td>
          </tr>
        </thead>
        <tbody>
          @foreach($categoria as $categories)
            <tr>
              <td>{{$categories->id}}</td>
              <td>{{$categories->nom}}</td>
              <td>@include('categoria.delete',['categoria'=>$categories])
                <a href="{{ url('categories/'.$categories->id.'/edit') }}" class="btn btn-success">Editar</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <a href="{{ url('categories/create') }}" class="btn btn-success">Afegir categories</a>
    </div>
  <hr>
</div>
@endsection
