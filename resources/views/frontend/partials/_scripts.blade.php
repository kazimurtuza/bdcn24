
<!--=================================
    Javascript -->
<!-- JS Global Compulsory (Do not remove)-->
<script src="{{ asset('assets/frontend/js') }}/jquery-3.6.0.min.js"></script>
<script src="{{ asset('assets/frontend/js') }}/popper/popper.min.js"></script>
<script src="{{ asset('assets/frontend/js') }}/bootstrap/bootstrap.min.js"></script>
<script src="{{ asset('assets/frontend/js') }}/jquery.appear.js"></script>
<!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->

@yield('js_plugins')

<script src="{{ asset('assets/frontend/js') }}/owl-carousel/owl.carousel.min.js"></script>
<script src="{{ asset('assets/frontend/js') }}/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Template Scripts (Do not remove)-->
<script src="{{ asset('assets/frontend/js') }}/custom.js"></script>
<script>
    const darkLighModeCheckbox = document.getElementById('darkLighModeCheckbox');
    darkLighModeCheckbox.addEventListener('change', () => {
        document.body.classList.toggle('dark');
    });

    function changeLanguage(language) {
        $("body").attr('data-language', language);
    }
</script>

@yield('js')
