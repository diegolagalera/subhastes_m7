{{ Form::open([ 'url'=>'/recargar/'.$user->id,'method' => 'POST']) }}
@csrf
<div >
  {{Form::number('saldo','',['class' =>'form-control', 'step'=>'any','placeholder'=>'Preu...'])}}
  <input type="submit" value="Enviar" class="btn btn-success">
</div>
{{Form::close()}}
