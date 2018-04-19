<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>

<body>

<h1> - Subhasta - </h1>


<div class="container" style="text-align: justify">
  @foreach($data as $a)
    <div class="row">
      <div class="col-md-10 mx-auto">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Campo</th>
              <th class="text-right">Valor</th>
            </tr>
          </thead>
          <tbody>
            @foreach($a as $s => $valor)
              @if(strstr($s, 'imatge') == false && strstr($s, 'id') == false && strstr($s, 'actiu') == false)
              <tr>
                <td>{{$s}}</td>
                <td class="text-right">{{$valor}}</td>
              </tr>
              @endif
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  @endforeach

</div>





</body>

</html>
