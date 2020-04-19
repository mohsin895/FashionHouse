
@extends('admin.layouts.master')
@section('content')

<div class="main-panel">
  <div class="content-wrapper">
    <!-- Page Title Header Starts-->

    <!-- Page Title Header Ends-->
    <div class="card">
    <div class=" card-header">
      <h1> Add Product</h1>
    </div>
    <div class="card-body">
      <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
            @csrf
              @include('admin.partials.messages')
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control" name="title" id="exampleInputEmail1" >

        </div>





        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>

        <textarea name="description" rows="8" cols="80" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Quantity</label>
          <input type="number" class="form-control" name="quantity" id="exampleInputEmail1" >

        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Price</label>
          <input type="number" class="form-control" name="price" id="exampleInputEmail1" >

        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Select Category</label>

          <select class="form-control" name="category_id">
            <option value="">Please Select a Category from product</option>
            @foreach(App\Models\Category::orderBy('name','asc')->where('parent_id',NULL)->get() as $parent)
          <option value="{{ $parent->id}}">{{$parent->name}}</option>

         @foreach(App\Models\Category::orderBy('name','asc')->where('parent_id',$parent->id)->get() as $child)
        <option value="{{ $child->id}}">-------->{{$child->name}}</option>

         @endforeach

            @endforeach
          </select>

        </div>


        <div class="form-group">
          <label for="exampleInputEmail1">Select Brand</label>

          <select class="form-control" name="brand_id">
            <option value="">Please Select a brand from product</option>
            @foreach(App\Models\Brand::orderBy('name','asc')->get() as $brand)
          <option value="{{ $brand->id}}">{{$brand->name}}</option>


            @endforeach
          </select>

        </div>

        <div class="form-group">
          <label for="product_image">Product Image</label>
        <div class="row">
          <div class="col-md-4">
              <input type="file" class="form-control" name="product_image[]" id="exampleInputEmail1" >
          </div>
          <div class="col-md-4">
              <input type="file" class="form-control" name="product_image[]" id="exampleInputEmail1" >
          </div>
          <div class="col-md-4">
              <input type="file" class="form-control" name="product_image[]" id="exampleInputEmail1" >
          </div>
          <div class="col-md-4">
              <input type="file" class="form-control" name="product_image[]" id="exampleInputEmail1" >
          </div>
          <div class="col-md-4">
              <input type="file" class="form-control" name="product_image[]" id="exampleInputEmail1" >
          </div>
        </div>


        </div>

        <button type="submit" class="btn btn-primary">Add Product</button>
      </form>
    </div>


  </div>
  </div>

</div>
<!-- main-panel ends -->
@endsection
