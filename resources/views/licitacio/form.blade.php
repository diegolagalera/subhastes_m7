{{ Form::open(['url' => $url,'id'=>$id, 'method' => $method]) }}
<div class="col-md-8">
  {{Form::number('preu','',['class' =>'form-control', 'step'=>'any','placeholder'=>'Preu...'])}}
</div>
<input type="hidden" name="url" value='subhastes/{{$id}}'>
<input type="hidden" name="subhasta" value='{{$id}}'>
<div class="col-md-9">
  <input type="submit" value="Enviar" class="btn btn-success">
</div>
{{Form::close()}}
