<!DOCTYPE html>
<html lang="en">

<!-- head start -->
  @include('admin-site.common.head')
<!-- head end -->

<body>

  <!-- ======= Header ======= -->
   @include('admin-site.common.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
   @include('admin-site.common.sidebar')
  <!-- End Sidebar-->


  @yield('admin-site')
  <!-- End #main -->

  <!-- ======= Footer ======= -->
   @include('admin-site.common.footer')
<!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
    @include('admin-site.common.js')

</body>

</html>