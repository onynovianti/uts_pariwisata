@include('back.section.head2')
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('back.section.navbar2')
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

  @include('back.section.footer2')
</body>

</html>

