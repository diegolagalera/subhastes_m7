{{-- \resources\views\users\index.blade.php --}}
@extends('layouts.layout')

@section('title', '| Users')

@section('content')
<div class="col-lg-10 col-lg-offset-1">
    <h1><i class="fa fa-users"></i><h1>Editar Producte</h1>

  <hr>
  <div class="table-responsive">
    @include('products.form',['product'=>$product, 'url' => '/productes/'.$product->id, 'method'=> 'PATCH'])
</div>
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
