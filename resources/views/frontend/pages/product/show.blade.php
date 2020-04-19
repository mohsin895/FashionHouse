@extends('frontend.layouts.master')
     <!-- End NavBar Part -->
@section('title')
{{ $product->title }} | FashionHouse
@endsection

      <!-- Start Sidebar+ Content -->
    @section('content')
    <div class="container margine-top-20">
      <div class="row">
        <div class="col-md-4">

          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
        @php  $i =1; @endphp

      @foreach ($product->images as $image)
      <div class="product carousel-item  {{ $i == 1 ? 'active':''}}">
            <img src="{{asset('images/products/'.$image->image)}}" class="d-block w-100" alt="...">
          </div>
          @php $i++; @endphp
      @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="card mt-4">
            Category <span class="badge badge-info">{{ $product->category->name}} </span><br>
         Brand <span class="badge badge-info">{{ $product->brand->name}} </span>
          </div>

        </div>
        <div class="col-md-8">
    <h3>{{ $product->title}} </h3>
    <h3>{{ $product->price}} Taka <span class="badge badge-primary">
{{ $product->quantity < 1 ? 'No Item is Available':$product->quantity . '  item in stock'}}
    </h3>
    <hr>
    <div class="card product-description">
        <h3>{{ $product->description}}</h3>
    </div>
          <div class="widget">
          </div>
        </div>
      </div>
    </div>

        <!-- End Sidebar + Content -->



    @endsection
