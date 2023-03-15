<section class="news-politics-post">
    <div class="container">
        <div class="row">
            <div class=" col-xl-6 col-lg-12  mb-xl-0 mb-md-4 order-xl-2 mb-0">
                <?php $firstFeatured = $featured[0];?>

                <div class="blog-post post-style-01">
                    <div class="blog-image"><img class="img-fluid"
                                                 src="{{ asset($firstFeatured->uploadImage->image_full_path) }}" alt="">
                        <div class="audio-video-wrapper d-flex align-items-center justify-content-end">
                            @if($firstFeatured->youtube_video_link)
                            <div class="video-icon item"><a href="#"><i class="fa-solid fa-play"></i></a></div>
                            @endif
                                @if($firstFeatured->soundcloud_audio_link)
                            <div class="audio-icon item"><a href="#"><i class="fa-solid fa-volume-high"></i></a></div>
                                    @endif
                        </div>
                    </div>
                    <div class="blog-post-details"><span
                                class="badge badge-large bg-blue">{{$firstFeatured->category->name}}</span>
                        <h4 class="blog-title"><a href="#">{{$firstFeatured->title}}</a></h4>
                        <div class="blog-post-meta">
                            <div class="blog-post-time"><a href="#"><i class="fa-solid fa-calendar-days">
                                    </i>{{date('d M Y',strtotime($firstFeatured->publish_at))}}</a></div>
                        </div>
                    </div>
                </div>
                <div class="row mobile-version-none">
                    @foreach($featured as $key=>$featuredList)
                        @if($key!=0)
                            <div class="col-md-4 col-xl-4">
                                <div class="blog-post post-style-02 mt-3">
                                    <div class="blog-image"><img class="img-fluid"
                                                                 src="{{ asset($featuredList->uploadImage->image_full_path)}}"
                                                                 alt="">
                                        <div class="audio-video-wrapper d-flex align-items-center justify-content-end">
                                            @if($featuredList->youtube_video_link)
                                            <div class="video-icon item"><a href="#"><i
                                                            class="fa-solid fa-play"></i></a></div>
                                            @endif

                                            @if($featuredList->soundcloud_audio_link)
                                            <div class="audio-icon item"><a href="#"><i
                                                            class="fa-solid fa-volume-high"></i></a>
                                            </div>
                                                @endif
                                        </div>
                                    </div>
                                    <span class="badge badge-large  @if($key==1) bg-orange @elseif($key==2) bg-primary @else bg-purple @endif">{{$featuredList->category->name}}</span>
                                    <div class="blog-post-details">
                                        <h6 class="blog-title"><a href="#">{{$featuredList->title}}</a></h6>
                                        <div class="blog-post-time">
                                            <a href="#"><i
                                                        class="fa-solid fa-calendar-days"></i>{{date('d M Y',strtotime($featuredList->publish_at))}}
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    {{--<div class="col-md-4 col-xl-4">--}}
                    {{--<div class="blog-post post-style-02 mt-3">--}}
                    {{--<div class="blog-image"><img class="img-fluid" src="{{ asset('assets/frontend/images') }}/blog/70.jpg" alt=""></div>--}}
                    {{--<span class="badge badge-large bg-primary">বাংলাদেশ</span>--}}
                    {{--<div class="blog-post-details">--}}
                    {{--<h6 class="blog-title"><a href="#">নাসা স্পেস অ্যাপস চ্যালেঞ্জে চ্যাম্পিয়ন ড্যাফোডিলের--}}
                    {{--‘টিম ডায়মন্ডস’</a></h6>--}}
                    {{--<div class="blog-post-time"><a href="#"><i class="fa-solid fa-calendar-days"></i>১১--}}
                    {{--ডিসেম্বর, ২০২২</a></div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4 col-xl-4">--}}
                    {{--<div class="blog-post post-style-02 mt-3">--}}
                    {{--<div class="blog-image"><img class="img-fluid" src="{{ asset('assets/frontend/images') }}/blog/71.jpg" alt=""></div>--}}
                    {{--<span class="badge badge-large bg-purple">খেলাধুলা</span>--}}
                    {{--<div class="blog-post-details">--}}
                    {{--<h6 class="blog-title"><a href="#">লতিফুর রহমান নেচারনোমিকস অ্যাওয়ার্ড পেলেন অধ্যাপক--}}
                    {{--মনিরুল</a></h6>--}}
                    {{--<div class="blog-post-time"><a href="#"><i class="fa-solid fa-calendar-days"></i>১১--}}
                    {{--ডিসেম্বর, ২০২২</a></div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                </div>
                <div class="row mobile-version-show mt-3">
                    <div class="sidebar-img mb-3 text-center">
                        <a href="#"> <img class="img-fluid"
                                          src="{{ asset('assets/frontend/images') }}/ads/custom-ads-1 3.webp"
                                          alt="image"> </a>
                    </div>
                    <div class="col-12">
                        <div class="blog-post post-style-04 custom">
                            <div class="blog-image"><img class="img-fluid"
                                                         src="{{ asset('assets/frontend/images') }}/blog/01.jpg" alt="">
                                <div class="audio-video-wrapper-small d-flex align-items-center justify-content-end">
                                    <div class="video-icon item"><a href="#"><i class="fa-solid fa-play"></i></a></div>
                                    <div class="audio-icon item"><a href="#"><i class="fa-solid fa-volume-high"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-post-details">
                                <h6 class="blog-title"><a href="#">মন্দা শেয়ারবাজারে যা করতে পারেন আপনি</a></h6>
                                <div class="blog-post-meta custom">
                                    <span class="badge text-purple me-2">বাংলাদেশ</span>
                                    <div class="blog-post-time me-2"><a href="#" class="ms-2"><span><i
                                                        class="fa-solid fa-circle"></i></span>১১
                                            ডিসেম্বর, ২০২২</a></div>

                                </div>

                            </div>
                        </div>
                        <div class="blog-post post-style-04 custom">
                            <div class="blog-image"><img class="img-fluid"
                                                         src="{{ asset('assets/frontend/images') }}/blog/01.jpg" alt="">
                                <div class="audio-video-wrapper-small d-flex align-items-center justify-content-end">
                                    <div class="video-icon item"><a href="#"><i class="fa-solid fa-play"></i></a></div>
                                    <div class="audio-icon item"><a href="#"><i class="fa-solid fa-volume-high"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-post-details">
                                <h6 class="blog-title"><a href="#">মন্দা শেয়ারবাজারে যা করতে পারেন আপনি</a></h6>
                                <div class="blog-post-meta custom">
                                    <span class="badge text-purple me-2">বাংলাদেশ</span>
                                    <div class="blog-post-time me-2"><a href="#" class="ms-2"><span><i
                                                        class="fa-solid fa-circle"></i></span>১১
                                            ডিসেম্বর, ২০২২</a></div>

                                </div>

                            </div>
                        </div>
                        <div class="blog-post post-style-04 custom">
                            <div class="blog-image"><img class="img-fluid"
                                                         src="{{ asset('assets/frontend/images') }}/blog/01.jpg" alt="">
                                <div class="audio-video-wrapper-small d-flex align-items-center justify-content-end">
                                    <div class="video-icon item"><a href="#"><i class="fa-solid fa-play"></i></a></div>
                                    <div class="audio-icon item"><a href="#"><i class="fa-solid fa-volume-high"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-post-details">
                                <h6 class="blog-title"><a href="#">মন্দা শেয়ারবাজারে যা করতে পারেন আপনি</a></h6>
                                <div class="blog-post-meta custom">
                                    <span class="badge text-purple me-2">বাংলাদেশ</span>
                                    <div class="blog-post-time me-2"><a href="#" class="ms-2"><span><i
                                                        class="fa-solid fa-circle"></i></span>১১
                                            ডিসেম্বর, ২০২২</a></div>

                                </div>

                            </div>
                        </div>
                        <div class="blog-post post-style-04 custom">
                            <div class="blog-image"><img class="img-fluid"
                                                         src="{{ asset('assets/frontend/images') }}/blog/01.jpg" alt="">
                                <div class="audio-video-wrapper-small d-flex align-items-center justify-content-end">
                                    <div class="video-icon item"><a href="#"><i class="fa-solid fa-play"></i></a></div>
                                    <div class="audio-icon item"><a href="#"><i class="fa-solid fa-volume-high"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-post-details">
                                <h6 class="blog-title"><a href="#">মন্দা শেয়ারবাজারে যা করতে পারেন আপনি</a></h6>
                                <div class="blog-post-meta custom">
                                    <span class="badge text-purple me-2">বাংলাদেশ</span>
                                    <div class="blog-post-time me-2"><a href="#" class="ms-2"><span><i
                                                        class="fa-solid fa-circle"></i></span>১১
                                            ডিসেম্বর, ২০২২</a></div>

                                </div>

                            </div>
                        </div>
                        <div class="blog-post post-style-04 custom">
                            <div class="blog-image"><img class="img-fluid"
                                                         src="{{ asset('assets/frontend/images') }}/blog/01.jpg" alt="">
                                <div class="audio-video-wrapper-small d-flex align-items-center justify-content-end">
                                    <div class="video-icon item"><a href="#"><i class="fa-solid fa-play"></i></a></div>
                                    <div class="audio-icon item"><a href="#"><i class="fa-solid fa-volume-high"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-post-details">
                                <h6 class="blog-title"><a href="#">মন্দা শেয়ারবাজারে যা করতে পারেন আপনি</a></h6>
                                <div class="blog-post-meta custom">
                                    <span class="badge text-purple me-2">বাংলাদেশ</span>
                                    <div class="blog-post-time me-2"><a href="#" class="ms-2"><span><i
                                                        class="fa-solid fa-circle"></i></span>১১
                                            ডিসেম্বর, ২০২২</a></div>

                                </div>

                            </div>
                        </div>


                    </div>
                    <div class="col-12">
                        <div class="custom-ads-box row justify-content-center position-relative">
                            <div class="sidebar-img my-2 text-center">
                                <a href="#"> <img class="img-fluid"
                                                  src="{{ asset('assets/frontend/images') }}/ads/custom-ads-1 3.webp"
                                                  alt="image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 order-xl-1 mobile-version-none">
                <div class="sidebar-img mb-4 text-center">
                    <a href="#"> <img class="img-fluid" src="{{ asset('assets/frontend/images') }}/ads/ads-300x250.jpg"
                                      alt="image"> </a>
                </div>
                <div class="blog-post post-style-02">
                    <div class="blog-image custom-blog-image"><img class="img-fluid"
                                                                   src="{{ asset($featuredLef->uploadImage->image_full_path) }}"
                                                                   alt="">
                        <div class="audio-video-wrapper d-flex align-items-center justify-content-end">
                            @if($featuredLef->youtube_video_link)
                                <div class="video-icon item"><a href="#"><i class="fa-solid fa-play"></i></a></div>
                            @endif

                            @if($featuredLef->soundcloud_audio_link)
                                <div class="audio-icon item"><a href="#"><i class="fa-solid fa-volume-high"></i></a>
                                </div>
                            @endif
                        </div>
                    </div>
                    <span class="badge badge-large bg-red">{{$featuredLef->category->name}}</span>
                    <div class="blog-post-details">
                        <h6 class="blog-title"><a href="#">{{$featuredLef->title}}</a>
                        </h6>
                        <div class="blog-post-time">
                            <a href="#"><i
                                        class="fa-solid fa-calendar-days">{{date('d M Y',strtotime($featuredLef->publish_at))}}</i></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-3 col-lg-8 col-md-6 mt-md-0 mt-4 order-xl-3 mobile-version-none">
                {{--<div class="blog-post post-style-04 custom">--}}
                {{--<div class="blog-image"><img class="img-fluid" src="{{ asset('assets/frontend/images') }}/blog/01.jpg" alt="">--}}
                {{--<div class="audio-video-wrapper-small d-flex align-items-center justify-content-end">--}}
                {{--<div class="video-icon item"><a href="#"><i class="fa-solid fa-play"></i></a></div>--}}
                {{--<div class="audio-icon item"><a href="#"><i class="fa-solid fa-volume-high"></i></a></div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="blog-post-details"><span class="badge text-purple">বাংলাদেশ</span>--}}
                {{--<h6 class="blog-title"><a href="#">মন্দা শেয়ারবাজারে যা করতে পারেন আপনি</a></h6>--}}
                {{--<div class="blog-post-meta">--}}
                {{--<div class="blog-post-time me-3"><a href="#"><i class="fa-solid fa-calendar-days"></i>১১--}}
                {{--ডিসেম্বর, ২০২২</a></div>--}}

                {{--</div>--}}

                {{--</div>--}}
                {{--</div>--}}

                @foreach($featuredRight as $index=>$rightPost)
                    @if($index>0)
                        <div class="blog-post post-style-04 custom">
                            <div class="blog-image"><img class="img-fluid"
                                                         src="{{ asset($rightPost->uploadImage->image_full_path) }}"
                                                         alt=""></div>
                            <div class="blog-post-details"><span
                                        class="badge text-purple">{{$rightPost->category->name}}</span>
                                <h6 class="blog-title"><a href="#">‘{{$rightPost->title}}’</a></h6>
                                <div class="blog-post-meta">
                                    <div class="blog-post-time me-3"><a href="#"><i
                                                    class="fa-solid fa-calendar-days"></i>
                                            {{date('d M Y',strtotime($rightPost->publish_at))}}</a></div>

                                </div>

                            </div>
                        </div>
                    @endif
                @endforeach
                <?php $firstRight = $featuredRight[0] ?>
                <div class="feature-box-wrapper">
                    <div class="blog-post post-style-02">
                        <div class="blog-image custom-blog-image-2">
                            <img class="img-fluid" src="{{ asset($firstRight->uploadImage->image_full_path) }}" alt="">
                            <div class="audio-video-wrapper d-flex align-items-center justify-content-end">
                                @if($firstRight->youtube_video_link)
                                <div class="video-icon item"><a href="#"><i class="fa-solid fa-play"></i></a></div>
                                @endif
                                    @if($featuredLef->soundcloud_audio_link)
                                <div class="audio-icon item"><a href="#"><i class="fa-solid fa-volume-high"></i></a>
                                </div>
                                    @endif
                            </div>
                        </div>
                        <span class="badge badge-large bg-red">{{$firstRight->category->name}} </span>
                        <div class="blog-post-details">
                            <h6 class="blog-title"><a href="#">{{$firstRight->title}}</a></h6>
                            <div class="blog-post-time"><a href="#"><i class="fa-solid fa-calendar-days"></i>
                                    {{date('d M Y',strtotime($firstRight->publish_at))}}</a></div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
</section>
