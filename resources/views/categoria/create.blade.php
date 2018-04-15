{{-- \resources\views\users\index.blade.php --}}
@extends('layouts.layout')

@section('title', '| Categories')

@section('content')
<div class="container">
  <h1>Nova categoria</h1>
    @include('categoria.form',['categoria'=>$categoria, 'url'=>'/categories', 'method' => 'POST'])
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
