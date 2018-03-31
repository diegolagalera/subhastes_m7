{{-- \resources\views\users\index.blade.php --}}
@extends('layouts.layout')

@section('title', '| Users')

@section('content')
<div class="container">
  <h1>Nou producte</h1>
    @include('products.form',['product'=>$product, 'url'=>'/productes', 'method' => 'POST'])
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
