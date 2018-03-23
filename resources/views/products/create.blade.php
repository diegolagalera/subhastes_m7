@extends("layouts.app");

@section("content")
<div class="container">
  <h1>Nou producte</h1>
  {!! Form::open(['url' => '/products', 'method' => 'POST']) !!}
  <div class="">

      <div class="form-group">
      {{Form::text('nom','',['class' =>'form-controller', 'placeholder'=>'Titulo...'])}}</div>
      <div class="form-group">
      {{Form::textarea('descripcio','',['class' =>'form-controller', 'placeholder'=>'Descripcio...'])}}</div>
      <div class="form-group">
      {{Form::textarea('Caracteristiques','',['class' =>'form-controller', 'placeholder'=>'Caracteristiques...'])}}</div>
      <div class="">
        <a href="{{url('/productes')}}">Tornar</a>
        <input type="submit" value="Crear" class="btn btn-success">
      </div>
  </div>
  {!! Form::close() !!}
</div>
@endsection
