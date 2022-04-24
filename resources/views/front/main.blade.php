@include('front.section.head')

<body>

  <!-- ======= Header ======= -->
  @include('front.section.header')
  <main id="main">
    @yield('isi')
  </main>

  <!-- ======= Footer ======= -->
  @include('front.section.footer')
  @include('front.section.foot')
</body>

</html>