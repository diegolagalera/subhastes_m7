{{-- \resources\views\users\create.blade.php --}}
@extends('layouts.layoutf')

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
        {{ Form::text('actiu', '', array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('data', 'Data') }}
        {!! Form::date('data', '',['class'=> 'form-control','required']) !!}
    </div>

    </div>

    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@endsection
