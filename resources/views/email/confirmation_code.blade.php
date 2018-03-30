<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h2>Hola {{$data['name']}}</h2>>
    <p>CODI DE CONFIRMACIO</p>
    <a href="{{url('register/verify/'.$data['confirmation_code'])}}"> confirmar cuenta</a>
</body>
</html>
