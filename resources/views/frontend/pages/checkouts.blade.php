@extends('frontend.layouts.master')
@section('content')
<div class=" container margin-top-20">
<div class="card card-body">
  <h1>Confirm Item</h1>
  <hr>
    @foreach(App\Models\Cart::totalCarts() as $cart)
  <p>{{$cart->product->title}} - <strong>{{$cart->product->price}} Taka</strong>

  - {{$cart->product_quantity}} item
  </p>
    @endforeach
    <p>

      <a href="{{route('carts')}}">Chang Carts item</a>
    </p>
</div>

<div class="card card-body mt-2">
  <h1>Shipping address</h1>
  <hr>
    <p>
      <a href="{{route('carts')}}">Chang Carts item</a>
    </p>
</div>

</div>
@endsection
