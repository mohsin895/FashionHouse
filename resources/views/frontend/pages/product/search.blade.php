@extends('frontend.layouts.master')
     <!-- End NavBar Part -->


      <!-- Start Sidebar+ Content -->
    @section('content')
    <div class="container margine-top-20">
      <div class="row">
        <div class="col-md-4">
  @include('frontend.partials.product-sidebar')
        </div>
        <div class="col-md-8">
          <div class="widget">
            <h3> Search Products For - <span class="badge badge-primary">{{$search}}</span></h3>
        @include('frontend.pages.product.partials.all_products')
            </div>
          <div class="widget">
          </div>
        </div>
      </div>
    </div>

        <!-- End Sidebar + Content -->



    @endsection
