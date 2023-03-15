<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">

    <link rel="icon" href="{{ asset('assets/backend') }}/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('assets/backend') }}/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="{{ asset('assets/backend') }}/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{ asset('assets/backend') }}/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{ asset('assets/backend') }}/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/backend') }}/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('assets/backend') }}/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="{{ asset('assets/backend') }}/css/icons.css" rel="stylesheet">

    <link href="{{ asset('assets/backend/css/toastr.min.css') }}" rel="stylesheet">
    @yield('css_plugins')

    <link href="{{ asset('assets/backend') }}/css/style.css" rel="stylesheet" />
    <link href="{{ asset('assets/backend') }}/css/custom-root.css" rel="stylesheet">
    <link href="{{ asset('assets/backend') }}/css/responsive.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    @yield('css')
    <title>{{ $common_data->title ?? '' }} - BDCN24</title>
</head>
