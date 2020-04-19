
@extends('admin.layouts.master')
@section('content')

<div class="main-panel">
  <div class="content-wrapper">
    <!-- Page Title Header Starts-->

    <!-- Page Title Header Ends-->
    <div class="card">
    <div class=" card-header">
      <h1> Edit Division</h1>
    </div>
    <div class="card-body">
      <form action="{{route('admin.division.update', $division->id)}}" method="post" enctype="multipart/form-data">
            @csrf
              @include('admin.partials.messages')
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" id="name" value="{{$division->name}}" >

        </div>
        <div class="form-group">
          <label for="priority">Priority</label>
          <input type="text" class="form-control" name="priority" id="priority" value="{{$division->priority}}" >
        </div>



        <button type="submit" class="btn btn-primary">Update Division</button>
      </form>
    </div>


  </div>
  </div>

</div>
<!-- main-panel ends -->
@endsection
