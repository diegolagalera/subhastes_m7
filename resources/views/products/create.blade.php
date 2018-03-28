@extends("layouts.app");

@section("content")
<div class="container">
  <h1>Nou producte</h1>
  {{ Form::open(['url' => '/productes', 'method' => 'POST', 'files' => TRUE]) }}
  @csrf
  <div class="">

      <div class="form-group">
      {{Form::text('nom','',['class' =>'form-controller', 'placeholder'=>'Titulo...'])}}</div>
      <div class="form-group">
      {{Form::textarea('descripcio','',['class' =>'form-controller', 'placeholder'=>'Descripcio...'])}}</div>
      <div class="form-group">
      {{Form::textarea('caracteristiques','',['class' =>'form-controller', 'placeholder'=>'Caracteristiques...'])}}</div>

      <div class="form-group">
        <input id="myInput" type="text" placeholder="Search..">
        <table>
          <thead>
            <tr>
              <th>Nom</th>
              <th>Descripcio</th>
            </tr>
          </thead>
          <tbody id="myTable">
            @foreach ($categories as $cat)
              <tr>
                <td>{{Form::checkbox('categoria[]',$cat->id)}}</td>
                <td>{{$cat->nom}}</td>
                <td>{{$cat->descripcio}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="form-group">
      {{Form::file('imatge',['class' =>'form-controller'])}}</div>
      <div class="">
        <a href="{{url('/productes')}}">Tornar</a>
        <input type="submit" value="Crear" class="btn btn-success">
      </div>
  </div>
  {{ Form::close() }}
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
@endsection
