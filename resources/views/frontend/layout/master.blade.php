<!DOCTYPE html>
<html lang="en">

@include('frontend.partials._head')

<body data-language='bn'>

<!--=================================
  Loader -->
<!--   <div id="overlayer"></div>
  <span class="loader">
    <span class="loader-inner"></span>
  </span> -->


<!--=================================
  Header -->
@include('frontend.partials._header')
<!--=================================
  Header -->

@include('frontend.partials._offcanvas-area')

<!--=================================
  Search -->
@include('frontend.partials._search-area')
<!--=================================
  Search -->

<!--=================================
  Breaking News -->
@yield('breaking-news')
<!--=================================
  Breaking News -->

@yield('main_content')


<!--=================================
  Footer -->
@include('frontend.partials._footer')
<!--=================================
    Footer -->

<!--=================================
  Modal -->
@include('frontend.partials._subscribe_modal')
<!--=================================
  Modal -->

<!--=================================
  Back To Top -->
@include('frontend.partials._back_to_top')
<!--=================================
  Back To Top -->

<!-- Dark Mode Start-->
@include('frontend.partials._dark_light_mode_switch')
<!-- Dark Mode End-->

@include('frontend.partials._scripts')
</body>


</html>
