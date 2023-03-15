@extends('backend.admin.layouts.master')
@section('main_content')

    <div class="row mobile-row justify-content-between">
        <div class="col-6">
            <div class="total-counter-item">
                <p>Showing <span>1</span> to <span>5</span> of <span>58</span> entries</p>
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
                    <h5 id="offcanvasRightLabel">Reporter List Filter</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                </div>
                <div class="offcanvas-body custom-filter-body">
                    <div class="filter-wrap-box">
                        <div class="filter-item">
                            <div class="custom-tab-filter">

                                <ul class="nav nav-tabs nav-primary " role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active show" data-bs-toggle="tab" href="#by-category"
                                           role="tab" aria-selected="true">
                                            <div class="d-flex align-items-center ">
                                                <div class="tab-icon me-2"><i
                                                            class='lni lni-map-marker font-18 me-1'></i>
                                                </div>
                                                <div class="tab-title">By Location</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link  btn-even" data-bs-toggle="tab" href="#by-location"
                                           role="tab" aria-selected="false">
                                            <div class="d-flex align-items-center">
                                                <div class="tab-icon me-2"><i class='lni lni-bolt-alt font-18 me-1'></i>
                                                </div>
                                                <div class="tab-title">By Type & Role</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link  btn-even" data-bs-toggle="tab" href="#by-id" role="tab"
                                           aria-selected="false">
                                            <div class="d-flex align-items-center">
                                                <div class="tab-icon me-2"><i class='lni lni-bolt-alt font-18 me-1'></i>
                                                </div>
                                                <div class="tab-title">By ID</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="filter-content">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="by-category" role="tabpanel">
                                            <div class="f-image-title">
                                                <h6>Search By Location </h6>
                                                <p>Add images that represent the writing </p>
                                            </div>
                                            <div class="mb-3 custom-single-select">
                                                <label class="form-label post-cat-label">Divison</label>
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
                                        <div class="tab-pane fade " id="by-location" role="tabpanel">
                                            <div class="f-image-title">
                                                <h6>Search By Type & Role </h6>
                                                <p>Add images that represent the writing </p>
                                            </div>
                                            <div class="mb-3 custom-single-select">
                                                <label class="form-label post-cat-label">Reporter Type</label>
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
                                                <label class="form-label post-cat-label">Reporter Role</label>
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
                                        <div class="tab-pane fade " id="by-id" role="tabpanel">
                                            <div class="f-image-title">
                                                <h6>Search By ID </h6>
                                                <p>Add images that represent the writing </p>
                                            </div>
                                            <div class="input-block mb-2">
                                                <label class="reg-label mb-1">Reporter ID</label>
                                                <input type="text" class="form-control input-custom" name="input-text"
                                                       id="input-text" required="" spellcheck="false" placeholder="">
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
    <!-- Post List End -->
    <div class="row align-items-start justify-content-center">
        <!-- Right Side Wrap -->
        @foreach($userList as $reporterInfo)


            @if($reporterInfo->status==1)
                <div class="col-12 col-md-4  d-flex reporter-list-item">
                    <div class="card rounded-4 w-100 reporter-custom-card">
                        <div class="card-body d-flex justify-content-between flex-wrap align-items-center">
                            <div class="profile-t-content-Left">
                                <div class="d-flex flex-wrap flex-sm-nowrap align-items-center">
                                    <div class="me-3 photo-area-m">
                                        <div class="symbol symbol-100px symbol-lg-160px symbol-fixed reporter-image position-relative">
                                            <img src="{{asset('assets/backend')}}\images\profile\300-1.jpg" alt="image">
                                            <p class="mt-2 text-center">ID - <span>  {{$reporterInfo->user_id}}</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 team-content-box">
                                        <div class="d-flex justify-content-between align-items-start flex-wrap">
                                            <div class="d-flex flex-column profile-info-left">
                                                <div class="d-flex align-items-center ">
                                                    <a href="{{route('admin.reporter.details',['id'=>$reporterInfo->id])}}"
                                                       class="profile-name-text me-1">{{$reporterInfo->en_first_name}}
                                                        &nbsp; {{$reporterInfo->en_last_name}}</a>
                                                    <a href="#" class="verify-profile">
                            <span class="svg-icon svg-icon-1 svg-icon-primary">
                              <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px" viewBox="0 0 24 24">
                                <path
                                        d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z"
                                        fill="currentColor"></path>
                                <path
                                        d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z"
                                        fill="white"></path>
                              </svg>
                            </span>
                                                    </a>
                                                </div>
                         <div class="d-flex flex-wrap fw-semibold fs-6 pe-2">
                          <span class="d-flex align-items-center text-gray-400 text-hover-primary  info-item">
                              {{$reporterInfo->userDetails->reporter_type->name}}
                          </span>
                        </div>
                                            </div>
                                            <div class="d-flex flex-column profile-info-left mt-1">
                                                <div class="d-flex flex-wrap fw-semibold fs-6 mb-1 pe-2">
                          <span href="#"
                                class="d-flex align-items-center text-gray-400 text-hover-primary  info-item-2">
                            <span class="svg-icon svg-icon-4 me-1">
                              <i class="fadeIn animated bx bx-envelope"></i>
                            </span>
                            {{$reporterInfo->email}}
                          </span>
                                                    <span href="#"
                                                          class="d-flex align-items-center text-gray-400 text-hover-primary me-3  info-item-2">
                            <span class="svg-icon svg-icon-4">
                              <i class="bi bi-pin-map-fill"></i>
                            </span>
                           {{$reporterInfo->userDetails->present_address}}
                          </span>
                           <span href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-3  info-item-2">
                             <span class="svg-icon svg-icon-4">
                                <i class="fadeIn animated bx bx-phone-call"></i>
                             </span>
                              {{$reporterInfo->phone}}
                           </span>
                                                </div>
                                            </div>
                                            <div class="active-switcher ">
                                                <div class="form-check form-switch custom-scduled-switch d-flex justify-content-end">
                                                    <input class="form-check-input" type="checkbox"
                                                           id="flexSwitchCheckChecked" checked="">
                                                </div>
                                            </div>
                                            <div class="option-profile">
                                                <div class="action-box margin-right">
                                                    <a href="javascript:void(0);"
                                                       class="nav-link dropdown-toggle dropdown-toggle-nocaret"
                                                       data-bs-toggle="dropdown"><span
                                                                class="text-end custom-toggle-icon"><i
                                                                    class="bi bi-three-dots"></i></span></a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a class="dropdown-item custom-dropdown-item"
                                                               href="javascript:void(0);">
                                                                <div class="d-flex align-items-center dropdown-text-box">
                                                                    <div class="icon-option"><i
                                                                                class="fadeIn animated bx bx-trash"></i>
                                                                    </div>
                                                                    <div class="ms-1 ms-md-2"><span>Delete</span></div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <div class="d-flex align-items-center dropdown-text-box">
                                                                    <div class="icon-option"><i
                                                                                class="fadeIn animated bx bx-edit"></i>
                                                                    </div>
                                                                    <div class="ms-1 ms-md-2"><span>All Post</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($reporterInfo->status==0)
                <div class="col-12 col-md-4  d-flex reporter-list-item deactived-memeber">
                    <div class="card rounded-4 w-100 reporter-custom-card">
                        <div class="card-body d-flex justify-content-between flex-wrap align-items-center">
                            <div class="profile-t-content-Left">
                                <div class="d-flex flex-wrap flex-sm-nowrap align-items-center">
                                    <div class="me-3 photo-area-m">
                                        <div class="symbol symbol-100px symbol-lg-160px symbol-fixed reporter-image position-relative">
                                            <a href="./reporter-details.html"><img
                                                        src="{{asset('assets/backend')}}\images\profile\300-1.jpg"
                                                        alt="image"></a>
                                            <p class="mt-2 text-center">ID - <span>{{$reporterInfo->user_id}}</span></p>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 team-content-box">
                                        <div class="d-flex justify-content-between align-items-start flex-wrap">
                                            <div class="d-flex flex-column profile-info-left">
                                                <div class="d-flex align-items-center ">
                                                    <a href="{{route('admin.reporter.details',['id'=>$reporterInfo->id])}}"
                                                       class="profile-name-text me-1">{{$reporterInfo->en_first_name}}
                                                        &nbsp; {{$reporterInfo->en_last_name}}</a>
                                                    <a href="javascript:void(0);" class="verify-profile">
                            <span class="svg-icon svg-icon-1 svg-icon-primary">
                              <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px" viewBox="0 0 24 24">
                                <path
                                        d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z"
                                        fill="currentColor"></path>
                                <path
                                        d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z"
                                        fill="white"></path>
                              </svg>
                            </span>
                                                    </a>
                                                </div>
                                                <div class="d-flex flex-wrap fw-semibold fs-6 pe-2">
                          <span class="d-flex align-items-center text-gray-400 text-hover-primary  info-item">
                              {{$reporterInfo->userDetails->reporter_type->name}}
                          </span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column profile-info-left mt-1">
                                                <div class="d-flex flex-wrap fw-semibold fs-6 mb-1 pe-2">
                          <span href="#"
                                class="d-flex align-items-center text-gray-400 text-hover-primary  info-item-2">
                            <span class="svg-icon svg-icon-4 me-1">
                              <i class="fadeIn animated bx bx-envelope"></i>
                            </span>
                          {{$reporterInfo->email}}
                          </span>
                                                    <span href="#"
                                                          class="d-flex align-items-center text-gray-400 text-hover-primary me-3  info-item-2">
                            <span class="svg-icon svg-icon-4">
                              <i class="bi bi-pin-map-fill"></i>
                            </span>
                            {{$reporterInfo->userDetails->present_address}}
                          </span>
                                                    <span href="#"
                                                          class="d-flex align-items-center text-gray-400 text-hover-primary me-3  info-item-2">
                            <span class="svg-icon svg-icon-4">
                              <i class="fadeIn animated bx bx-phone-call"></i>
                            </span>
                           {{$reporterInfo->phone}}
                          </span>
                                                </div>
                                            </div>
                                            <div class="active-switcher ">
                                                <div class="form-check form-switch custom-scduled-switch d-flex justify-content-end">
                                                    <input class="form-check-input" type="checkbox"
                                                           id="flexSwitchCheckChecked">
                                                </div>
                                            </div>
                                            <div class="option-profile">
                                                <div class="action-box margin-right">
                                                    <a href="javascript:void(0);"
                                                       class="nav-link dropdown-toggle dropdown-toggle-nocaret"
                                                       data-bs-toggle="dropdown"><span
                                                                class="text-end custom-toggle-icon"><i
                                                                    class="bi bi-three-dots"></i></span></a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a class="dropdown-item custom-dropdown-item"
                                                               href="javascript:void(0);">
                                                                <div class="d-flex align-items-center dropdown-text-box">
                                                                    <div class="icon-option"><i
                                                                                class="fadeIn animated bx bx-trash"></i>
                                                                    </div>
                                                                    <div class="ms-1 ms-md-2"><span>Delete</span></div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <div class="d-flex align-items-center dropdown-text-box">
                                                                    <div class="icon-option"><i
                                                                                class="fadeIn animated bx bx-edit"></i>
                                                                    </div>
                                                                    <div class="ms-1 ms-md-2"><span>All Post</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endif
        @endforeach


    </div>

    <div class="row mobile-row">
        <div class="col-12">
            <div class="pagination-wrap d-flex justify-content-center justify-content-md-end">
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
@endsection
@section('js_plugins')
@endsection
@section('js')
@endsection

