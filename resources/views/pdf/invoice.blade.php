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

<h1 class="text-center"> - Subhasta - </h1> <br/>


<div class="container" style="text-align: justify">

  @foreach($data as $a)
    <div class="row">
      <div class="col-md-10 mx-auto">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Camp</th>
              <th class="text-right">Valor</th>
            </tr>
          </thead>
          <tbody>

                <tr>
                  <td>Nom artícle</td>
                  <td class="text-right">{{$data[0]->nom}}</td>
                </tr>
                <tr>
                  <td>Descripció</td>
                  <td class="text-right">{{$data[0]->descripcio}}</td>
                </tr>
                <tr>
                  <td>Característiques</td>
                  <td class="text-right">{{$data[0]->caracteristiques}}</td>
                </tr>
                <tr>
                  <td>Preu de venta</td>
                  <td class="text-right">{{$data[0]->preu_venta}}</td>
                </tr>
                <tr>
                  <td>Data inici subhasta</td>
                  <td class="text-right">{{$data[0]->created_at}}</td>
                </tr>
                <tr>
                  <td>Data finalització subhasta</td>
                  <td class="text-right">{{$data[0]->data}}</td>
                </tr>


          </tbody>
        </table>
      </div>
    </div>
  @endforeach

</div>





</body>

</html>
