<!DOCTYPE html>
<html>

<!-- head start -->
@include('main-site.common.head')
<!-- head end -->

<body>

  <div class="hero_area">
    <div class="bg-box">
      <img src="/main-site/images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
      @include('main-site.common.heading')
    <!-- end header section -->

    <!-- main-site start-->
    @yield('main-site')
    <!-- main-site end -->


  <!-- footer section -->
    @include('main-site.common.footer')
  <!-- footer section -->

  <!-- js  -->
   @include('main-site.common.js')

</body>

</html>