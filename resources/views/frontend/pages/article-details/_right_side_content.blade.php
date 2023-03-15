<div class="sidebar">
    <div class="widget ">
        <div class="add-banner mt-0">
            <a href="#"> <img class="img-fluid w-100" src="{{ asset('assets/frontend/images') }}/ads/ads-300x250.jpg" alt="image">
            </a>
        </div>
    </div>
    <div class="widget position-relative custom-widget">
        <h6 class="widget-title">ক্যাটেগরী সার্চ </h6>
        <div class="primary-search-wrapper two d-flex align-items-center justify-content-center flex-wrap flex-column">
            <div class="custom-single-select mb-2">
                <select class="form-control select2">
                    <option>ক্যাটেগরী</option>
                    <option>ঢাকা</option>
                    <option>চট্রগ্রাম</option>
                    <option>রাজশাহী</option>
                    <option>খুলনা</option>
                    <option>বরিশাল</option>

                </select>
            </div>
            <div class="custom-single-select mb-2">
                <select class="form-control select2">
                    <option>সাব-ক্যাটেগরী</option>
                    <option>ঢাকা</option>
                    <option>কুমিল্লা</option>
                    <option>ফেনী</option>
                    <option>সিলেট</option>
                </select>

            </div>
            <div class="custom-single-select mb-3">
                <select class="form-control select2">
                    <option>চাইল্ড-ক্যাটেগরী</option>
                    <option>চাঁদপুর উপজেলা</option>
                    <option>কুমিল্লা সদর উপজেলা</option>
                    <option>লক্ষীপুর উপজেলা</option>
                </select>
            </div>
            <div class="search-btn-wrapper">
                <div class="primary-btn d-flex justify-content-center">
                    <a href="#">সার্চ করুন</a>
                </div>
            </div>
        </div>
    </div>
    <div class="widget">
        <div class="custom-ad-box">
            <img src="{{ asset('assets/frontend/images') }}/ads/custom-ads-2.jpg" alt="">
        </div>
    </div>
    <div class="widget post-widget">
        <h6 class="widget-title"> আলোচিত খবর </h6>
        <div class="news-tab">
            <ul class="nav nav-pills" id="pills-tab03" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-latest-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-latest" type="button" role="tab"
                            aria-controls="pills-latest" aria-selected="true">সর্বশেষ সংবাদ
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-trending-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-trending" type="button" role="tab"
                            aria-controls="pills-trending" aria-selected="false" tabindex="-1"> শীর্ষ
                        সংবাদ
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-videos-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-videos" type="button" role="tab"
                            aria-controls="pills-videos" aria-selected="false" tabindex="-1">জনপ্রিয়
                        সংবাদ
                    </button>
                </li>

            </ul>
            <div class="tab-content" id="pills-tabContent03">
                <div class="tab-pane fade show active" id="pills-latest" role="tabpanel"
                     aria-labelledby="pills-latest-tab" tabindex="0">
                    <div class="blog-post post-style-04 custom">
                        <div class="blog-image"><img class="img-fluid" src="{{ asset('assets/frontend/images') }}/blog/latest/01.jpg"
                                                     alt=""></div>
                        <div class="blog-post-details"><span class="badge text-primary">রাজনীতি </span>
                            <h6 class="blog-title"><a href="#">বিএনপি-জামায়াতের ‘অপতৎপরতা’ ঠেকানোর ঘোষণা
                                    সাংস্কৃতিক জোটের</a></h6>
                            <div class="blog-post-meta">
                                <div class="blog-post-time"><a href="#"><i
                                            class="fa-solid fa-calendar-days"></i>১১ ডিসেম্বর, ২০২২</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-post post-style-04 custom">
                        <div class="blog-image"><img class="img-fluid" src="{{ asset('assets/frontend/images') }}/blog/latest/02.jpg"
                                                     alt=""></div>
                        <div class="blog-post-details"><span class="badge text-primary">অপরাধ</span>
                            <h6 class="blog-title"><a href="#">বাংলাদেশে জঙ্গিবাদ-সন্ত্রাসবাদ নিয়ন্ত্রণে
                                    এসেছে: আইজিপি</a></h6>
                            <div class="blog-post-meta">
                                <div class="blog-post-time"><a href="#"><i
                                            class="fa-solid fa-calendar-days"></i>১১ ডিসেম্বর, ২০২২</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-post post-style-04 custom">
                        <div class="blog-image"><img class="img-fluid" src="{{ asset('assets/frontend/images') }}/blog/latest/03.jpg"
                                                     alt=""></div>
                        <div class="blog-post-details"><span class="badge text-primary">বাংলাদেশ</span>
                            <h6 class="blog-title"><a href="#">সাংবাদিকের বুম কেড়ে নেওয়া পুলিশ সদস্যকে
                                    প্রত্যাহার</a></h6>
                            <div class="blog-post-meta">
                                <div class="blog-post-time"><a href="#"><i
                                            class="fa-solid fa-calendar-days"></i>১১ ডিসেম্বর, ২০২২</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-trending" role="tabpanel"
                     aria-labelledby="pills-trending-tab" tabindex="0">
                    <div class="blog-post post-style-04 custom">
                        <div class="blog-image"><img class="img-fluid" src="{{ asset('assets/frontend/images') }}/blog/latest/01.jpg"
                                                     alt=""></div>
                        <div class="blog-post-details"><span class="badge text-primary">রাজনীতি </span>
                            <h6 class="blog-title"><a href="#">বিএনপি-জামায়াতের ‘অপতৎপরতা’ ঠেকানোর ঘোষণা
                                    সাংস্কৃতিক জোটের</a></h6>
                            <div class="blog-post-meta">
                                <div class="blog-post-time"><a href="#"><i
                                            class="fa-solid fa-calendar-days"></i>১১ ডিসেম্বর, ২০২২</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-post post-style-04 custom">
                        <div class="blog-image"><img class="img-fluid" src="{{ asset('assets/frontend/images') }}/blog/latest/02.jpg"
                                                     alt=""></div>
                        <div class="blog-post-details"><span class="badge text-primary">অপরাধ</span>
                            <h6 class="blog-title"><a href="#">বাংলাদেশে জঙ্গিবাদ-সন্ত্রাসবাদ নিয়ন্ত্রণে
                                    এসেছে: আইজিপি</a></h6>
                            <div class="blog-post-meta">
                                <div class="blog-post-time"><a href="#"><i
                                            class="fa-solid fa-calendar-days"></i>১১ ডিসেম্বর, ২০২২</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-post post-style-04 custom">
                        <div class="blog-image"><img class="img-fluid" src="{{ asset('assets/frontend/images') }}/blog/latest/03.jpg"
                                                     alt=""></div>
                        <div class="blog-post-details"><span class="badge text-primary">বাংলাদেশ</span>
                            <h6 class="blog-title"><a href="#">সাংবাদিকের বুম কেড়ে নেওয়া পুলিশ সদস্যকে
                                    প্রত্যাহার</a></h6>
                            <div class="blog-post-meta">
                                <div class="blog-post-time"><a href="#"><i
                                            class="fa-solid fa-calendar-days"></i>১১ ডিসেম্বর, ২০২২</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-videos" role="tabpanel"
                     aria-labelledby="pills-videos-tab" tabindex="0">
                    <div class="blog-post post-style-04 custom">
                        <div class="blog-image"><img class="img-fluid" src="{{ asset('assets/frontend/images') }}/blog/latest/01.jpg"
                                                     alt=""></div>
                        <div class="blog-post-details"><span class="badge text-primary">রাজনীতি </span>
                            <h6 class="blog-title"><a href="#">বিএনপি-জামায়াতের ‘অপতৎপরতা’ ঠেকানোর ঘোষণা
                                    সাংস্কৃতিক জোটের</a></h6>
                            <div class="blog-post-meta">
                                <div class="blog-post-time"><a href="#"><i
                                            class="fa-solid fa-calendar-days"></i>১১ ডিসেম্বর, ২০২২</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-post post-style-04 custom">
                        <div class="blog-image"><img class="img-fluid" src="{{ asset('assets/frontend/images') }}/blog/latest/02.jpg"
                                                     alt=""></div>
                        <div class="blog-post-details"><span class="badge text-primary">অপরাধ</span>
                            <h6 class="blog-title"><a href="#">বাংলাদেশে জঙ্গিবাদ-সন্ত্রাসবাদ নিয়ন্ত্রণে
                                    এসেছে: আইজিপি</a></h6>
                            <div class="blog-post-meta">
                                <div class="blog-post-time"><a href="#"><i
                                            class="fa-solid fa-calendar-days"></i>১১ ডিসেম্বর, ২০২২</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-post post-style-04 custom">
                        <div class="blog-image"><img class="img-fluid" src="{{ asset('assets/frontend/images') }}/blog/latest/03.jpg"
                                                     alt=""></div>
                        <div class="blog-post-details"><span class="badge text-primary">বাংলাদেশ</span>
                            <h6 class="blog-title"><a href="#">সাংবাদিকের বুম কেড়ে নেওয়া পুলিশ সদস্যকে
                                    প্রত্যাহার</a></h6>
                            <div class="blog-post-meta">
                                <div class="blog-post-time"><a href="#"><i
                                            class="fa-solid fa-calendar-days"></i>১১ ডিসেম্বর, ২০২২</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="widget">
        <div class="custom-ad-box">
            <img src="{{ asset('assets/frontend/images') }}/ads/custom-ads-1.jpg" alt="">
        </div>
    </div>
    <div class="widget position-relative custom-widget">
        <h6 class="widget-title">আমার এলাকার খবর</h6>
        <div class="primary-search-wrapper two d-flex align-items-center justify-content-center flex-wrap flex-column">
            <div class="custom-single-select mb-2">
                <select class="form-control select2">
                    <option>বিভাগ</option>
                    <option>ঢাকা</option>
                    <option>চট্রগ্রাম</option>
                    <option>রাজশাহী</option>
                    <option>খুলনা</option>
                    <option>বরিশাল</option>

                </select>
            </div>
            <div class="custom-single-select mb-2">
                <select class="form-control select2">
                    <option>জেলা</option>
                    <option>ঢাকা</option>
                    <option>কুমিল্লা</option>
                    <option>ফেনী</option>
                    <option>সিলেট</option>
                </select>

            </div>
            <div class="custom-single-select mb-3">
                <select class="form-control select2">
                    <option>উপজেলা</option>
                    <option>চাঁদপুর উপজেলা</option>
                    <option>কুমিল্লা সদর উপজেলা</option>
                    <option>লক্ষীপুর উপজেলা</option>
                </select>
            </div>
            <div class="search-btn-wrapper">
                <div class="primary-btn d-flex justify-content-center">
                    <a href="#">সার্চ করুন</a>
                </div>
            </div>
        </div>
    </div>
    <div class="widget ">
        <div class="add-banner mt-0">
            <a href="#"> <img class="img-fluid w-100" src="{{ asset('assets/frontend/images') }}/ads/ads-300x250.jpg" alt="image">
            </a>
        </div>
    </div>
</div>
