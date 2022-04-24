@include('back.section.head')
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('back.section.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('back.section.sidebar_off')
      <!-- partial -->
      @yield('isi')
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  @include('back.section.footer')
</body>

</html>

