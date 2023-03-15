@extends('backend.admin.layouts.master')

@section('main_content')
    <div>

        <div class="row mobile-row justify-content-between mb-3">
            <div class="col-6">
                <div class="total-counter-item">

                    <div class="language-switeher" onclick="categoryLanChange()">
                        <div class="switch-button">
                            <input type="text" id="setlanguage" name="language" value="bn"
                                   style="display: none">
                            <input type="text" id="is_auto" name="related_post_type" value="0"
                                   style="display: none">
                            <input type="text" id="parentClass" style="display: none">
                            <input class="switch-button-checkbox" type="checkbox"
                                   id="lang-switch-checkbox1">
                            <label class="switch-button-label" for="lang-switch-checkbox">
                                <span class="switch-button-label-span">Bangla</span>
                            </label>
                        </div>
                    </div>
                    {{--<p><span>5460</span> - Total Article</p>--}}
                </div>
            </div>
            <div class="col-6">
                <div class="top-filter-bar  d-flex justify-content-end">
                    <a href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                       aria-controls="offcanvasRight" class="d-flex align-items-center"><span class="me-1"><i
                                    class="fadeIn animated bx bx-sort-up"></i></span>
                        <span>Filter</span></a>
                </div>
            </div>


            <div class="filter-wrapper">
                <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight"
                     aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <h5 id="offcanvasRightLabel">Post Filter</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body custom-filter-body">
                        <div class="filter-wrap-box">
                            <div class="filter-item">
                                <div class="custom-tab-filter">

                                    <input type="hidden" id="src_type">


                                    <ul class="nav nav-tabs nav-primary" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active show" data-bs-toggle="tab" href="#by-category"
                                               role="tab" aria-selected="true">
                                                <div class="d-flex align-items-center">
                                                    <div class="tab-icon me-2"><i
                                                                class='lni lni-bolt-alt font-18 me-1'></i>
                                                    </div>
                                                    <div class="tab-title" onclick="setSrcType('category')">By
                                                        Category
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link  btn-even" data-bs-toggle="tab" href="#by-location"
                                               role="tab" aria-selected="false">
                                                <div class="d-flex align-items-center">
                                                    <div class="tab-icon me-2"><i
                                                                class='lni lni-map-marker font-18 me-1'></i>
                                                    </div>
                                                    <div class="tab-title" onclick="setSrcType('location')">By
                                                        Location
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link " data-bs-toggle="tab" href="#by-reporter" role="tab"
                                               aria-selected="false">
                                                <div class="d-flex align-items-center">
                                                    <div class="tab-icon me-2"><i
                                                                class='bi bi-person-lines-fill me-1'></i>
                                                    </div>
                                                    <div class="tab-title" onclick="setSrcType('reporter')">By
                                                        Reporter
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link btn-even" data-bs-toggle="tab" href="#by-date" role="tab"
                                               aria-selected="false">
                                                <div class="d-flex align-items-center">
                                                    <div class="tab-icon me-2"><i
                                                                class='fadeIn animated bx bx-calendar me-1'></i>
                                                    </div>
                                                    <div class="tab-title" onclick="setSrcType('date')">By Date</div>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>
                                    <div class="filter-content">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="by-category" role="tabpanel">
                                                <div class="f-image-title">
                                                    <h6>Search By Category </h6>
                                                    <p>Add images that represent the writing </p>
                                                </div>
                                                <div class="mb-3 custom-single-select">
                                                    <label class="form-label post-cat-label">Category</label>
                                                    <select class="single-select" onchange="setSubcategory(this)">
                                                        <option value="United States">--SELECT-</option>
                                                        @foreach($category as $category_list)
                                                            <option value="{{$category_list->id}}">{{$category_list->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="mb-3 custom-single-select">
                                                    <label class="form-label post-cat-label">Sub Category</label>
                                                    <select class="single-select " id="sub_category_id"
                                                            onchange="setChildCategoryList(this)">
                                                        <option value="">--SELECT--</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 custom-single-select">
                                                    <label class="form-label post-cat-label">Child Category</label>
                                                    <select class="single-select" id="child_category_id">
                                                        <option value="">--SELECT--</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade " id="by-location" role="tabpanel">
                                                <div class="f-image-title">
                                                    <h6>Search By Location </h6>
                                                    <p>Add images that represent the writing </p>
                                                </div>
                                                <div class="mb-3 custom-single-select">
                                                    <label class="form-label post-cat-label">Division</label>
                                                    <select class="single-select" id="division_id"
                                                            onchange="districtList(this)">
                                                        <option value="United States">--SELECT--</option>
                                                        @foreach($division as $division_list)
                                                            <option value="{{$division_list->id}}">{{$division_list->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="mb-3 custom-single-select">


                                                    <label class="form-label post-cat-label">District</label>
                                                    <select class="single-select" id="district_id"
                                                            onchange="thanaList(this)">
                                                        <option value="">--SELECT--</option>

                                                    </select>
                                                </div>

                                                <div class="mb-3 custom-single-select">
                                                    <label class="form-label post-cat-label">Thana</label>
                                                    <select class="single-select " id="thana_id">
                                                        <option value="">--SELECT--</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade " id="by-reporter" role="tabpanel">
                                                <div class="f-image-title">
                                                    <h6>Search By Reporter </h6>
                                                    <p>Add images that represent the writing </p>
                                                </div>
                                                <div class="custom-modal-author">
                                                    <div class="search-author-box mb-3">
                                                        <form class="searchbar">
                                                            <div class="search-icon position-relative">
                                                                <span class="icon-search"><i
                                                                            class="bi bi-search"></i></span>
                                                                <input class="form-control" id="reporter_src"
                                                                       oninput="srcReporter(this)" value="" type="text"
                                                                       placeholder="Type here to search">
                                                            </div>

                                                            <input type="hidden" id="reporter_id">
                                                        </form>
                                                    </div>
                                                    <div id="reporter_list">
                                                        @foreach($reporter as $reporter_list)
                                                            <div name="{{$reporter_list->en_full_name}}"
                                                                 id="{{$reporter_list->id}}"
                                                                 onclick="reporterIdset(this)"
                                                                 class="author-box d-flex justify-content-start align-items-center my-2"
                                                                 data-bs-toggle="modal"
                                                                 data-bs-target="#exampleVerticallycenteredModal">
                                                                <div class="author-img">
                                                                    <img src="assets/images/avatars/avatar-11.png"
                                                                         alt="">
                                                                </div>
                                                                <div class="author-name">
                                                                    <h4>{{$reporter_list->en_full_name}}</h4>
                                                                    <p>{{$reporter_list->type}}</p>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>


                                                </div>

                                            </div>
                                            <div class="tab-pane fade " id="by-date" role="tabpanel">
                                                <div class="f-image-title">
                                                    <h6>Search By Date Range </h6>
                                                    <p>Add images that represent the writing </p>
                                                </div>
                                                <div class="choose-date-box ">
                                                    <div class="f-image-title custom-date-title">
                                                        <h6>Start a Date </h6>
                                                    </div>
                                                    <input class="result form-control date_cls" type="text"
                                                           id="start_date" placeholder="Date Picker...">
                                                </div>
                                                <div class="choose-date-box mt-3">
                                                    <div class="f-image-title custom-date-title">
                                                        <h6>End a Date </h6>
                                                    </div>
                                                    <input class="result form-control date_cls" type="text"
                                                           id="end_date" placeholder="Date Picker...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="filter-btn-wrap text-center d-flex justify-content-center">
                                        <a href="#" class="add-section-btn">
                                            <div class="parent-icon"><i class="lni lni-search-alt"></i>
                                            </div>
                                            <div class="menu-title" onclick="search()">Search</div>
                                        </a>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="row mobile-row">
            <div class="col-12 d-flex">
                <div class="card rounded-4 w-100 mobile-card">
                    <div class="card-body mobile-card-body">
                        <div class="post-wrap">
                            <div class="post-header flex-wrap justify-content-between d-flex align-items-center">
                                <div class="post-details margin-right">
                                    <div class="post-header-title">
                                        <p>Post Details</p>
                                    </div>
                                </div>
                                <div class="post-reporter margin-right">
                                    <div class="post-header-title">
                                        <p>Reporter</p>
                                    </div>
                                </div>
                                <div class="post-area margin-right">
                                    <div class="post-header-title">
                                        <p>Analytics</p>
                                    </div>
                                </div>
                                <div class="post-status margin-right">
                                    <div class="post-header-title text-center">
                                        <p>Status</p>
                                    </div>
                                </div>
                                <div class="post-action margin-right">
                                    <div class="post-header-title">
                                        <span class="text-end"><i class="lni lni-cog"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div id="postList">
                                @foreach($postList as $post_data)

                                    <div class="post-body d-flex align-items-center flex-wrap  justify-content-between">
                                        <div class="post-details-box margin-right">
                                            <div class="d-flex align-items-center  gap-3">
                                                <div class="product-box border">
                                                    <a href="#">
                                                        @if($post_data->featured_image_id)
                                                            <img src="{{asset($post_data->uploadImage->image_full_path)}}"
                                                                 alt="product img">
                                                        @endif
                                                    </a>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="progress-wrapper">
                                                        <p class="mb-2"><a href="#"><span
                                                                        class="cate-post text-red">@if($post_data->post_child_category_id) {{$post_data->childCategory->name}} @elseif($post_data->post_sub_category_id) {{$post_data->subCategory->name}} @elseif($post_data->post_category_id) {{$post_data->category->name}} @endif</span></a>
                                                            <span
                                                                    class="dots1"></span> <span
                                                                    class="ms-3 date-post-p">{{date('M d,Y',strtotime($post_data->created_at)) }}</span>
                                                            <span
                                                                    class="dots2"></span> <span
                                                                    class="ms-3 date-post-p">{{date(' g:i a',strtotime($post_data->created_at)) }}</span>
                                                        </p>
                                                        <div class="post-title-popular">
                                                            <a href="#"><h4>
                                                                    @if(strlen($post_data->title) > 32)
                                                                        {{ mb_substr($post_data->title, 0, 32)}} ...
                                                                    @else
                                                                        {{$post_data->title}}
                                                                    @endif
                                                                </h4>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mobile-bg-card d-block d-md-none"></div>
                                        <div class="reporter-box margin-right">
                                            <a href="javascript:void(0);">
                                                <div class="reporter-item d-flex align-items-center">
                                                    <div class="reporter-img">
                                                        <img src="assets/images/avatars/avatar-11.png" alt="">
                                                    </div>
                                                    <div class="reporter-name">
                                                        <h4>{{$post_data->reporterInfo->bn_first_name}} {{$post_data->reporterInfo->en_last_name}}</h4>
                                                        <p>Editor</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="area-box margin-right">
                                            <a href="javascript:void(0);">
                                                <p class="pb-2 d-flex align-items-center"><span><i
                                                                class="bi bi-pin-map-fill"></i></span> @if($post_data->district_id) {{$post_data->district->name}} @endif
                                                </p>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <p class=" d-flex align-items-center"><span><i class="lni lni-eye"></i></span>
                                                    <span style="color:#222; margin-right:5px;">50,000</span>Visitor</p>
                                            </a>
                                        </div>
                                        <div class="status-box margin-right">
                                            <span class="bg-color-nine">{{$post_data->post_status_name}}</span>
                                            <!-- <span>Pending</span>
                                          <span>Unpublished</span> -->
                                        </div>
                                        <div class="action-box margin-right">
                                            <a href="javascript:void(0);"
                                               class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                                               data-bs-toggle="dropdown"><span class="text-end custom-toggle-icon"><i
                                                            class="fadeIn animated bx bx-caret-down-circle"></i></span></a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item custom-dropdown-item"
                                                       href="javascript:void(0);">
                                                        <div class="d-flex align-items-center dropdown-text-box">
                                                            <div class=""><i
                                                                        class="fadeIn animated bx bx-info-circle"></i>
                                                            </div>
                                                            <div class="ms-1 ms-md-3"><span>View on Frontened</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                       href="{{route('post.edit',['post_id'=>$post_data->id])}}">
                                                        <div class="d-flex align-items-center dropdown-text-box">
                                                            <div class=""><i class="fadeIn animated bx bx-edit"></i>
                                                            </div>
                                                            <div class="ms-1 ms-md-3"><span>Edit</span></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                {{--<li>--}}
                                                    {{--<a class="dropdown-item" href="{{route('post.change-to.pending',['post_id'=>$post_data->id])}}">--}}
                                                        {{--<div class="d-flex align-items-center dropdown-text-box">--}}
                                                            {{--<div class=""><i class="lni lni-question-circle"></i></div>--}}
                                                            {{--<div class="ms-1 ms-md-3"><span>Make as pending</span></div>--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                {{--</li>--}}
                                                <li>
                                                    <a class="dropdown-item" href="{{route('admin.post.publish',['post_id'=>$post_data->id])}}">
                                                        <div class="d-flex align-items-center dropdown-text-box">
                                                            <div class=""><i class="lni lni-question-circle"></i></div>
                                                            <div class="ms-1 ms-md-3"><span>Make as Publish</span></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="{{route('post.change-to.unpublish',['post_id'=>$post_data->id])}}">
                                                        <div class="d-flex align-items-center dropdown-text-box">
                                                            <div class=""><i class="lni lni-ban"></i></div>
                                                            <div class="ms-1 ms-md-3"><span>Unpublished</span></div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                @endforeach

                            </div>


                        </div>

                    </div>
                </div>
            </div>


        </div>
        <!--end row-->
        <div class="row mobile-row">
            <div class="col-12">
                <div class="pagination-wrap d-flex justify-content-end">
                    <nav class="pagination-outer" aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item active"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link disabled" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                            <li class="page-item"><a class="page-link" href="#">11 </a></li>
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
@endsection
@section('modal')

@endsection
@section('css_plugins')
    <link href="{{ asset('assets/backend')}}/plugins/select2/css/select2.min.css" rel="stylesheet"/>
    <link href="{{ asset('assets/backend')}}/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet"/>


    <link href="{{ asset('assets/backend')}}/plugins/input-tags/css/tagsinput.css" rel="stylesheet"/>
    <link href="{{ asset('assets/backend')}}/plugins/datetimepicker/css/classic.css" rel="stylesheet"/>
    <link href="{{ asset('assets/backend')}}/plugins/datetimepicker/css/classic.time.css" rel="stylesheet"/>
    <link href="{{ asset('assets/backend')}}/plugins/datetimepicker/css/classic.date.css" rel="stylesheet"/>
    <link rel="stylesheet"
          href="{{ asset('assets/backend')}}/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="{{asset('assets/backend')}}/css/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="{{ asset('assets/backend')}}/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet"/>
    <link href="{{ asset('assets/backend')}}/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet"/>
@endsection

@section('js_plugins')
    <!-- Date Picker -->
    <script src="{{ asset('assets/backend')}}/plugins/datetimepicker/js/legacy.js"></script>
    <script src="{{ asset('assets/backend')}}/plugins/datetimepicker/js/picker.js"></script>
    <script src="{{ asset('assets/backend')}}/plugins/datetimepicker/js/picker.time.js"></script>
    <script src="{{ asset('assets/backend')}}/plugins/datetimepicker/js/picker.date.js"></script>
    <script src="{{ asset('assets/backend')}}/plugins/bootstrap-material-datetimepicker/js/moment.min.js"></script>
    <script src="{{ asset('assets/backend')}}/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js"></script>
    <script src="{{ asset('assets/backend')}}/js/form-date-time-pickes.js"></script>
    <!-- Date Picker -->
    {{--select--}}
    <script src="{{ asset('assets/backend')}}/plugins/select2/js/select2.min.js"></script>
    <script src="{{ asset('assets/backend')}}/js/form-select2.js"></script>
    {{--select--}}
@endsection
@section('js')

    <script>


        function search() {
            var srctype = $('#src_type').val();
            var start_date = $('#start_date').val();
            var end_date = $('#end_date').val();
            var category_id = $('#category_id').val();
            var sub_category_id = $('#sub_category_id').val();
            var child_category_id = $('#child_category_id').val();

            var thana_id = $('#thana_id').val();
            var district_id = $('#district_id').val();
            var division_id = $('#division_id').val();

            var language = $('#setlanguage').val();

            var reporter_id = $('#reporter_id').val();

            var colum = '';
            //src post which post_status 2 pending
            var src_by_status = 2;


            $.ajax({
                url: "{{route('admin.search.post')}}",
                type: "get",
                data: {
                    src_type: srctype,

                    colum: colum,
                    src_by_status:src_by_status,

                    language: language,
                    start_date: start_date,
                    end_date: end_date,
                    reporter_id: reporter_id,
                    post_category_id: category_id,
                    post_sub_category_id: sub_category_id,
                    post_child_category_id: child_category_id,
                    thana_id: thana_id,
                    district_id: district_id,
                    division_id: division_id,
                },
                success: function (response) {


                    $('#postList').html(response);

                },
                error: function (xhr) {
                    //Do Something to handle error
                }
            });
        }


        function districtList(data) {
            var division_id = $(data).val();

            $.ajax({
                url: "{{route('admin.district.get')}}",
                type: "get",
                data: {
                    id: division_id,
                },
                success: function (response) {
                    $('#district_id').html(response)
                },
                error: function (xhr) {
                    //Do Something to handle error
                }
            });

        }

        function thanaList(data) {
            var district_id = $(data).val();

            $.ajax({
                url: "{{route('admin.thana.get')}}",
                type: "get",
                data: {
                    id: district_id,
                },
                success: function (response) {
                    $('#thana_id').html(response)
                },
                error: function (xhr) {
                    //Do Something to handle error
                }
            });

        }

        function setSrcType(data) {
            $('#src_type').val(data);
        }


        function categoryLanChange() {
            let tgval = $('#setlanguage').val();
            if (tgval == 'bn' || tgval == 'on') {
                tgval = 'en';
            } else {
                tgval = 'bn';
            }
            $('#setlanguage').val(tgval);

            $("#lang2").val(tgval).change();

            search();
        }

        function setSubcategory(data) {
            let category_id = $(data).val();
            $.ajax({
                url: "{{route('admin.get.post.subcategory.list')}}",
                type: "get",
                data: {
                    category_id: category_id,
                },
                success: function (response) {
                    console.log(response)
                    $('#sub_category_id').html(response)
                },
                error: function (xhr) {
                    //Do Something to handle error
                }
            });
        }

        function setChildCategoryList(data) {
            let subcategory_id = $(data).val();
            $.ajax({
                url: "{{route('admin.get.post.child.category.list')}}",
                type: "get",
                data: {
                    sub_category_id: subcategory_id,
                },
                success: function (response) {
                    $('#child_category_id').html(response)
                },
                error: function (xhr) {
                    //Do Something to handle error
                }
            });
        }

        function reporterIdset(data) {
            let name = $(data).attr('name');
            let id = $(data).attr('id');
            $('#reporter_src').val(name)
            $('#reporter_id').val(id)
        }

        function srcReporter(data) {
            var name = $(data).val();

            $.ajax({
                url: "{{route('admin.get.reporter.src')}}",
                type: "get",
                data: {
                    name: name,
                },
                success: function (response) {
                    console.log(response)

                    $('#reporter_list').html('')
                    $('#reporter_list').html(response)
                },
                error: function (xhr) {
                    //Do Something to handle error
                }
            });
        }


    </script>
@endsection

