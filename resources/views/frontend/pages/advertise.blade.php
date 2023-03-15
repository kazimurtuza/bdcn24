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
                            <h2 class="title mb-0"><i class="fa-solid fa-bolt-lightning"></i>Advertisement</h2>
                            <div class="top-header-box position-relative mobile-version-none">
                                <div class="custom-ads-box row justify-content-center position-relative">
                                    <div class="sidebar-img  text-center">
                                        <a href="#"> <img class="img-fluid" src="{{ asset('assets/frontend/images') }}/ads/ads-1024x90.jpg" alt="image"> </a>
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

    <!--=================================
    explore-products -->
    <section class="space-pb mt-2 explore-products">
        <div class="container">
            <div class="row">
                <!--=================================
                sidebar -->
                <div class="col-lg-5 col-xl-4">
                    <div class="sidebar mt-0 mt-md-3">
                        <div class="widget position-relative">
                            <h6 class="widget-title">বিজ্ঞাপনের জন্য আবেদন </h6>
                            <div class="primary-search-wrapper two d-flex align-items-center justify-content-center flex-wrap flex-column z-index-5">
                                <div class="custom-single-select ads-content-item mb-2">
                                    <label for="" class="custom-label mb-1">বিজ্ঞাপন এর ধরণ :</label>
                                    <select class="form-control select2">
                                        <option>বিজ্ঞাপন সাইজ - ৩০০ x ২৫০ </option>
                                        <option>বিজ্ঞাপন সাইজ - ১০২৪ x ৯০</option>
                                        <option>বিজ্ঞাপন সাইজ - ৯৭০ x ৯০</option>
                                        <option>বিজ্ঞাপন সাইজ - ৭৫০ x ১০০</option>
                                        <option>বিজ্ঞাপন সাইজ - ৩৩৬ x ২৮০</option>
                                        <option>বিজ্ঞাপন সাইজ - ২০০ x ২০০</option>
                                        <option>বিজ্ঞাপন সাইজ - ৭২৮ x ৯০</option>
                                        <option>বিজ্ঞাপন সাইজ - ৯৭০ x ২৫০</option>
                                    </select>
                                </div>
                                <div class="ads-content-item mt-2 z-index-5">
                                    <label for="" class="custom-label mb-1">বিজ্ঞাপন এর বিবরণ :</label>
                                    <textarea name="name" rows="4" class="form-control"></textarea>
                                </div>
                                <div class="ads-content ads-content-item mt-3 z-index-5">
                                    <label for="" class="custom-label mb-1">প্রয়োজনীয় ফাইল :</label>
                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                </div>
                                <div class="ads-content ads-content-item mt-3 z-index-5">
                                    <label for="" class="custom-label mb-1">যোগাযোগকারীর নাম :</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="ads-content ads-content-item mt-3 z-index-5">
                                    <label for="" class="custom-label mb-1">মোবাইল নাম্বার :</label>
                                    <input type="tel" class="form-control">
                                </div>
                                <div class="ads-content ads-content-item mt-3 z-index-5">
                                    <label for="" class="custom-label mb-1">ই-মেইল :</label>
                                    <input type="email" class="form-control">
                                </div>
                                <div class="search-btn-wrapper mt-3 z-index-5">
                                    <div class="primary-btn d-flex justify-content-center">
                                        <a href="#">সাবমিট করুন</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="add-banner z-index-5">
                                <a href="#"> <img class="img-fluid w-100 z-index-5" src="{{ asset('assets/frontend/images') }}/ads/ads-336×280.jpg" alt="image"> </a>
                            </div>
                        </div>

                    </div>
                </div>
                <!--=================================
                sidebar -->
                <div class="col-lg-7 col-xl-8">
                    <div class="news-sport-posts">
                        <div class="row">
                            <div class="advertisement-content-wrapper">
                                <div class="ads-content-box">
                                    <p>সর্বশেষ ন্যাশনাল মিডিয়া সার্ভে (Kantar MRB-এর NMS 2018) অনুসারে, 6.6 মিলিয়ন মানুষ প্রতিদিন BDCN24 এর প্রিন্ট সংস্করণ পড়ে, এবং এটি সমস্ত বাংলাদেশী সংবাদপত্রের মধ্যে সর্বাধিক পাঠক সংখ্যা। বিডিসিএন24-এর সামগ্রিকভাবে শুধু ব্যাপক
                                        পাঠকই নেই, এটি উচ্চতর এসইসি (সামাজিক অর্থনৈতিক শ্রেণি) এর অধীনস্থ বাংলাদেশের সবচেয়ে জ্ঞানী পাঠকদের কাছেও পৌঁছেছে। BDCN24 পাঠকদের মূল লক্ষ্য গোষ্ঠীতে পৌঁছানোর ক্ষেত্রে অন্য যেকোনো সংবাদপত্রের চেয়ে অনেক এগিয়ে।</p>
                                    <p>bdcn24.com হল ট্রাফিক এবং পেজভিউ এর উপর ভিত্তি করে বিশ্বের "নম্বর 1" বাংলাদেশী পাশাপাশি বাংলা ভাষার ওয়েবসাইট। প্রায় 12 মিলিয়ন ব্যবহারকারী প্রতি মাসে 200 টিরও বেশি বিভিন্ন দেশ এবং অঞ্চল থেকে এই পোর্টালটি অ্যাক্সেস করে। তারা
                                        প্রতি মাসে প্রায় 280 মিলিয়ন পেজভিউ তৈরি করে। সমস্ত ডিজিটাল প্ল্যাটফর্ম, বাংলা এবং ইংরেজি পোর্টাল এবং মোবাইল অ্যাপের মাধ্যমে, BDCN24 অনলাইন প্রতিদিন দেশে এবং বিদেশে 1 মিলিয়নেরও বেশি মানুষের কাছে পৌঁছেছে।</p>
                                    <p>বাংলাদেশের সীমান্তের বাইরে BDCN24 সাপ্তাহিক উত্তর আমেরিকা সংস্করণ নিউইয়র্কে ছাপা হয় এবং মার্কিন যুক্তরাষ্ট্র এবং কানাডা জুড়ে বসবাসকারী প্রবাসী বাংলাদেশীদের কাছে বিতরণ করা হয়।</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  Ads wrapper start-->
                    <div class="custom-ads-box row justify-content-center position-relative">
                        <div class="sidebar-img my-2 text-center">
                            <a href="#"> <img class="img-fluid" src="{{ asset('assets/frontend/images') }}/ads/ads-728x90.jpg" alt="image"> </a>
                        </div>
                    </div>
                    <!--  Ads wrapper end-->
                    <div class="row mt-2">
                        <div class="col-12">
                            <div>
                                <object data='{{ asset("assets/frontend/images") }}/pdf/rate_card_prothom_alo_2022.pdf' type="application/pdf" width="100%" height="678">

                                    <iframe src='{{ asset("assets/frontend/images") }}/pdf/rate_card_prothom_alo_2022.pdf' width="100%" height="678">
                                        <p>This browser does not support PDF!</p>
                                    </iframe>
                                </object>
                            </div>
                        </div>
                    </div>
                    <!--=================================
                  explore-products -->

                </div>
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

@endsection

@section('js_plugins')

@endsection

@section('js')


@endsection
