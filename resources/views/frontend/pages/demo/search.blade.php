@extends('frontend.layout.master')
@section('breaking-news')
    @include('frontend.partials._breaking_news')
@endsection

@section('main_content')



    <!--=================================
Tab -->
    <section class=" explore-products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="">
                        <div class="section-title mb-2">
                            <h2 class="title mb-0"><i class="fa-solid fa-bolt-lightning"></i>সার্চ রেজাল্ট</h2>
                            <div class="top-header-box position-relative mobile-version-none">
                                <div class="custom-ads-box row justify-content-center position-relative">
                                    <div class="sidebar-img  text-center">
                                        <a href="#"> <img class="img-fluid" src="{{ asset('assets/frontend/images') }}//ads/ads-1024x90.jpg" alt="image">
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    Tab -->

    <!--   <div class="custom-ads-box row justify-content-center position-relative py-4">
        <div class="sidebar-img my-2 text-center">
          <a href="#"> <img class="img-fluid" src="{{ asset('assets/frontend/images') }}//ads/ads-970x90.jpg" alt="image"> </a>
        </div>
      </div> -->


    <!--=================================
    explore-products -->
    <section class="space-pb mt-2 explore-products">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-8">
                    <div class="news-sport-posts">
                        <div class="search-result-title mb-md-5 mb-2">
                            <p class="mb-2">প্রায় ৫০০ টি ফলাফল পাওয়া গেছে।</p>
                            <h2>"সাত এমপি না থাকলে এক বছরে দেশ ভেঙে পড়বে না"</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-xl-12">
                                <div class="blog-post post-style-04 custom-2">
                                    <div class="blog-image"><img class="img-fluid bg-overlay-black-93"
                                                                 src="{{ asset('assets/frontend/images') }}/blog/95.jpg" alt="">
                                        <div class="audio-video-wrapper d-flex align-items-center justify-content-end">
                                            <div class="video-icon item"><a href="#"><i class="fa-solid fa-video"></i></a>
                                            </div>
                                            <div class="audio-icon item"><a href="#"><i class="fa-solid fa-microphone"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-post-details"><span class="badge text-pink">রংপুর</span>
                                        <h6 class="blog-title"><a href="#">সাত এমপি না থাকলে এক বছরে দেশ ভেঙে পড়বে না:
                                                কৃষিমন্ত্রী</a></h6>
                                        <div class="blog-post-meta">
                                            <div class="blog-post-time"><a href="#"><i
                                                        class="fa-solid fa-calendar-days"></i>১১ ডিসেম্বর, ২০২২</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12 col-xl-12">
                                <div class="blog-post post-style-04 custom-2">
                                    <div class="blog-image"><img class="img-fluid bg-overlay-black-93"
                                                                 src="{{ asset('assets/frontend/images') }}/blog/95.jpg" alt="">
                                        <div class="audio-video-wrapper d-flex align-items-center justify-content-end">
                                            <div class="video-icon item"><a href="#"><i class="fa-solid fa-video"></i></a>
                                            </div>
                                            <div class="audio-icon item"><a href="#"><i class="fa-solid fa-microphone"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-post-details"><span class="badge text-pink">রংপুর</span>
                                        <h6 class="blog-title"><a href="#">সাত এমপি না থাকলে এক বছরে দেশ ভেঙে পড়বে না:
                                                কৃষিমন্ত্রী</a></h6>
                                        <div class="blog-post-meta">
                                            <div class="blog-post-time"><a href="#"><i
                                                        class="fa-solid fa-calendar-days"></i>১১ ডিসেম্বর, ২০২২</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12 col-xl-12">
                                <div class="blog-post post-style-04 custom-2">
                                    <div class="blog-image"><img class="img-fluid bg-overlay-black-93"
                                                                 src="{{ asset('assets/frontend/images') }}/blog/95.jpg" alt="">
                                        <div class="audio-video-wrapper d-flex align-items-center justify-content-end">
                                            <div class="video-icon item"><a href="#"><i class="fa-solid fa-video"></i></a>
                                            </div>
                                            <div class="audio-icon item"><a href="#"><i class="fa-solid fa-microphone"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-post-details"><span class="badge text-pink">রংপুর</span>
                                        <h6 class="blog-title"><a href="#">সাত এমপি না থাকলে এক বছরে দেশ ভেঙে পড়বে না:
                                                কৃষিমন্ত্রী</a></h6>
                                        <div class="blog-post-meta">
                                            <div class="blog-post-time"><a href="#"><i
                                                        class="fa-solid fa-calendar-days"></i>১১ ডিসেম্বর, ২০২২</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  Ads wrapper start-->
                    <div class="custom-ads-box row justify-content-center position-relative">
                        <div class="sidebar-img my-2 text-center">
                            <a href="#"> <img class="img-fluid" src="{{ asset('assets/frontend/images') }}//ads/ads-728x90.jpg" alt="image"> </a>
                        </div>
                    </div>
                    <!--  Ads wrapper end-->
                    <div class="row mt-2">
                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <div class="blog-post post-style-04">
                                <div class="blog-image"><img class="img-fluid bg-overlay-black-93" src="{{ asset('assets/frontend/images') }}/blog/95.jpg"
                                                             alt="">
                                    <div class="audio-video-wrapper d-flex align-items-center justify-content-end">
                                        <div class="video-icon item"><a href="#"><i class="fa-solid fa-video"></i></a></div>
                                        <div class="audio-icon item"><a href="#"><i class="fa-solid fa-microphone"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-post-details"><span class="badge text-pink">রংপুর</span>
                                    <h6 class="blog-title"><a href="#">সাত এমপি না থাকলে এক বছরে দেশ ভেঙে পড়বে না:
                                            কৃষিমন্ত্রী</a></h6>
                                    <div class="blog-post-meta">
                                        <div class="blog-post-time"><a href="#"><i class="fa-solid fa-calendar-days"></i>১১
                                                ডিসেম্বর, ২০২২</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <div class="blog-post post-style-04">
                                <div class="blog-image"><img class="img-fluid bg-overlay-black-93" src="{{ asset('assets/frontend/images') }}/blog/95.jpg"
                                                             alt="">
                                    <div class="audio-video-wrapper d-flex align-items-center justify-content-end">
                                        <div class="video-icon item"><a href="#"><i class="fa-solid fa-video"></i></a></div>
                                        <div class="audio-icon item"><a href="#"><i class="fa-solid fa-microphone"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-post-details"><span class="badge text-pink">রংপুর</span>
                                    <h6 class="blog-title"><a href="#">সাত এমপি না থাকলে এক বছরে দেশ ভেঙে পড়বে না:
                                            কৃষিমন্ত্রী</a></h6>
                                    <div class="blog-post-meta">
                                        <div class="blog-post-time"><a href="#"><i class="fa-solid fa-calendar-days"></i>১১
                                                ডিসেম্বর, ২০২২</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <div class="blog-post post-style-04">
                                <div class="blog-image"><img class="img-fluid bg-overlay-black-93" src="{{ asset('assets/frontend/images') }}/blog/95.jpg"
                                                             alt="">
                                    <div class="audio-video-wrapper d-flex align-items-center justify-content-end">
                                        <div class="video-icon item"><a href="#"><i class="fa-solid fa-video"></i></a></div>
                                        <div class="audio-icon item"><a href="#"><i class="fa-solid fa-microphone"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-post-details"><span class="badge text-pink">রংপুর</span>
                                    <h6 class="blog-title"><a href="#">সাত এমপি না থাকলে এক বছরে দেশ ভেঙে পড়বে না:
                                            কৃষিমন্ত্রী</a></h6>
                                    <div class="blog-post-meta">
                                        <div class="blog-post-time"><a href="#"><i class="fa-solid fa-calendar-days"></i>১১
                                                ডিসেম্বর, ২০২২</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <div class="blog-post post-style-04">
                                <div class="blog-image"><img class="img-fluid bg-overlay-black-93" src="{{ asset('assets/frontend/images') }}/blog/95.jpg"
                                                             alt="">
                                    <div class="audio-video-wrapper d-flex align-items-center justify-content-end">
                                        <div class="video-icon item"><a href="#"><i class="fa-solid fa-video"></i></a></div>
                                        <div class="audio-icon item"><a href="#"><i class="fa-solid fa-microphone"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-post-details"><span class="badge text-pink">রংপুর</span>
                                    <h6 class="blog-title"><a href="#">সাত এমপি না থাকলে এক বছরে দেশ ভেঙে পড়বে না:
                                            কৃষিমন্ত্রী</a></h6>
                                    <div class="blog-post-meta">
                                        <div class="blog-post-time"><a href="#"><i class="fa-solid fa-calendar-days"></i>১১
                                                ডিসেম্বর, ২০২২</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <div class="blog-post post-style-04">
                                <div class="blog-image"><img class="img-fluid bg-overlay-black-93" src="{{ asset('assets/frontend/images') }}/blog/95.jpg"
                                                             alt="">
                                    <div class="audio-video-wrapper d-flex align-items-center justify-content-end">
                                        <div class="video-icon item"><a href="#"><i class="fa-solid fa-video"></i></a></div>
                                        <div class="audio-icon item"><a href="#"><i class="fa-solid fa-microphone"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-post-details"><span class="badge text-pink">রংপুর</span>
                                    <h6 class="blog-title"><a href="#">সাত এমপি না থাকলে এক বছরে দেশ ভেঙে পড়বে না:
                                            কৃষিমন্ত্রী</a></h6>
                                    <div class="blog-post-meta">
                                        <div class="blog-post-time"><a href="#"><i class="fa-solid fa-calendar-days"></i>১১
                                                ডিসেম্বর, ২০২২</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <div class="blog-post post-style-04">
                                <div class="blog-image"><img class="img-fluid bg-overlay-black-93" src="{{ asset('assets/frontend/images') }}/blog/95.jpg"
                                                             alt="">
                                    <div class="audio-video-wrapper d-flex align-items-center justify-content-end">
                                        <div class="video-icon item"><a href="#"><i class="fa-solid fa-video"></i></a></div>
                                        <div class="audio-icon item"><a href="#"><i class="fa-solid fa-microphone"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-post-details"><span class="badge text-pink">রংপুর</span>
                                    <h6 class="blog-title"><a href="#">সাত এমপি না থাকলে এক বছরে দেশ ভেঙে পড়বে না:
                                            কৃষিমন্ত্রী</a></h6>
                                    <div class="blog-post-meta">
                                        <div class="blog-post-time"><a href="#"><i class="fa-solid fa-calendar-days"></i>১১
                                                ডিসেম্বর, ২০২২</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <div class="blog-post post-style-04">
                                <div class="blog-image"><img class="img-fluid bg-overlay-black-93" src="{{ asset('assets/frontend/images') }}/blog/95.jpg"
                                                             alt="">
                                    <div class="audio-video-wrapper d-flex align-items-center justify-content-end">
                                        <div class="video-icon item"><a href="#"><i class="fa-solid fa-video"></i></a></div>
                                        <div class="audio-icon item"><a href="#"><i class="fa-solid fa-microphone"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-post-details"><span class="badge text-pink">রংপুর</span>
                                    <h6 class="blog-title"><a href="#">সাত এমপি না থাকলে এক বছরে দেশ ভেঙে পড়বে না:
                                            কৃষিমন্ত্রী</a></h6>
                                    <div class="blog-post-meta">
                                        <div class="blog-post-time"><a href="#"><i class="fa-solid fa-calendar-days"></i>১১
                                                ডিসেম্বর, ২০২২</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <div class="blog-post post-style-04">
                                <div class="blog-image"><img class="img-fluid bg-overlay-black-93" src="{{ asset('assets/frontend/images') }}/blog/95.jpg"
                                                             alt="">
                                    <div class="audio-video-wrapper d-flex align-items-center justify-content-end">
                                        <div class="video-icon item"><a href="#"><i class="fa-solid fa-video"></i></a></div>
                                        <div class="audio-icon item"><a href="#"><i class="fa-solid fa-microphone"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-post-details"><span class="badge text-pink">রংপুর</span>
                                    <h6 class="blog-title"><a href="#">সাত এমপি না থাকলে এক বছরে দেশ ভেঙে পড়বে না:
                                            কৃষিমন্ত্রী</a></h6>
                                    <div class="blog-post-meta">
                                        <div class="blog-post-time"><a href="#"><i class="fa-solid fa-calendar-days"></i>১১
                                                ডিসেম্বর, ২০২২</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="pagination-wrap d-flex justify-content-center">
                                <nav class="pagination-outer" aria-label="Page navigation">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a href="#" class="page-link" aria-label="Previous">
                                                <span aria-hidden="true">«</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">১</a></li>
                                        <li class="page-item"><a class="page-link" href="#">২</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">৩</a></li>
                                        <li class="page-item"><a class="page-link disabled" href="#">...</a></li>
                                        <li class="page-item"><a class="page-link" href="#">১০</a></li>
                                        <li class="page-item"><a class="page-link" href="#">১১ </a></li>
                                        <li class="page-item">
                                            <a href="#" class="page-link" aria-label="Next">
                                                <span aria-hidden="true">»</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
                <!--=================================
                sidebar -->
                <div class="col-lg-5 col-xl-4">
                    <div class="sidebar">
                        @include('frontend.partials._sidebar_location_search')
                        @include('frontend.partials._sidebar_trending_news')
                        <div class="widget">
                            <div class="add-banner">
                                <a href="#"> <img class="img-fluid w-100" src="{{ asset('assets/frontend/images') }}//ads/ads-336×280.jpg" alt="image">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <!--=================================
                sidebar -->

                <!--=================================
                explore-products -->


            </div>
        </div>
    </section>
    <!--=================================
    explore-products -->


    <!--=================================
    Blog Slider -->
    @include('frontend.partials._recent-news-slider')
    <!--=================================
    Blog Slider -->


@endsection

@section('css_plugins')
    <link href="{{ asset('assets/frontend/css/select2/select2.css') }}" rel="stylesheet"/>
@endsection

@section('js_plugins')
    <script src="{{ asset('assets/frontend/js/select2/select2.full.js') }}"></script>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $('.select2').select2();
        });
    </script>
@endsection
