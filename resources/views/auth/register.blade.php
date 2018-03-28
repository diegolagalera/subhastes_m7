@extends('layouts.layoutf')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                  {{ Form::open(array('url' => 'create')) }}

                  <div class="form-group">
                      {{ Form::label('name', 'Nom') }}
                      {{ Form::text('name', 'diego', array('class' => 'form-control')) }}
                  </div>

                  <div class="form-group">
                      {{ Form::label('surname', 'Cognom') }}
                      {{ Form::text('surname', 'martinez', array('class' => 'form-control')) }}
                  </div>

                  <div class="form-group">
                      {{ Form::label('dni', 'DNI') }}
                      {{ Form::text('dni', '47484339b', array('class' => 'form-control')) }}
                  </div>

                  <div class="form-group">
                      {{ Form::label('country', 'Pais') }}
                      {{ Form::text('country', 'spain', array('class' => 'form-control')) }}
                  </div>

                  <div class="form-group">
                      {{ Form::label('cp', 'CP') }}
                      {{ Form::text('cp', '43515', array('class' => 'form-control')) }}
                  </div>

                  <div class="form-group">
                      {{ Form::label('city', 'Ciutat') }}
                      {{ Form::text('city', 'La galera', array('class' => 'form-control')) }}
                  </div>

                  <div class="form-group">
                      {{ Form::label('tel', 'Tel') }}
                      {{ Form::text('tel', '977710343', array('class' => 'form-control')) }}
                  </div>

                  <div class="form-group">
                      {{ Form::label('email', 'Email') }}
                      {{ Form::email('email', 'diegolagalera_@hotmail.com', array('class' => 'form-control')) }}
                  </div>

                  <div class='form-group'>
                      @foreach ($roles as $role)
                          {{ Form::checkbox('roles[]',  $role->id ) }}
                          {{ Form::label($role->name, ucfirst($role->name)) }}<br>

                      @endforeach
                  </div>

                  <div class="form-group">
                      {{ Form::label('password', 'Password') }}<br>
                      {{ Form::password('password', array('class' => 'form-control')) }}

                  </div>

                  <div class="form-group">
                      {{ Form::label('password', 'Confirm Password') }}<br>
                      {{ Form::password('password_confirmation', array('class' => 'form-control')) }}

                  </div>

                  {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

                  {{ Form::close() }}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
