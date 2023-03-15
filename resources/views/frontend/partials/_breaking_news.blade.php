<section class="breaking-news">
    <div class="container">
        <div class="row align-items-center breaking-headline-wrapper d-flex">
            <div class="breaking-headline-left ms-0 ps-1"><span class="news-btn">বিশেষ সংবাদ <i
                        class="fa-solid fa-caret-right"></i></span></div>
            <div class="breaking-headline-right">
                <div class="owl-carousel arrow-styel-03" data-nav-dots="false" data-nav-arrow="true" data-items="4"
                     data-xl-items="4" data-lg-items="3" data-md-items="3" data-sm-items="2" data-xs-items="2"
                     data-xx-items="1" data-autoheight="true">
                    <!-- item-01 -->
                    @foreach($breakingNews as $breakingList)
                    <div class="item">
                        <div class="news-post">
                            <div class="news-image"><img class="img-fluid" src="{{ asset($breakingList->uploadImage->image_full_path)}}" alt=""></div>
                            <div class="news-post-details">
                                <h6 class="news-title"><a href="#"> {{$breakingList->title}}</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{--<!-- item-02 -->--}}
                    {{--<div class="item">--}}
                        {{--<div class="news-post">--}}
                            {{--<div class="news-image"><img class="img-fluid" src="{{ asset('assets/frontend/images') }}/news/10.jpg" alt=""></div>--}}
                            {{--<div class="news-post-details">--}}
                                {{--<h6 class="news-title"><a href="#"> ফিফার শাস্তি থেকে বেঁচে গেলেন মেসি–মার্তিনেজরা</a>--}}
                                {{--</h6>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- item-03 -->--}}
                    {{--<div class="item">--}}
                        {{--<div class="news-post">--}}
                            {{--<div class="news-image"><img class="img-fluid" src="{{ asset('assets/frontend/images') }}/news/05.jpg" alt=""></div>--}}
                            {{--<div class="news-post-details">--}}
                                {{--<h6 class="news-title"><a href="#"> ফিফার শাস্তি থেকে বেঁচে গেলেন মেসি–মার্তিনেজরা</a>--}}
                                {{--</h6>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- item-04 -->--}}
                    {{--<div class="item">--}}
                        {{--<div class="news-post">--}}
                            {{--<div class="news-image"><img class="img-fluid" src="{{ asset('assets/frontend/images') }}/news/06.jpg" alt=""></div>--}}
                            {{--<div class="news-post-details">--}}
                                {{--<h6 class="news-title"><a href="#"> ফিফার শাস্তি থেকে বেঁচে গেলেন মেসি–মার্তিনেজরা</a>--}}
                                {{--</h6>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- item-05 -->--}}
                    {{--<div class="item">--}}
                        {{--<div class="news-post">--}}
                            {{--<div class="news-image"><img class="img-fluid" src="{{ asset('assets/frontend/images') }}/news/07.jpg" alt=""></div>--}}
                            {{--<div class="news-post-details">--}}
                                {{--<h6 class="news-title"><a href="#"> ফিফার শাস্তি থেকে বেঁচে গেলেন মেসি–মার্তিনেজরা</a>--}}
                                {{--</h6>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
            <div class="breaking-news-slide"></div>
        </div>
    </div>
</section>
