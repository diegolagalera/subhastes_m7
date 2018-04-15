{{ Form::open(['categoria'=>$categoria, 'url' => $url, 'method' => $method]) }}
@csrf
<div class="" style="text-align: center;">

    <div class="form-group">
    {{Form::text('nom',$categoria->nom,['class' =>'form-controller', 'placeholder'=>'Nom...'])}}</div>
    <div class="form-group">
    {{Form::textarea('descripcio',$categoria->descripcio,['class' =>'form-controller', 'placeholder'=>'Descripcio...'])}}</div>

    <div class="">
      <a href="{{url('/categories')}}">Tornar</a>
      <input type="submit" value="Enviar" class="btn btn-success">
    </div>
</div>
{{ Form::close() }}
