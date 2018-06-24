@include('_partials.head')
  <!-- Navigation -->
@include('_partials.navigation')
<!-- Page Header -->
@include('_partials.pageheader')
<!-- Main Content -->
@include('error.messages')
@yield('content')
<!-- Footer -->
@include('_partials.footer')
<!-- Bootstrap core JavaScript -->
@include('_partials.js')
