<!doctype html>
<html lang="en" class="semi-dark">
@include('backend.admin.partials._head')
<body>
@include('backend.admin.partials._preloader')
<!--start wrapper-->
<div class="wrapper">
    @include('backend.admin.partials._header')
    @include('backend.admin.partials._sidebar')
    <!--start content-->
    <main class="page-content">
        <div class="row d-md-none d-block">
            <div class="col-12">
                <p class="mb-2 ps-2 breadcrumb-pages"><span class="me-2"><i class="bi bi-house-fill"></i></span>{{ $common_data->title ?? '' }}</p>
            </div>
        </div>

        @yield('main_content')

    </main>
    <!--end page main-->
    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class="lni lni-chevron-up"></i></a>
    <!--End Back To Top Button-->

    @yield('modal')
</div>
<!--end wrapper-->
@include('backend.admin.partials._scripts')
</body>
</html>
