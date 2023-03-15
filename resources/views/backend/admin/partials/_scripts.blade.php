<!-- Bootstrap bundle JS -->
<script src="{{ asset('assets/backend') }}/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="{{ asset('assets/backend') }}/js/jquery.min.js"></script>
<script src="{{ asset('assets/backend') }}/plugins/simplebar/js/simplebar.min.js"></script>
<script src="{{ asset('assets/backend') }}/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="{{ asset('assets/backend') }}/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>

{{--alert--}}
<script src="{{ asset('assets/backend/js/sweetalert2.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/toastr.min.js') }}"></script>

@yield('js_plugins')
<script src="{{ asset('assets/backend/js/alert.js') }}"></script>
<!--app-->
<script src="{{ asset('assets/backend') }}/js/app.js"></script>


<script>
    $(window).on("load", function() {
        $(".preloader-area").fadeOut();
    });
</script>
@yield('js')
