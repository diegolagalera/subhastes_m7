{{-- \resources\views\users\create.blade.php --}}
@extends('layouts.layout')

@section('title', '| Add User')

@section('content')

<div class='col-lg-4 col-lg-offset-4'>

    <h1><i class='fa fa-diamond'></i> Crear Subhasta</h1>
    <hr>
    {!! Form::open(['route'=>'subhastes.store','method'=>'POST'])!!}

    <div class="form-group">
        {{ Form::label('id_article', 'ID Article') }}
        {!! Form::select('id_article',$articles,null,['class'=>'form-control','required']) !!}
    </div>

    <div class="form-group">
        {{ Form::label('preu_venta', 'Preu') }}
        {{ Form::text('preu_venta', '', array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('actiu', 'Actiu') }}
        {!! Form::select('actiu',['1','0'],null,['class'=>'form-control','required']) !!}
    </div>

    <div class="form-group">
        {{ Form::label('data', 'Data') }}
        <input id="data" name="data" type="datetime-local" class="form-control" required>
        <!-- {!! Form::dateTime('data', '',['class'=> 'form-control','required']) !!} -->
    </div>
    <div class="form-group">
      {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    </div>
    </div>


    {{ Form::close() }}

</div>

@endsection
