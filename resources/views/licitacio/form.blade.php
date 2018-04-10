{{ Form::open(['url' => $url,'id'=>$id, 'method' => $method]) }}
<div >
  {{Form::number('preu','',['class' =>'form-control', 'step'=>'any','placeholder'=>'Preu...'])}}
  {{Form::label('+50','+ (0,50€)')}}

<input type="hidden" name="url" value='subhastes/{{$id}}'>
<input type="hidden" name="subhasta" value='{{$id}}'>

  <input type="submit" value="Enviar" class="btn btn-success">
</div>
{{Form::close()}}
