{{Form::open(['url'=> '/productes/'.$product->id,'method' =>'DELETE'])}}
  <input type="submit"  class="btn btn-danger" value="Eliminar">
{{Form::close()}}
