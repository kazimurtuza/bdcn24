@extends('frontend.layout.master')

@section('breaking-news')
    @include('frontend.partials._breaking_news',['breakingNews'=>$breakingNews])
@endsection


@section('main_content')
    <!--=================================
    Blog -->
    @include('frontend.home-partials._top_slider_section',['featuredRight' => $featuredRight,'featured'=>$featured,'featuredLef'=>$featuredLef])
    <!--=================================
        Blog -->
    <!--=================================
        hr -->

    <!--=================================
      Category Slider -->
    @include('frontend.home-partials._mobile_category_slider')
    <!--=================================
      Category Slider -->

    <!--=================================
      Blog Slider -->
    @include('frontend.home-partials._recent_news')
    <!--=================================
      Blog Slider -->

    <!--  Ads wrapper start-->
    <div class="custom-ads-box row justify-content-center position-relative">
        <div class="sidebar-img my-2 text-center">
            <a href="#" class="d-none d-md-block"> <img class="img-fluid" src="{{ asset('assets/frontend/images') }}/ads/ads-1024x90.jpg" alt="image">
            </a>
            <a href="#" class="d-block d-md-none"> <img class="img-fluid border-radius-5" src="{{ asset('assets/frontend/images') }}/ads/ads-300x250.jpg"
                                                        alt="image"> </a>
        </div>
    </div>
    <!--  Ads wrapper end-->

    <!--=================================
      live score -->
    @include('frontend.home-partials._live_score')
    <!--=================================
      live score -->

    <!--=================================
      explore-products -->
    <section class="space-sm-pb explore-products">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-8">

                    @include('frontend.home-partials._bangladesh_news')

                    <!--  Ads wrapper start-->
                    <div class="custom-ads-box row justify-content-center position-relative">
                        <div class="sidebar-img my-2 text-center">
                            <a href="#"> <img class="img-fluid" src="{{ asset('assets/frontend/images') }}/ads/ads-728x90.jpg" alt="image"> </a>
                        </div>
                    </div>
                    <!--  Ads wrapper end-->
                    @include('frontend.home-partials._bottom_of_bangladesh_news')
                </div>
                <!--=================================
            explore-products -->

                <!--=================================
            sidebar -->
                <div class="col-lg-5 col-xl-4">
                    @include('frontend.home-partials._bangladesh_right_sidebar')
                </div>
                <!--=================================
            sidebar -->


            </div>
        </div>
    </section>
    <!--=================================
      explore-products -->

    <!--  Ads wrapper start-->
    <div class="custom-ads-box row justify-content-center position-relative pb-4">
        <div class="sidebar-img my-2 text-center">
            <a href="#"> <img class="img-fluid" src="{{ asset('assets/frontend/images') }}/ads/ads-970x90.jpg" alt="image"> </a>
        </div>
    </div>
    <!--  Ads wrapper end-->

    <!--=================================
      Live Videos -->
    @include('frontend.home-partials._live-videos')
    <!--=================================
      Live Videos -->

    <!--=================================
      Tab -->
    <section class="space-lg-pt2 explore-products">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-8">

                    @include('frontend.home-partials._bottom_category_first')
                    @include('frontend.home-partials._bottom_category_second')
                </div>
                <div class="col-lg-5 col-md-12 col-xl-4">
                    @include('frontend.home-partials._bottom_category_sidebar')
                </div>
            </div>
        </div>
    </section>
    <!--=================================
      Tab -->

    <div class="custom-ads-box row justify-content-center position-relative py-4 d-none d-md-block">
        <div class="sidebar-img my-2 text-center">
            <a href="#"> <img class="img-fluid" src="{{ asset('assets/frontend/images') }}/ads/ads-970x90.jpg" alt="image"> </a>
        </div>
    </div>

@endsection

@section('js')
    <script type="text/javascript">

        const options = document.querySelectorAll(".poll-items");
        for (let i = 0; i < options.length; i++) {
            options[i].addEventListener("click", () => {
                for (let j = 0; j < options.length; j++) {
                    if (options[j].classList.contains("selected")) {
                        options[j].classList.remove("selected");
                    }
                }
                options[i].classList.add("selected");
                for (let k = 0; k < options.length; k++) {
                    options[k].classList.add("selectall");
                }
                let forVal = options[i].getAttribute("for");
                let selectInput = document.querySelector("#" + forVal);
                let getAtt = selectInput.getAttribute("type");
                if (getAtt == "checkbox") {
                    selectInput.setAttribute("type", "radio");
                } else if (selectInput.checked == true) {
                    options[i].classList.remove("selected");
                    selectInput.setAttribute("type", "checkbox");
                }
                let array = [];
                for (let l = 0; l < options.length; l++) {
                    if (options[l].classList.contains("selected")) {
                        array.push(l);
                    }
                }
                if (array.length == 0) {
                    for (let m = 0; m < options.length; m++) {
                        options[m].removeAttribute("class");
                    }
                }
            });
        }
    </script>
@endsection
