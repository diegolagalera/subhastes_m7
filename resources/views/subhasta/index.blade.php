{{-- \resources\views\users\index.blade.php --}}
@extends('layouts.layout')

@section('title', '| Users')

@section('content')

<div class="col-lg-10 col-lg-offset-1">
    <!-- <h1><i class="fa fa-users"></i> User Administration <a href="{{ url('roles/index') }}" class="btn btn-default pull-right">Roles</a>
    <a href="{{ url('permissions/index') }}" class="btn btn-default pull-right">Permissions</a></h1>
    <hr> -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom article</th>
                    <th>Preu</th>
                    <th>Estat</th>
                    <th>Data</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($su as $subhasta)
                <tr>

                    <td>{{ $subhasta->id }}</td>
                    <td>{{ $subhasta->id_article }}</td>
                    <td>{{ $subhasta->actiu()}}</td>
                    <td>{{ $subhasta->data->format('F d, Y h:ia') }}</td>
                    <td>
                    <a href="{{ url('users/edit', $user->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <!-- <a href="{{ url('users/create') }}" class="btn btn-success">Add User</a> -->

</div>

@endsection
