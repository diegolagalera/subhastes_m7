{{-- \resources\views\users\index.blade.php --}}
@extends('layouts.layout')

@section('title', '| Users')

@section('content')
<div class="col-lg-10 col-lg-offset-1">
    <h1><i class="fa fa-users"></i><h1>Editar Categoria</h1>

  <hr>
  <div class="table-responsive">
    @include('categoria.form',['categoria'=>$categoria, 'url' => '/categories/'.$categoria->id, 'method'=> 'PATCH'])
</div>
</div>
@endsection
