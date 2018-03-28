@extends("layouts.app");

@section("content")
  <div class="big-padding text-center blue-grey white-text">
    <h1>Productes</h1>
  </div>
  <div class="container">
    <table>
      <thead>
        <tr>
          <td></td>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
          <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->nom}}</td>
            <td><img src="{{$product->imatge}}"></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
