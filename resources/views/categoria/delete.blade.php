{{Form::open(['url'=> '/categories/'.$categoria->id,'method' =>'DELETE'])}}
  <input type="submit"  class="btn btn-danger" value="Eliminar">
{{Form::close()}}
