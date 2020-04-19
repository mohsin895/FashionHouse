
@extends('admin.layouts.master')
@section('content')

<div class="main-panel">
  <div class="content-wrapper">
  <div class="card card-body">
    <h3>Welcome to my Admin Panel</h3>
    <br>
    <br>
    <p><a href="{{route('index')}}" class="btn btn-primary btn-large" target="_blank">Visite Main Site</a></p>
  </div>

  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
  <footer class="footer">
    <div class="container-fluid clearfix">
      <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2020 <a style="color: blue">MOHSIN SIKDER</a>. All rights reserved.</span>
      </span>
    </div>
  </footer>
  <!-- partial -->
</div>
<!-- main-panel ends -->
@endsection
