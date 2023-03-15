@extends('backend.admin.layouts.master')

@section('main_content')
    <div>

        <div class="row mobile-row justify-content-between">
            <div class="col-6">
                <div class="total-counter-item">
                    <p><span>5460</span> - Total Article</p>
                </div>
            </div>
            <div class="col-6">
                <div class="top-filter-bar  d-flex justify-content-end">
                    <a href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" class="d-flex align-items-center"><span class="me-1"><i class="fadeIn animated bx bx-sort-up"></i></span>
                        <span>Filter</span></a>
                </div>
            </div>



            <div class="filter-wrapper">
                <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <h5 id="offcanvasRightLabel">Post Filter</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body custom-filter-body">
                        <div class="filter-wrap-box">
                            <div class="filter-item">
                                <div class="custom-tab-filter">

                                    <ul class="nav nav-tabs nav-primary" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active show" data-bs-toggle="tab" href="#by-category" role="tab" aria-selected="true">
                                                <div class="d-flex align-items-center">
                                                    <div class="tab-icon me-2"><i class='lni lni-bolt-alt font-18 me-1'></i>
                                                    </div>
                                                    <div class="tab-title">By Category</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link  btn-even" data-bs-toggle="tab" href="#by-location" role="tab" aria-selected="false">
                                                <div class="d-flex align-items-center">
                                                    <div class="tab-icon me-2"><i class='lni lni-map-marker font-18 me-1'></i>
                                                    </div>
                                                    <div class="tab-title">By Location</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link " data-bs-toggle="tab" href="#by-reporter" role="tab" aria-selected="false">
                                                <div class="d-flex align-items-center">
                                                    <div class="tab-icon me-2"><i class='bi bi-person-lines-fill me-1'></i>
                                                    </div>
                                                    <div class="tab-title">By Reporter</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link btn-even" data-bs-toggle="tab" href="#by-date" role="tab" aria-selected="false">
                                                <div class="d-flex align-items-center">
                                                    <div class="tab-icon me-2"><i class='fadeIn animated bx bx-calendar me-1'></i>
                                                    </div>
                                                    <div class="tab-title">By Date</div>
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
                                                    <select class="single-select ">
                                                        <option value="United States">United States</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 custom-single-select">
                                                    <label class="form-label post-cat-label">Sub Category</label>
                                                    <select class="single-select ">
                                                        <option value="United States">United States</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 custom-single-select">
                                                    <label class="form-label post-cat-label">Child Category</label>
                                                    <select class="single-select ">
                                                        <option value="United States">United States</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
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
                                                    <select class="single-select ">
                                                        <option value="United States">United States</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 custom-single-select">
                                                    <label class="form-label post-cat-label">District</label>
                                                    <select class="single-select ">
                                                        <option value="United States">United States</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 custom-single-select">
                                                    <label class="form-label post-cat-label">Thana</label>
                                                    <select class="single-select ">
                                                        <option value="United States">United States</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United Kingdom">United Kingdom</option>
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
                                                                <span class="icon-search"><i class="bi bi-search"></i></span>
                                                                <input class="form-control" type="text" placeholder="Type here to search">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="author-box d-flex justify-content-start align-items-center my-2" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal">
                                                        <div class="author-img">
                                                            <img src="assets/images/avatars/avatar-11.png" alt="">
                                                        </div>
                                                        <div class="author-name">
                                                            <h4>Minhaz Morshed</h4>
                                                            <p>Editor</p>
                                                        </div>
                                                    </div>
                                                    <div class="author-box d-flex justify-content-start align-items-center my-2" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal">
                                                        <div class="author-img">
                                                            <img src="assets/images/avatars/avatar-11.png" alt="">
                                                        </div>
                                                        <div class="author-name">
                                                            <h4>Minhaz Morshed</h4>
                                                            <p>Editor</p>
                                                        </div>
                                                    </div>
                                                    <div class="author-box d-flex justify-content-start align-items-center my-2" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal">
                                                        <div class="author-img">
                                                            <img src="assets/images/avatars/avatar-11.png" alt="">
                                                        </div>
                                                        <div class="author-name">
                                                            <h4>Minhaz Morshed</h4>
                                                            <p>Editor</p>
                                                        </div>
                                                    </div>
                                                    <div class="author-box d-flex justify-content-start align-items-center my-2" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal">
                                                        <div class="author-img">
                                                            <img src="assets/images/avatars/avatar-11.png" alt="">
                                                        </div>
                                                        <div class="author-name">
                                                            <h4>Minhaz Morshed</h4>
                                                            <p>Editor</p>
                                                        </div>
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
                                                    <input class="result form-control" type="text" id="date" placeholder="Date Picker...">
                                                </div>
                                                <div class="choose-date-box mt-3">
                                                    <div class="f-image-title custom-date-title">
                                                        <h6>End a Date </h6>
                                                    </div>
                                                    <input class="result form-control" type="text" id="date" placeholder="Date Picker...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="filter-btn-wrap text-center d-flex justify-content-center">
                                        <a href="#" class="add-section-btn">
                                            <div class="parent-icon"><i class="lni lni-search-alt"></i>
                                            </div>
                                            <div class="menu-title">Search</div>
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
                            @foreach($draft_list as $draft_data)

                            <div class="post-body d-flex align-items-center flex-wrap  justify-content-between">
                                <div class="post-details-box margin-right">
                                    <div class="d-flex align-items-center  gap-3">
                                        <div class="product-box border">
                                            <a href="#">
                                                @if($draft_data->featured_image_id)
                                                <img src="{{asset($draft_data->uploadImage->image_full_path)}}" alt="product img">
                                                    @endif
                                            </a>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="progress-wrapper">
                                                <p class="mb-2"> <a href="#"><span class="cate-post text-red">@if($draft_data->post_child_category_id) {{$draft_data->childCategory->name}} @elseif($draft_data->post_sub_category_id) {{$draft_data->subCategory->name}} @elseif($draft_data->post_category_id) {{$draft_data->category->name}} @endif</span></a> <span
                                                            class="dots1"></span> <span class="ms-3 date-post-p">{{date('M d,Y',strtotime($draft_data->created_at)) }}</span> <span
                                                            class="dots2"></span> <span class="ms-3 date-post-p">{{date(' g:i a',strtotime($draft_data->created_at)) }}</span></p>
                                                <div class="post-title-popular">
                                                    <a href="#">
                                                        <h4>
                                                            @if(strlen($draft_data->title) > 20)
                                                                {{ mb_substr($draft_data->title, 0, 20)}} ...
                                                                @else
                                                                {{$draft_data->title}}
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
                                                <h4>{{$draft_data->reporterInfo->bn_first_name}} {{$draft_data->reporterInfo->en_last_name}}</h4>
                                                <p>Editor</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="area-box margin-right">
                                    <a href="javascript:void(0);">
                                        <p class="pb-2 d-flex align-items-center"><span><i class="bi bi-pin-map-fill"></i></span> @if($draft_data->district_id) {{$draft_data->district->name}} @endif</p>
                                    </a>
                                    <a href="javascript:void(0);">
                                        <p class=" d-flex align-items-center"><span><i class="lni lni-eye"></i></span> <span style="color:#222; margin-right:5px;">50,000</span>Visitor</p>
                                    </a>
                                </div>
                                <div class="status-box margin-right">
                                    <span class="bg-color-nine">Draft</span>
                                    <!-- <span>Pending</span>
                                  <span>Unpublished</span> -->
                                </div>
                                <div class="action-box margin-right">
                                    <a href="javascript:void(0);" class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><span class="text-end custom-toggle-icon"><i class="fadeIn animated bx bx-caret-down-circle"></i></span></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item custom-dropdown-item" href="javascript:void(0);">
                                                <div class="d-flex align-items-center dropdown-text-box">
                                                    <div class=""><i class="fadeIn animated bx bx-info-circle"></i></div>
                                                    <div class="ms-1 ms-md-3"><span>View on Frontened</span></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{route('post.edit',['post_id'=>$draft_data->id])}}">
                                                <div class="d-flex align-items-center dropdown-text-box">
                                                    <div class=""><i class="fadeIn animated bx bx-edit"></i></div>
                                                    <div class="ms-1 ms-md-3"><span>Edit</span></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);">
                                                <div class="d-flex align-items-center dropdown-text-box">
                                                    <div class=""><i class="fadeIn animated bx bx-trash"></i></div>
                                                    <div class="ms-1 ms-md-3"><span>Delete</span></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{route('admin.post.publish.request',['post_id'=>$draft_data->id])}}">
                                                <div class="d-flex align-items-center dropdown-text-box">
                                                    <div class=""><i class="lni lni-question-circle"></i></div>
                                                    <div class="ms-1 ms-md-3"><span>Publish Request</span></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);">
                                                <div class="d-flex align-items-center dropdown-text-box">
                                                    <div class=""><i class="lni lni-ban"></i></div>
                                                    <div class="ms-1 ms-md-3"><span>Unpublished</span></div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            </a>
                            @endforeach

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

@endsection
@section('js_plugins')

@endsection
@section('js')

    <script>

    </script>
@endsection

