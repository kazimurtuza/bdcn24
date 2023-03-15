@extends('frontend.layout.master')
@section('breaking-news')

    <section class="breaking-news custom">
        <div class="container">
            <div class="row align-items-center breaking-headline-wrapper d-flex">
                <div class="breadcumb-wrapper">
                    <div class="breadcumb-item d-flex align-item-center justify-content-start">
                        <span class="breadcumb-home"><i class="fa-solid fa-house me-1"></i> হোম</span> <span
                            class="mx-2">-</span>
                        <span class="breadcumb-category">খেলাধুলা</span><span class="mx-2">-</span>
                        <span class="breadcumb-post-title">মেসিকে থামাতে মানুষের পক্ষে যা যা করা সম্ভব, সব করবেন দেশম</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


@section('main_content')

    <!--=================================
explore-products -->
    <section class="space-pb mt-3 explore-products">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-8 order-1">
                    <!--  Ads wrapper start-->
                    <div class="custom-ads-box row justify-content-center position-relative">
                        <div class="sidebar-img mt-1 mb-2 text-center">
                            <a href="#"> <img class="img-fluid" src="{{ asset('assets/frontend/images') }}/ads/ads-970x90.jpg" alt="image"> </a>
                        </div>
                    </div>
                    <!--  Ads wrapper end-->
                    <div class="post-details-wrapper mt-2 ps-0 ps-md-4 pe-md-2 pe-0">
                        <div class="post-top-content">
                            <div class="post-date-wrap">
                                <span><i class="fa-regular fa-clock me-1"></i> প্রকাশ: ১৫ ডিসেম্বর ২০২২, ০৮: ০১</span>
                            </div>
                            <div class="post-title-wrap">
                                <h1>মেসিকে থামাতে মানুষের পক্ষে যা যা করা সম্ভব, সব করবেন দেশম</h1>
                            </div>
                            <div class="post-subtitle-wrap">
                                <p><span class="quote-left"><i class="fa-solid fa-quote-left"></i></span>নিরপেক্ষ সরকারের
                                    অধীন নির্বাচনে বিএনপি জয়লাভ করলে কীভাবে দেশ মেরামত করা হবে, তার রূপরেখা অচিরেই প্রকাশ
                                    করা হবে বলে জানিয়েছেন দলটির জাতীয় স্থায়ী কমিটির সদস্য
                                    খন্দকার মোশাররফ হোসেন। শহীদ বুদ্ধিজীবী দিবস উপলক্ষে আজ বুধবার বিকেলে জাতীয় প্রেসক্লাবে
                                    বিএনপি আয়োজিত এক আলোচনা সভায় প্রধান অতিথির বক্তব্যে তিনি এ কথা বলেন।<span
                                        class="quote-right"><i class="fa-solid fa-quote-right"></i></span></p>
                            </div>
                        </div>
                        <div class="post-featured-image-box mt-2">
                            <img src="{{ asset('assets/frontend/images') }}/Featured-images/post-featured-images.jpg" alt="">
                            <small class="featured-image-caption">ফ্রান্সের কোচ দিদিয়ের দেশম <span class="mx-1">|</span>
                                <span class="image-source">ছবিঃ রয়টার্স</span></small>
                        </div>
                        <div class="post-meta-wrapper mt-3 d-flex justify-content-between align-items-end">
                            <div class="post-meta d-flex align-item-center justify-content-start">
                                <div class="post-author d-flex align-item-center"><a href="#" class="mb-0"><img
                                            src="{{ asset('assets/frontend/images') }}/avatar/07.jpg" alt=""></a></div>
                                <div class="post-designation">
                                    <p>মঈনুল ইসলাম গাজী</p>
                                    <span>নিজস্ব প্রতিবেদক ,<span class="ms-1">ঢাকা</span></span>
                                </div>
                            </div>
                            <div class="post-share-wrap ">
                                <ul class="list-unstyled share-box-social-2 two d-flex justify-content-end align-items-center">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-quora"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                                <div class="blog-post-share custom d-inline d-md-none">
                                    <div class="share-box"><a href="#" data-bs-toggle="modal" data-bs-target="#share-modal"><i class="fa-solid fa-share-nodes me-2"></i>শেয়ার</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Social Share Modal Start -->
                        <div class="modal fade animate" id="share-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content animate-bottom">
                                    <div class="modal-body share-social-mody">
                                        <h5><i class="fa-solid fa-share-nodes me-1"></i> শেয়ার করুন</h5>
                                        <div class="post-share-wrap">
                                            <ul class="list-unstyled share-box-social-2 d-flex justify-content-end align-items-center">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-quora"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Social Share Modal End -->
                        <div class="post-body-content mt-3">
                            <div class="podcast-wrapper mb-3">
                                <iframe width="100%" height="100" scrolling="no" frameborder="no" allow="autoplay"
                                        src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1394894938&color=%235c5c4c&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                                <!--
                                Follow the soundcloud api link --  https://developers.soundcloud.com/docs/api/html5-widget#parameters
                                -->
                                <div
                                    style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;">
                                    <a href="https://soundcloud.com/zzzikama" title="محمد سعيد - قالوا عليكي"
                                       target="_blank" style="color: #cccccc; text-decoration: none;">محمد سعيد - قالوا
                                        عليكي</a> · <a href="https://soundcloud.com/zzzikama/alo-aleky"
                                                       title="Mohammed Saeed - 2alo 3aleky | محمد سعيد - قالوا عليكي"
                                                       target="_blank" style="color: #cccccc; text-decoration: none;">Mohammed
                                        Saeed - 2alo 3aleky | محمد سعيد - قالوا عليكي</a>
                                </div>
                            </div>
                            <div class="ads-wrapper">
                                <div class="ads-content-body d-flex justify-content-between flex-wrap">
                                    <div class="content-box">
                                        <p class="z-index-5">‘মানুষের পক্ষে যা যা করা সম্ভব, আমরা তা–ই করব’—কথাটা ফ্রান্স
                                            কোচ দিদিয়ের দেশমের। কাল রাতে সেমিফাইনালে মরক্কোকে হারিয়ে ফাইনালে ওঠার পর কথাটা
                                            <a href="#">বিইন স্পোর্টসকে</a> বলেছেন দেশম। কোন বিষয়ে?
                                            বিশ্বকাপের ফাইনালে ফ্রান্সের প্রতিপক্ষ আর্জেন্টিনা। আর প্রতিপক্ষ আর্জেন্টিনা
                                            মানে তো লিওনেল মেসির মুখোমুখি হতে হবে। ৩৫ বছর বয়সেও মেসির ফর্ম দেখেই সম্ভবত
                                            কথাটা বলেছেন ফ্রান্স কোচ।</p>
                                        <p class="z-index-5">বিশ্বকাপের ফাইনালে রোববার লুসাইল স্টেডিয়ামে আর্জেন্টিনার
                                            মুখোমুখি হবে ফ্রান্স। লাতিন দলটিকে ফাইনালে তুলে আনার পথে নিজে ৫ গোল করার
                                            পাশাপাশি ৩ গোল করিয়েছেন মেসি। ‘গোল্ডেন বল’ ও ‘গোল্ডেন বুট’ জয়ের দৌড়ে ভালোভাবেই
                                            টিকে আছেন আর্জেন্টাইন তারকা। ক্যারিয়ারের শুরু থেকেই ‘ভিনগ্রহের খেলোয়াড়’ কথাটি
                                            অনেকবারই শুনেছেন মেসি। দেশমের কথা শুনেও এই কথা মনে পড়তে পারে। মেসির খেলা যেহেতু
                                            অতিমানবসুলভ, তাই তাঁকে আটকাতে রক্ত–মাংসের মানুষের পক্ষে যা যা করা
                                            সম্ভব, সেসবেরই প্রতিশ্রুতি দিয়েছেন দেশম।</p>
                                    </div>
                                    <div class="ads-box">
                                        <div class="add-banner mt-0">
                                            <a href="#"> <img class="img-fluid w-100" src="{{ asset('assets/frontend/images') }}/ads/ads-300x250.jpg"
                                                              alt="image"> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <p>ফ্রান্স সেমিফাইনালে ওঠার পর মেসিকে নিয়ে দেশমের এই মন্তব্য প্রকাশ করেছে বিইন স্পোর্টসের
                                    বরাত দিয়ে প্রকাশ করেছে ফরাসি সংবাদমাধ্যম <a href="#">‘গেট ফ্রেঞ্চ ফুটবল নিউজ’</a> ।
                                    ফ্রান্সের মতো আর্জেন্টিনাও তৃতীয় বিশ্বকাপ শিরোপার সন্ধান
                                    করবে ফাইনালে। আর মেসি
                                    সন্ধান করবেন ক্যারিয়ারের প্রথম বিশ্বকাপ শিরোপার।
                                    তাঁকে থামানো সম্ভব কি না, এই প্রশ্নের উত্তরে দেশম বলেছেন, ‘এটা ঘটতে না দিতে মানুষের
                                    পক্ষে যা যা করা সম্ভব, আমরা তা–ই করব। তবে ম্যাচ শেষে কেউ না কেউ জার্সিতে তৃতীয় তারকাটি
                                    পাবে।’ যে দেশ যতবার বিশ্বকাপ জিতেছে, ততগুলো তারকা থাকে
                                    জার্সিতে।</p>
                            </div>
                            <div class="related-post-wrap">
                                <span>আরও পড়ুন</span>
                                <a href="./index.html">
                                    <div class="related-post-item d-flex justify-content-between">
                                        <div class="related-post-title">
                                            <h2>সেমিফাইনালে হেরেও কেন নিজেদের চ্যাম্পিয়ন বলছেন মরক্কোর সমর্থকেরা</h2>
                                        </div>
                                        <div class="related-post-f-image">
                                            <img src="{{ asset('assets/frontend/images') }}/blog/05.jpg" alt="">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="post-images-box-content mb-2 mt-2">
                                <img src="{{ asset('assets/frontend/images') }}/post-image/post-image.jpg" alt="">
                                <small class="featured-image-caption">কাল রাতে বিশ্বকাপের ফাইনাল নিশ্চিত হওয়ার পর দেশমের
                                    উদ্‌যাপন <span class="mx-1">|</span> <span
                                        class="image-source">ছবিঃ রয়টার্স</span></small>
                                <div class="content-box mt-2">
                                    <p>ফ্রান্স সেমিফাইনালে ওঠার পর মেসিকে নিয়ে দেশমের এই মন্তব্য প্রকাশ করেছে বিইন
                                        স্পোর্টসের বরাত দিয়ে প্রকাশ করেছে ফরাসি সংবাদমাধ্যম <a href="#">‘গেট ফ্রেঞ্চ ফুটবল
                                            নিউজ’</a>। ফ্রান্সের মতো আর্জেন্টিনাও তৃতীয় বিশ্বকাপ শিরোপার সন্ধান
                                        করবে ফাইনালে। আর মেসি
                                        সন্ধান করবেন ক্যারিয়ারের প্রথম বিশ্বকাপ শিরোপার।
                                        তাঁকে থামানো সম্ভব কি না, এই প্রশ্নের উত্তরে দেশম বলেছেন, ‘এটা ঘটতে না দিতে মানুষের
                                        পক্ষে যা যা করা সম্ভব, আমরা তা–ই করব। তবে ম্যাচ শেষে কেউ না কেউ জার্সিতে তৃতীয়
                                        তারকাটি পাবে।’ যে দেশ যতবার বিশ্বকাপ জিতেছে, ততগুলো তারকা থাকে
                                        জার্সিতে।</p>
                                    <p class="z-index-5">বিশ্বকাপের ফাইনালে রোববার লুসাইল স্টেডিয়ামে আর্জেন্টিনার মুখোমুখি
                                        হবে ফ্রান্স। লাতিন দলটিকে ফাইনালে তুলে আনার পথে নিজে ৫ গোল করার পাশাপাশি ৩ গোল
                                        করিয়েছেন মেসি। ‘গোল্ডেন বল’ ও ‘গোল্ডেন বুট’ জয়ের দৌড়ে ভালোভাবেই
                                        টিকে আছেন আর্জেন্টাইন তারকা। ক্যারিয়ারের শুরু থেকেই ‘ভিনগ্রহের খেলোয়াড়’ কথাটি
                                        অনেকবারই শুনেছেন মেসি। দেশমের কথা শুনেও এই কথা মনে পড়তে পারে। মেসির খেলা যেহেতু
                                        অতিমানবসুলভ, তাই তাঁকে আটকাতে রক্ত–মাংসের মানুষের পক্ষে যা যা করা
                                        সম্ভব, সেসবেরই প্রতিশ্রুতি দিয়েছেন দেশম।</p>
                                </div>
                            </div>
                            <div class="ads-wrapper">
                                <div class="custom-ads-box row justify-content-center position-relative">
                                    <div class="sidebar-img mt-1 mb-2 text-center">
                                        <a href="#"> <img class="img-fluid" src="{{ asset('assets/frontend/images') }}/ads/ads-970x90.jpg" alt="image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="related-post-wrap">
                                <span>আরও পড়ুন</span>
                                <a href="./index.html">
                                    <div class="related-post-item d-flex justify-content-between">
                                        <div class="related-post-title">
                                            <h2>সেমিফাইনালে হেরেও কেন নিজেদের চ্যাম্পিয়ন বলছেন মরক্কোর সমর্থকেরা</h2>
                                        </div>
                                        <div class="related-post-f-image">
                                            <img src="{{ asset('assets/frontend/images') }}/blog/05.jpg" alt="">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="post-images-box-content mt-2">
                                <img src="{{ asset('assets/frontend/images') }}/post-image/post-image-2.jpg" alt="">
                                <small class="featured-image-caption">মেসিকে কি থামাতে পারবেন দেশম <span
                                        class="mx-1">|</span> <span class="image-source">ছবিঃ রয়টার্স</span></small>
                                <div class="content-box mt-2">
                                    <p class="z-index-5">‘মানুষের পক্ষে যা যা করা সম্ভব, আমরা তা–ই করব’—কথাটা ফ্রান্স কোচ
                                        দিদিয়ের দেশমের। কাল রাতে সেমিফাইনালে মরক্কোকে হারিয়ে ফাইনালে ওঠার পর কথাটা বিইন
                                        স্পোর্টসকে বলেছেন দেশম। কোন বিষয়ে?
                                        বিশ্বকাপের ফাইনালে ফ্রান্সের প্রতিপক্ষ আর্জেন্টিনা। আর প্রতিপক্ষ আর্জেন্টিনা মানে তো
                                        লিওনেল মেসির মুখোমুখি হতে হবে। ৩৫ বছর বয়সেও মেসির ফর্ম দেখেই সম্ভবত কথাটা বলেছেন
                                        ফ্রান্স কোচ।</p>
                                    <p class="z-index-5">বিশ্বকাপের ফাইনালে রোববার লুসাইল স্টেডিয়ামে আর্জেন্টিনার মুখোমুখি
                                        হবে ফ্রান্স। লাতিন দলটিকে ফাইনালে তুলে আনার পথে নিজে ৫ গোল করার পাশাপাশি ৩ গোল
                                        করিয়েছেন মেসি। ‘গোল্ডেন বল’ ও ‘গোল্ডেন বুট’ জয়ের দৌড়ে ভালোভাবেই
                                        টিকে আছেন আর্জেন্টাইন তারকা। ক্যারিয়ারের শুরু থেকেই ‘ভিনগ্রহের খেলোয়াড়’ কথাটি
                                        অনেকবারই শুনেছেন মেসি। দেশমের কথা শুনেও এই কথা মনে পড়তে পারে। মেসির খেলা যেহেতু
                                        অতিমানবসুলভ, তাই তাঁকে আটকাতে রক্ত–মাংসের মানুষের পক্ষে যা যা করা
                                        সম্ভব, সেসবেরই প্রতিশ্রুতি দিয়েছেন দেশম।</p>
                                </div>
                            </div>
                        </div>
                        <div class="post-tag-wrapper d-flex justify-content-start align-items-center flex-wrap mt-3">
                            <p class="mb-0 me-2"><span class="me-2"><i class="fa-solid fa-tag"></i></span>টপিক্স:</p>
                            <div class="tag-list-wrapper d-flex justify-content-start align-items-cemter flex-wrap">
                                <a href="#">রাজনীতি</a>
                                <a href="#">শিক্ষা</a>
                                <a href="#">খেলাধুলা</a>
                                <a href="#">আন্তজার্তিক</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--=================================
                sidebar -->
                <div class="col-lg-5 col-xl-4 order-3 order-md-2">
                    @include('frontend.pages.article-details._right_side_content')
                </div>
                <!--=================================
                sidebar -->
                <div class="col-lg-7 col-xl-8 mt-4 order-2 order-md-3">
                    @include('frontend.pages.article-details._comments')
                </div>

                <!--=================================
                explore-products -->
            </div>
        </div>
    </section>
    <!--=================================
    explore-products -->

    <!--=================================
    Blog Slider -->
    @include('frontend.pages.article-details._more_news_slider')
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

        var btn1 = document.querySelector('#like-color');
        var btn2 = document.querySelector('#dislike-color');
        btn1.addEventListener('click', function () {
            if (btn2.classList.contains('dislike-color')) {
                btn2.classList.remove('dislike-color');
            }
            this.classList.toggle('like-color');
        });
        btn2.addEventListener('click', function () {
            if (btn1.classList.contains('like-color')) {
                btn1.classList.remove('like-color');
            }
            this.classList.toggle('dislike-color');
        });
    </script>
@endsection
