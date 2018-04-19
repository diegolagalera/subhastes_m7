{{-- \resources\views\users\create.blade.php --}}
@extends('layouts.layout')

@section('title', '| Add User')

@section('content')

<div class='col-lg-4 col-lg-offset-4'>

    <h1><i class='fa fa-diamond'></i> Crear Subhasta</h1>
    <hr>
    {{ Form::model($subhasta, array('route' => array('subhastes.update', $subhasta->id), 'method' => 'PUT')) }}


    <div class="form-group">
        {{ Form::label('id_article', 'ID Article') }}
        {!! Form::select('id_article',$articles,$subhasta->id_article,['class'=>'form-control','required']) !!}
    </div>

    <div class="form-group">
        {{ Form::label('preu_venta', 'Preu') }}
        {{ Form::text('preu_venta', $subhasta->preu_venta, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('actiu', 'Actiu') }}
        {!! Form::select('actiu',['0','1'],null,['class'=>'form-control','required']) !!}
    </div>

    <div class="form-group">
        {{ Form::label('data', 'Data') }}
        {!! Form::date('data', '$subhasta->data',['class'=> 'form-control','required']) !!}
    </div>


<div class="form-group">
    {{ Form::submit('Actualitzar',['class' => 'btn btn-primary']) }}
</div></div>
    {{ Form::close() }}

</div>

@endsection
