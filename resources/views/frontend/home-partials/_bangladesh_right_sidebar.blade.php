<div class="sidebar">
    <div class="widget post-widget z-index-5">
        <h6 class="widget-title"> অনলাইন ভোট </h6>
        <div class="feature-box-wrapper mb-1">
            <div class="blog-post post-style-02 custom-2">
                <div class="blog-image"><img class="img-fluid" src="{{ asset('assets/frontend/images') }}/blog/09.jpg" alt=""></div>
                <div class="blog-post-details">
                    <h6 class="blog-title"><a href="#"> আর্জেন্টিনার বিপক্ষে মদরিচের মনে পড়বে ১৬ বছর
                            আগের সেই</a></h6>
                    <p class="mb-0">বর্তমানে শেয়ারবাজার আটকে আছে নিয়ন্ত্রক সংস্থার বেঁধে দেওয়া সর্বনিম্ন
                        দাম বা ফ্লোর প্রাইসে। এখন প্রশ্ন হচ্ছে, যদি আরও কিছুদিন ফ্লোর প্রাইস আরোপিত
                        থাকে, তাহলে কি..</p>
                </div>
            </div>
        </div>
        <div class="poll-area">
            <input type="checkbox" name="poll" id="opt-1">
            <input type="checkbox" name="poll" id="opt-2">
            <input type="checkbox" name="poll" id="opt-3">
            <label for="opt-1" class="opt-1 poll-items">
                <div class="row">
                    <div class="column">
                        <span class="circle"></span>
                        <span class="text">হ্যাঁ</span>
                    </div>
                    <span class="percent">40%</span>
                </div>
                <div class="progress" style='--w:40;'></div>
            </label>
            <label for="opt-2" class="opt-2 poll-items">
                <div class="row">
                    <div class="column">
                        <span class="circle"></span>
                        <span class="text">না</span>
                    </div>
                    <span class="percent">20%</span>
                </div>
                <div class="progress" style='--w:20;'></div>
            </label>
            <label for="opt-3" class="opt-3 poll-items">
                <div class="row">
                    <div class="column">
                        <span class="circle"></span>
                        <span class="text">মন্তব্য নাই</span>
                    </div>
                    <span class="percent">40%</span>
                </div>
                <div class="progress" style='--w:40;'></div>
            </label>
        </div>
        <div class="primary-btn d-flex justify-content-center mt-2 mb-4">
            <a href="#">ভোট দিন</a>
        </div>
    </div>
    @include('frontend.partials._sidebar_trending_news', ['extra_trending_sidebar_main_class' => ' z-index-5 mt-4 mt-md-0'])
</div>
