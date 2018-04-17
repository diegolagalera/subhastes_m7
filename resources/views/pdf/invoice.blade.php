<html>
<head>
</head>

<body>

<h1> - Subhasta - </h1>


@foreach ($users as $user)
    <p>This is user {{ $user->id }}</p>
@endforeach


<h2>{{$data->preu_venta}}</h2>
<h2>{{$data->actiu}}</h2>
<h2>{{$data->data}}</h2>
<h2>{{$data->created_at}}</h2>
<h2>{{$data->updated_at}}</h2>




</body>

</html>
