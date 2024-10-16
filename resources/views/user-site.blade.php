<!DOCTYPE html>
<html lang="en">

<!-- head start -->
  @include('user-site.common.head')
<!-- head end -->

<body>

  <!-- ======= Header ======= -->
   @include('user-site.common.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
   @include('user-site.common.sidebar')
  <!-- End Sidebar-->


  @yield('user-site')
  <!-- End #main -->

  <!-- ======= Footer ======= -->
   @include('user-site.common.footer')
<!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
    @include('user-site.common.js')

</body>

</html>