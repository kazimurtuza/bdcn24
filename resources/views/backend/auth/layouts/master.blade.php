<!doctype html>
<html lang="en" class="semi-dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <link rel="icon" href="{{ asset('assets/backend') }}/images/favicon-32x32.png" type="image/png" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/backend') }}/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('assets/backend') }}/css/bootstrap-extended.css" rel="stylesheet" />

    <link href="{{ asset('assets/backend') }}/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="{{ asset('assets/backend') }}/css/style.css" rel="stylesheet" />
    <link href="{{ asset('assets/backend') }}/css/custom-root.css" rel="stylesheet">
    <link href="{{ asset('assets/backend') }}/css/responsive.css" rel="stylesheet">

    <!-- loader-->
    <!-- <link href="{{ asset('assets/backend') }}/css/pace.min.css" rel="stylesheet" /> -->

    <title>BDCN24 - NEWS PORTAL</title>
</head>

<body class="login-page">

<!--start wrapper-->
<div class="wrapper">

    <!--start content-->
    <section class="authentication-page container-fluid px-0">
        <div class="row g-0">
            <div class="col-4 d-none d-md-block">
                <div class="left-sidebar-cover">
                    <img src="{{ asset('assets/backend') }}/images/bg-left.jpg" alt="">
                </div>
            </div>
            <div class="col-12 col-md-8 ">
                <div class="right-sidebar-content">
                    <div class="row justify-content-center align-items-bottom height-100vh position-relative">
                        <div class="col-12 col-md-5 align-self-md-center align-self-center">
                            @yield('main_content')



                        </div>
                        <div class="col-12 d-block d-md-none mt-5">
                            <div class="m-copyright text-center">
                                <p>© BDCN24. All rights reserved. <br/> Developed By - <a href="https://www.retinasoft.com.bd/" target="">Retina Soft</a>  </p>
                            </div>
                        </div>


                    </div>

                </div>

            </div>

        </div>
    </section>

    <!--end page main-->

</div>
<!--end wrapper-->
<div class="col-12 copyright-bdcn24 position-fixed d-none d-md-block">
    <p>© BDCN24. All rights reserved. | Developed By - <a href="https://www.retinasoft.com.bd/" target="
      ">Retina Soft</a>  </p>
</div>


<!--plugins-->
<script src="{{ asset('assets/backend') }}/js/jquery.min.js"></script>
<!-- <script src="{{ asset('assets/backend') }}/js/pace.min.js"></script> -->


@yield('js')



</body>

</html>
