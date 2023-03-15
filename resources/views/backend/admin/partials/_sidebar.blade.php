<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="bd-icon">
            <img src="{{ asset('assets/backend') }}/images/bdcn-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <!-- <h4 class="logo-text">BDCN24</h4> -->
            <img src="{{ asset('assets/backend') }}/images/brand-logo-2.png" class="logo-text" alt="logo icon"
                 height="45" width="ms-auto">
        </div>
        <div class="toggle-icon ms-auto"><i class="fadeIn animated bx bx-menu"></i>
        </div>
    </div>
    <!--navigation-->
    <div class="multi-menu-wrap">
        <ul class="metismenu one" id="menu-2">
            <li>
                <div class="add-article">
                    <a href="{{route('admin.post.add.view')}}" class="add-a-btn">
                        <div class="parent-icon"><i class="lni lni-pencil-alt"></i>
                        </div>
                        <div class="menu-title">Add Article</div>
                    </a>
                </div>
            </li>
        </ul>
        <ul class="metismenu two" id="menu">
            <li>
                <a href="./index.html">
                    <div class="parent-icon" style="color:#ff007c;"><i class="bi bi-house-fill"></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="has-arrow">
                    <div class="parent-icon" style="color:#4CAF50;"><i class="lni lni-postcard"></i>
                    </div>
                    <div class="menu-title">Post</div>
                </a>
                <ul>
                    <li><a href="{{route('admin.publish.post.list')}}"><i class="bi bi-circle"></i>All Post</a>
                    </li>
                    {{--<li> <a href="./slider-post.html"><i class="bi bi-circle"></i>Slider Post</a>--}}
                    {{--</li>--}}
                    <li><a href="{{route('admin.featured.post.list')}}"><i class="bi bi-circle"></i>Featured Post</a>
                    </li>
                    <li><a href="{{route('admin.featured.left.list')}}"><i class="bi bi-circle"></i>Featured Left
                            Post</a></li>
                    <li><a href="{{route('admin.featured.right.list')}}"><i class="bi bi-circle"></i>Featured Right Post</a>
                    </li>
                    <li><a href="{{route('admin.featured.breaking.list')}}"><i class="bi bi-circle"></i>Breaking
                            News</a>
                    </li>
                    <li><a href="{{route('admin.pending.post.list')}}"><i class="bi bi-circle"></i>Pending Post</a>
                    </li>
                    <li><a href="{{route('admin.schedule.post.list')}}"><i class="bi bi-circle"></i>Schedule Post</a></li>
                    <li><a href="{{route('post.draft.list')}}"><i class="bi bi-circle"></i>Draft Post</a>
                    </li>

                    <li><a href="{{route('admin.unpublish.post.list')}}"><i class="bi bi-circle"></i>Unpublished
                            Post</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="has-arrow">
                    <div class="parent-icon"><i class="lni lni-image" style="color:#03A9F4;"></i>
                    </div>
                    <div class="menu-title">Media</div>
                </a>
                <ul>
                    <li><a href="{{route('admin.upload.image.view')}}"><i class="bi bi-circle"></i>Uploaded Image</a>
                    </li>
                    <li><a href="{{route('admin.upload.resource.image')}}"><i class="bi bi-circle"></i>Resource Image</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="has-arrow">
                    <div class="parent-icon"><i class="lni lni-image" style="color:#03A9F4;"></i>
                    </div>
                    <div class="menu-title">Reporter</div>
                </a>
                <ul>
                    <li><a href="{{route('admin.reporter.registration')}}"><i class="bi bi-circle"></i>Registration</a>
                    </li>
                    <li><a href="{{route('admin.reporter.list')}}"><i class="bi bi-circle"></i>Reporters List</a>
                    </li>
                    <li><a href="{{route('admin.reporter.type')}}"><i class="bi bi-circle"></i>Reporters Type</a>
                    </li>
                    <li><a href="{{route('admin.reporter.role')}}"><i class="bi bi-circle"></i>Reporters Role</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="./bookmark-post.html">
                    <div class="parent-icon" style="color:#009688;"><i class="lni lni-bookmark"></i>
                    </div>
                    <div class="menu-title">Bookmarks</div>
                </a>
            </li>
            <li class="menu-label">Users</li>
            {{--<li>--}}
            {{--<a href="{{route('admin.reporter.role')}}">--}}
            {{--<div class="parent-icon" style="color:#a400ed;"><i class="bi bi-person-lines-fill"></i>--}}
            {{--</div>--}}
            {{--<div class="menu-title">Registration</div>--}}
            {{--</a>--}}
            {{--</li>--}}
            <li>
                <a href="./reporter-list.html">
                    <div class="parent-icon" style="color:#a400ed;"><i class="bi bi-person-lines-fill"></i>
                    </div>
                    <div class="menu-title">Reporters List</div>
                </a>
            </li>
            {{--<li>--}}
            {{--<a href="{{route('admin.reporter.type')}}">--}}
            {{--<div class="parent-icon" style="color:#a400ed;"><i class="bi bi-person-lines-fill"></i>--}}
            {{--</div>--}}
            {{--<div class="menu-title">Reporters Type</div>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="{{route('admin.reporter.role')}}">--}}
            {{--<div class="parent-icon" style="color:#a400ed;"><i class="bi bi-person-lines-fill"></i>--}}
            {{--</div>--}}
            {{--<div class="menu-title">Reporters Role</div>--}}
            {{--</a>--}}
            {{--</li>--}}
            <li>
                <a href="./user-list.html">
                    <div class="parent-icon" style="color:#ca9805;"><i class="lni lni-users"></i>
                    </div>
                    <div class="menu-title">User's List</div>
                </a>
            </li>
            <li class="menu-label">Settings</li>
            <li>
                <a class="has-arrow" href="javascript:;" class="has-arrow">
                    <div class="parent-icon" style="color:#009688;"><i class="lni lni-bolt-alt"></i>
                    </div>
                    <div class="menu-title">Categories</div>
                </a>
                <ul>
                    <li><a href="{{route('admin.post.category.show')}}"><i class="bi bi-circle"></i>All Categories</a>
                    </li>
                    <li><a href="{{route('admin.post.subcategory.show')}}"><i class="bi bi-circle"></i>Sub
                            Categories</a>
                    <li><a href="{{route('admin.post.childCategory.show')}}"><i class="bi bi-circle"></i>Child
                            Categories</a>
                    </li>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon" style="color:#c37458;"><i class="lni lni-rss-feed"></i>
                    </div>
                    <div class="menu-title">RSS Feed</div>
                </a>
                <ul>
                    <li><a href="./rss-post.html"><i class="bi bi-circle"></i>RSS Post</a>
                    </li>
                    <li><a href="./rss-feed.html"><i class="bi bi-circle"></i>RSS Feed</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="./ads.html">
                    <div class="parent-icon"><i class="lni lni-megento" style="color:#265ed7;"></i>
                    </div>
                    <div class="menu-title">Ads</div>
                </a>
            </li>
            <li>
                <a href="./general-setting.html">
                    <div class="parent-icon" style="color:#ca9805;"><i class="bi bi-lock-fill"></i>
                    </div>
                    <div class="menu-title">General Setting</div>
                </a>

            </li>
            <li>
                <a href="./seo-setting.html">
                    <div class="parent-icon" style="color:#0CFFDD;"><i class="fadeIn animated bx bx-trending-up"></i>
                    </div>
                    <div class="menu-title">SEO Setting</div>
                </a>

            </li>
            <li>
                <a href="./email-setting.html">
                    <div class="parent-icon" style="color:#38FF0C;"><i class="fadeIn animated bx bx-envelope"></i>
                    </div>
                    <div class="menu-title">Email Setting</div>
                </a>

            </li>
            <li>
                <a href="./social-media-setting.html">
                    <div class="parent-icon" style="color:#ff8b01;"><i class="lni lni-flower"></i>
                    </div>
                    <div class="menu-title">Social Setting</div>
                </a>

            </li>
            <li>
                <a href="#">
                    <div class="parent-icon" style="color:#ff3030;"><i class="fadeIn animated bx bx-news"></i>
                    </div>
                    <div class="menu-title">Newsletter</div>
                </a>
            </li>
            <li>
                <a href="./role-create.html">
                    <div class="parent-icon" style="color:#ff8b01;"><i class="lni lni-users"></i>
                    </div>
                    <div class="menu-title">Role Management</div>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <div class="parent-icon" style="color:#30d4e4;"><i class="bi bi-exclamation-triangle-fill"></i>
                    </div>
                    <div class="menu-title">Clear Cache</div>
                </a>
            </li>
        </ul>
    </div>
    <!--end navigation-->
</aside>
<!--end sidebar -->
