

@extends('layouts.layoutf')

@section('title', '|as')

@section('content')

<div class='my-auto '>

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

</div>

@endsection
