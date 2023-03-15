@extends('frontend.layout.master')

@section('breaking-news')

    <section class="breaking-news custom preview">
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
            <div class="row justify-content-center">
                <div class="col-lg-7 col-xl-8 order-1">
                    <!--  Ads wrapper start-->
                    {{--<div class="custom-ads-box row justify-content-center position-relative">--}}
                        {{--<div class="sidebar-img mt-1 mb-2 text-center">--}}
                            {{--<a href="#"> <img class="img-fluid" src="{{ asset('assets/frontend/images') }}/ads/ads-970x90.jpg" alt="image"> </a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <!--  Ads wrapper end-->
                    <div class="post-details-wrapper mt-2 ps-0 ps-md-4 pe-md-2 pe-0">
                        <div class="post-top-content">
                            <div class="post-date-wrap">
                                <span><i class="fa-regular fa-clock me-1"></i> প্রকাশ: ১৫ ডিসেম্বর ২০২২, ০৮: ০১</span>
                            </div>
                            <div class="post-title-wrap">
                                <h1>{{$postDetails->title}}</h1>
                            </div>
                            <div class="post-subtitle-wrap">
                                <p><span class="quote-left"><i class="fa-solid fa-quote-left"></i></span>
                                    {{$postDetails->subtitle}}
                                    <span
                                            class="quote-right"><i class="fa-solid fa-quote-right"></i></span></p>
                            </div>
                        </div>
                        <div class="post-featured-image-box mt-2">
                            <img src="{{asset($postDetails->uploadImage->image_full_path)}}" alt="">
                            <small class="featured-image-caption">{{$postDetails->uploadImage->name}} <span class="mx-1">|</span>
                                <span class="image-source">ছবিঃ রয়টার্স</span></small>
                        </div>
                        <div class="post-meta-wrapper mt-3 d-flex justify-content-between align-items-end">
                            <div class="post-meta d-flex align-item-center justify-content-start">
                                <div class="post-author d-flex align-item-center"><a href="#" class="mb-0"><img
                                                src="{{ asset('assets/frontend/images') }}/avatar/07.jpg" alt=""></a></div>
                                <div class="post-designation">
                                    <p>{{$postDetails->reporterInfo->bn_full_name}}</p>
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
                            @if($postDetails->soundcloud_audio_link)
                            <div class="podcast-wrapper mb-3">
                                   {{$postDetails->soundcloud_audio_link}}
                            </div>
                            @endif
                            <div class="ads-wrapper">
                                <div class="ads-content-body d-flex justify-content-between flex-wrap">
                                    <div class="content-box">
                                        {!! $postDetails->first_description !!}
                                    </div>
                                    <div class="ads-box">
                                        <div class="add-banner mt-0">
                                            <a href="#"> <img class="img-fluid w-100" src="{{ asset('assets/frontend/images') }}/ads/ads-300x250.jpg"
                                                              alt="image"> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" pt-3">
                               {!! $postDetails->second_description !!}
                            </div>

                            @foreach($postDetails->postSection as $postSection)
                            <div class="post-images-box-content mb-2 mt-2">
                                @if($postSection->image_id)
                                <img src="{{asset($postSection->sectionImage->image_full_path)}}" alt="">
                                <small class="featured-image-caption">{{$postSection->image_caption}}<span class="mx-1">|</span> <span
                                            class="image-source">ছবিঃ রয়টার্স</span></small>
                                @endif
                                <div class="content-box mt-2">
                                       {!! $postSection->description !!}
                                </div>
                            </div>
                                @if($postSection->related_post_id)
                                    <div class="related-post-wrap">
                                        <span>আরও পড়ুন</span>
                                        <a href="./index.html">
                                            <div class="related-post-item d-flex justify-content-between">
                                                <div class="related-post-title">
                                                    <h2>{{$postSection->relatedPost->title}}</h2>
                                                </div>
                                                <div class="related-post-f-image">
                                                    <img src="{{ asset($postSection->relatedPost->uploadImage->image_full_path) }}" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endif

                            @endforeach

                        </div>

                    </div>
                </div>
                <!--=================================
                sidebar -->
                {{--<div class="col-lg-5 col-xl-4 order-3 order-md-2">--}}
                    {{--@include('frontend.pages.article-details._right_side_content')--}}
                {{--</div>--}}
                <!--=================================
                sidebar -->
                {{--<div class="col-lg-7 col-xl-8 mt-4 order-2 order-md-3">--}}
                    {{--@include('frontend.pages.article-details._comments')--}}
                {{--</div>--}}

                <!--=================================
                explore-products -->
            </div>
        </div>
    </section>
    <!--=================================
    explore-products -->

    <!--=================================
    Blog Slider -->
    {{--@include('frontend.pages.article-details._more_news_slider')--}}
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
