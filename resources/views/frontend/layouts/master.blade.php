@include('frontend.partials.header')

  <!-- Navigation -->
@include('frontend.partials.nav')
@include('frontend.partials.messages')
@yield('content')
     <!-- End NavBar Part -->


      <!-- Start Sidebar+ Content -->


          <!-- End Sidebar + Content -->

@include('frontend.partials.footer')

@include('frontend.partials.script')


</body>
</html>
