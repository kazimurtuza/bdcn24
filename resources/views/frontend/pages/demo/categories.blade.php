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
                        <div class="section-title">
                            <h2 class="title mb-0"><i class="fa-solid fa-bolt-lightning"></i>রাজনীতি</h2>
                            <div class="top-header-box position-relative mobile-version-none">
                                <div class="custom-ads-box row justify-content-center position-relative">
                                    <div class="sidebar-img  text-center">
                                        <a href="#"> <img class="img-fluid" src="{{ asset('assets/frontend/images') }}//ads/ads-728x90.jpg" alt="image"> </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-9 col-xl-9">
                                <div class="row">
                                    <div class="col-md-5 col-lg-12 col-xl-6">
                                        <div class="blog-post post-style-03">
                                            <div class="blog-image"> <img class="img-fluid" src="{{ asset('assets/frontend/images') }}/blog/107.jpg" alt=""> </div> <span class="badge badge-large bg-green">শেয়ারবাজার</span>
                                            <div class="blog-post-details">
                                                <h6 class="blog-title"><a href="#">মন্দা শেয়ারবাজারে যা করতে পারেন আপনি</a></h6>
                                                <div class="blog-post-meta">
                                                    <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>১১ ডিসেম্বর, ২০২২</a> </div>
                                                </div>
                                                <p>মুক্তিযুদ্ধকালে মানবতাবিরোধী অপরাধের ঘটনায় করা অন্তত তিনটি মামলার রায়ে বুদ্ধিজীবী হত্যাকাণ্ডের পরিকল্পনা, ষড়যন্ত্র, সহযোগিতা ও হত্যাকাণ্ডে জড়িতদের নাম এসেছে। এর মধ্যে আলবদর নেতা আশরাফুজ্জামান ওরফে নায়েব আলী খান এবং চৌধুরী
                                                    মুঈনুদ্দীনের বিরুদ্ধে করা...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-lg-12 col-xl-6">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="blog-post post-style-02 custom-3 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="{{ asset('assets/frontend/images') }}/blog/102.jpg" alt=""> </div> <span class="badge badge-large bg-primary">ব্যাংক</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="#">বাংলাদেশের ঋণমান কমানোর পথে হাঁটছে মুডিস ইনভেস্টরস</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>১১ ডিসেম্বর, ২০২২</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="blog-post post-style-02 custom-3 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="{{ asset('assets/frontend/images') }}/blog/101.jpg" alt=""> </div> <span class="badge badge-large bg-yellow">শিল্প</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="#">প্রধানমন্ত্রী বললেন পৃথিবীতে বিনিয়োগের সবচেয়ে আকর্ষণীয় জায়গা বাংলাদেশ</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>১১ ডিসেম্বর, ২০২২</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="blog-post post-style-02 custom-3 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="{{ asset('assets/frontend/images') }}/blog/103.jpg" alt=""> </div> <span class="badge badge-large bg-blue">বিশ্ববাণিজ্য</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="#">ভারতের মুঠোফোন রপ্তানি বেড়ে আড়াই গুণ</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>১১ ডিসেম্বর, ২০২২</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="blog-post post-style-02 custom-3 mb-3">
                                                    <div class="blog-image"> <img class="img-fluid" src="{{ asset('assets/frontend/images') }}/blog/104.jpg" alt=""> </div> <span class="badge badge-large bg-orange">বিশ্লেষণ</span>
                                                    <div class="blog-post-details">
                                                        <h6 class="blog-title"><a href="#">প্রতিশ্রুতির চেয়ে বাণিজ্য চুক্তির অগ্রগতি কম</a></h6>
                                                        <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>১১ ডিসেম্বর, ২০২২</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="custom-ads-box row justify-content-center position-relative pt-2 pb-4">
                                            <div class="sidebar-img my-2 text-center">
                                                <a href="#"> <img class="img-fluid" src="{{ asset('assets/frontend/images') }}//ads/ads-970x90.jpg" alt="image"> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-xl-3">
                                <div class="sidebar-custom">
                                    <div class="ads mb-4">
                                        <div class="add-banner mt-0">
                                            <a href="#"> <img class="img-fluid w-100" src="{{ asset('assets/frontend/images') }}//ads/ads-336×280.jpg" alt="image"> </a>
                                        </div>
                                    </div>
                                    <div class="sidebar">
                                        @include('frontend.partials._sidebar_category_search')
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
                <div class="col-lg-7 col-xl-8 mt-4 mt-md-2">
                    <div class="row mt-2">
                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <div class="blog-post post-style-04">
                                <div class="blog-image"><img class="img-fluid bg-overlay-black-93" src="{{ asset('assets/frontend/images') }}/blog/95.jpg" alt="">
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
                                <div class="blog-image"><img class="img-fluid" src="{{ asset('assets/frontend/images') }}/blog/92.jpg" alt=""></div>
                                <div class="blog-post-details"><span class="badge text-pink">সিলেট</span>
                                    <h6 class="blog-title"><a href="#">নারায়ণগঞ্জে মহাসড়কে নেই পুলিশি তৎপরতা, যান চলাচল
                                            স্বাভাবিক</a></h6>
                                    <div class="blog-post-meta">
                                        <div class="blog-post-time"><a href="#"><i class="fa-solid fa-calendar-days"></i>১১
                                                ডিসেম্বর, ২০২২</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <div class="blog-post post-style-04">
                                <div class="blog-image"><img class="img-fluid" src="{{ asset('assets/frontend/images') }}/blog/94.jpg" alt=""></div>
                                <div class="blog-post-details"><span class="badge text-pink">খুলনা</span>
                                    <h6 class="blog-title"><a href="#">খাদিজা-সামিদুলের সংসারে পড়ালেখা ‘বড়লোকের বিষয়’</a></h6>
                                    <div class="blog-post-meta">
                                        <div class="blog-post-time"><a href="#"><i class="fa-solid fa-calendar-days"></i>১১
                                                ডিসেম্বর, ২০২২</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <div class="blog-post post-style-04">
                                <div class="blog-image"><img class="img-fluid" src="{{ asset('assets/frontend/images') }}/blog/93.jpg" alt=""></div>
                                <div class="blog-post-details"><span class="badge text-pink">বরিশাল</span>
                                    <h6 class="blog-title"><a href="#">‘মুক্তিযুদ্ধে আনোয়ার উল আলমের অবদান অপরিসীম’ </a></h6>
                                    <div class="blog-post-meta">
                                        <div class="blog-post-time"><a href="#"><i class="fa-solid fa-calendar-days"></i>১১
                                                ডিসেম্বর, ২০২২</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <div class="blog-post post-style-04">
                                <div class="blog-image"><img class="img-fluid" src="{{ asset('assets/frontend/images') }}/blog/94.jpg" alt=""></div>
                                <div class="blog-post-details"><span class="badge text-pink">খুলনা</span>
                                    <h6 class="blog-title"><a href="#">খাদিজা-সামিদুলের সংসারে পড়ালেখা ‘বড়লোকের বিষয়’</a></h6>
                                    <div class="blog-post-meta">
                                        <div class="blog-post-time"><a href="#"><i class="fa-solid fa-calendar-days"></i>১১
                                                ডিসেম্বর, ২০২২</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <div class="blog-post post-style-04">
                                <div class="blog-image"><img class="img-fluid" src="{{ asset('assets/frontend/images') }}/blog/93.jpg" alt=""></div>
                                <div class="blog-post-details"><span class="badge text-pink">বরিশাল</span>
                                    <h6 class="blog-title"><a href="#">‘মুক্তিযুদ্ধে আনোয়ার উল আলমের অবদান অপরিসীম’ </a></h6>
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
                                <div class="blog-image"><img class="img-fluid" src="{{ asset('assets/frontend/images') }}/blog/92.jpg" alt=""></div>
                                <div class="blog-post-details"><span class="badge text-pink">সিলেট</span>
                                    <h6 class="blog-title"><a href="#">নারায়ণগঞ্জে মহাসড়কে নেই পুলিশি তৎপরতা, যান চলাচল
                                            স্বাভাবিক</a></h6>
                                    <div class="blog-post-meta">
                                        <div class="blog-post-time"><a href="#"><i class="fa-solid fa-calendar-days"></i>১১
                                                ডিসেম্বর, ২০২২</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <div class="blog-post post-style-04">
                                <div class="blog-image"><img class="img-fluid" src="{{ asset('assets/frontend/images') }}/blog/94.jpg" alt=""></div>
                                <div class="blog-post-details"><span class="badge text-pink">খুলনা</span>
                                    <h6 class="blog-title"><a href="#">খাদিজা-সামিদুলের সংসারে পড়ালেখা ‘বড়লোকের বিষয়’</a></h6>
                                    <div class="blog-post-meta">
                                        <div class="blog-post-time"><a href="#"><i class="fa-solid fa-calendar-days"></i>১১
                                                ডিসেম্বর, ২০২২</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <div class="blog-post post-style-04">
                                <div class="blog-image"><img class="img-fluid" src="{{ asset('assets/frontend/images') }}/blog/93.jpg" alt=""></div>
                                <div class="blog-post-details"><span class="badge text-pink">বরিশাল</span>
                                    <h6 class="blog-title"><a href="#">‘মুক্তিযুদ্ধে আনোয়ার উল আলমের অবদান অপরিসীম’ </a></h6>
                                    <div class="blog-post-meta">
                                        <div class="blog-post-time"><a href="#"><i class="fa-solid fa-calendar-days"></i>১১
                                                ডিসেম্বর, ২০২২</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <div class="blog-post post-style-04">
                                <div class="blog-image"><img class="img-fluid" src="{{ asset('assets/frontend/images') }}/blog/94.jpg" alt=""></div>
                                <div class="blog-post-details"><span class="badge text-pink">খুলনা</span>
                                    <h6 class="blog-title"><a href="#">খাদিজা-সামিদুলের সংসারে পড়ালেখা ‘বড়লোকের বিষয়’</a></h6>
                                    <div class="blog-post-meta">
                                        <div class="blog-post-time"><a href="#"><i class="fa-solid fa-calendar-days"></i>১১
                                                ডিসেম্বর, ২০২২</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <div class="blog-post post-style-04">
                                <div class="blog-image"><img class="img-fluid" src="{{ asset('assets/frontend/images') }}/blog/93.jpg" alt=""></div>
                                <div class="blog-post-details"><span class="badge text-pink">বরিশাল</span>
                                    <h6 class="blog-title"><a href="#">‘মুক্তিযুদ্ধে আনোয়ার উল আলমের অবদান অপরিসীম’ </a></h6>
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
                            <div class="pagination-wrap d-flex justify-content-end">
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
                        @include('frontend.partials._sidebar_trending_news')
                        <div class="widget">
                            <div class="add-banner">
                                <a href="#"> <img class="img-fluid w-100" src="{{ asset('assets/frontend/images') }}//ads/ads-336×280.jpg" alt="image"> </a>
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
