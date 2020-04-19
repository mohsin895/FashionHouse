
@extends('admin.layouts.master')
@section('content')

<div class="main-panel">
  <div class="content-wrapper">
    <!-- Page Title Header Starts-->

    <!-- Page Title Header Ends-->
    <div class="card">
    <div class=" card-header">
      <h1> Add Category</h1>
    </div>
    <div class="card-body">
      <form action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
            @csrf
              @include('admin.partials.messages')
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Enter Category Name" >

        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>

        <textarea name="description" rows="8" cols="80" class="form-control"></textarea>
        </div>


        <div class="form-group">
          <label for="exampleInputPassword1">Parent Category(optional)</label>

      <select class="form-control" name="parent_id" >
          <option value="">Please select a Parent category</option>
        @foreach($main_categories as $category)
        <option  value="{{ $category->id}}">{{ $category->name}}</option>

        @endforeach
      </select>
        </div>


        <div class="form-group">
          <label for="image">Category Image(optional)</label>
        <input type="file" class="form-control" name="image" id="image" >
      </div>

        <button type="submit" class="btn btn-primary">Add Category</button>
      </form>
    </div>


  </div>
  </div>

</div>
<!-- main-panel ends -->
@endsection
