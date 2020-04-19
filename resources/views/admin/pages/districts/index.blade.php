
@extends('admin.layouts.master')
@section('content')

<div class="main-panel">
  <div class="content-wrapper">
    <!-- Page Title Header Starts-->

    <!-- Page Title Header Ends-->
    <div class="card">
    <div class=" card-header">
      <h1> Manage Districts</h1>
    </div>
    <div class="card-body">
          @include('admin.partials.messages')
    <table class="table table-hover table-striped">
      <tr>
        <th>#</th>
        <th>District name</th>
        <th>Division Name</th>
        <th>Action</th>
      </tr>
@foreach($districts as $district)

<tr>
  <td>#</td>
  <td>{{ $district->name}}</td>
    <td>{{ $district->division->name}}</td>
  <td>
    <a href="{{route('admin.district.edit', $district->id)}}" class="btn btn-success">Edit</a>
  <a href="#deleteModal{{$district->id}}" data-toggle="modal" class="btn btn-danger">Delete</a>

  <div class="modal fade" id="deleteModal{{$district->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Are you sure you want to delete ?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{route('admin.district.delete',$district->id) }}"  method="post">
            @csrf
                <button type="submit" class="btn btn-danger" >Parment Delete</button>
          </form>

        </div>
        <div class="modal-footer">

              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</td>
</tr>

@endforeach
    </table>
    </div>


  </div>
  </div>

</div>
<!-- main-panel ends -->
@endsection
