{{ Form::open(['url' => $url, 'method' => $method, 'files' => TRUE]) }}
@csrf
<div class="" style="text-align: center;">

    <div class="form-group">
    {{Form::text('nom',$product->nom,['class' =>'form-controller', 'placeholder'=>'Titulo...'])}}</div>
    <div class="form-group">
    {{Form::textarea('descripcio',$product->descripcio,['class' =>'form-controller', 'placeholder'=>'Descripcio...'])}}</div>
    <div class="form-group">
    {{Form::textarea('caracteristiques',$product->caracteristiques,['class' =>'form-controller', 'placeholder'=>'Caracteristiques...'])}}</div>

    <div class="form-group" >
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
      <input type="submit" value="Enviar" class="btn btn-success">
    </div>
</div>
{{ Form::close() }}
