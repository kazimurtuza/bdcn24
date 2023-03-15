@extends('backend.admin.layouts.master')

@section('main_content')

    <!-- Post List End -->
    <div class="row align-items-start justify-content-center">
        <!-- Right Side Wrap -->
        <div class="col-12  d-flex">
            <div class="card rounded-4 w-100 custom-card-2">
                <div class="card-body d-flex justify-content-between flex-wrap align-items-center">
                    <div class="profile-t-content-Left">
                        <div class="d-flex flex-wrap flex-sm-nowrap align-items-start align-items-md-center">
                            <div class="me-2 me-md-4 photo-reporter-box">
                                <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                    <img src="{{asset('assets/backend')}}\images\profile\300-1.jpg" alt="image">
                                    <p class="mt-2 text-center">ID - <span>{{$details->user_id}}</span></p>
                                    <div class="photo-box position-absolute" data-bs-toggle="modal"
                                         data-bs-target="#profile-upload">
                                        <span><i class="fadeIn animated bx bx-camera"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1 basic-info-reporter">
                                <div class="d-flex justify-content-between align-items-start flex-wrap mb-0 mb-md-2">
                                    <div class="d-flex flex-column profile-info-left">
                                        <div class="d-flex align-items-center ">
                                            <a href="#" class="profile-name-text me-1">{{$details->en_first_name}}
                                                &nbsp;{{$details->en_last_name}}</a>
                                            <a href="#">
                            <span class="svg-icon svg-icon-1 svg-icon-primary">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24">
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
                                        <div class="d-flex flex-wrap fw-semibold fs-6 mb-1 pe-2">
                          <span class="d-flex align-items-center text-gray-400 text-hover-primary  info-item">
                            {{$details->userDetails->reporter_type->name}}
                          </span>

                                        </div>
                                    </div>
                                    <div class="d-flex flex-column profile-info-left mt-1">

                                        <div class="d-flex flex-wrap fw-semibold fs-6 mb-1 pe-2">
                          <span href="#"
                                class="d-flex align-items-center text-gray-400 text-hover-primary me-3 mb-0 mb-md-2 info-item-2">
                            <span class="svg-icon svg-icon-4">
                              <i class="bi bi-pin-map-fill"></i>
                            </span>
                             {{$details->userDetails->present_address}}
                          </span>
                                            <span href="#"
                                                  class="d-flex align-items-center text-gray-400 text-hover-primary mb-0 mb-md-2 info-item-2">
                            <span class="svg-icon svg-icon-4 me-1">
                              <i class="fadeIn animated bx bx-envelope"></i>
                            </span>
                           {{$details->email}}
                          </span>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex flex-wrap justify-content-between">
                                    <div class="d-flex flex-column flex-grow-1 pe-8">
                                        <div class="d-flex flex-wrap">
                                            <div class="border border-dashed rounded me-2 me-md-3 item-post-counter">
                                                <h6 class="post-count-01">10400</h6>
                                                <p class="text-gray-400">Total Post</p>
                                            </div>
                                            <div class="border border-dashed rounded me-2 me-md-3 item-post-counter">
                                                <h6 class="post-count-01">400</h6>
                                                <p class="text-gray-400">Pending</p>
                                            </div>
                                            <div class="border border-dashed rounded item-post-counter">
                                                <h6 class="post-count-01">100</h6>
                                                <p class="text-gray-400">Unpublished</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="profile-t-content-right mt-3 mt-md-0">
                        <div class="reporter-information">
                            <div class="edit-box d-flex justify-content-between align-items-start">
                                <p data-bs-toggle="modal" data-bs-target="#reporter-info-m"><span><i
                                                class="fadeIn animated bx bx-pencil"></i></span></p>
                            </div>
                            <div class="reporter-content d-flex align-items-center flex-wrap">
                                <div class="r-content-box ">
                                    <div class="title-box"><span>Reporter Role</span></div>
                                    <div class="content-box"><span>{{$details->userRole->name}}</span></div>
                                </div>
                                <div class="r-content-box ">
                                    <div class="title-box"><span> Reporter Type</span></div>
                                    <div class="content-box"><span>{{$details->userDetails->reporter_type->name}}</span>
                                    </div>
                                </div>

                                <div class="r-content-box ">
                                    <div class="title-box"><span> Joining Date</span></div>
                                    <div class="content-box">
                                        <span>{{ date('d M , Y', strtotime($details->userDetails->joining_date) ) }}</span>
                                    </div>
                                </div>
                                <div class="r-content-box ">
                                    <div class="title-box"><span> Id Card Expire Date</span></div>
                                    <div class="content-box"><span>27 October,2023</span></div>
                                </div>
                            </div>
                            <div class="profile-complete">
                                <div class="profile-complete-level">
                                    <h6><span>Complete</span> - <span style="font-weight:700">30</span>%</h6>
                                </div>
                                <div class="progress" style="height:7px;">
                                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="social-media">
                                <a href="{{$details->userDetails->social_facebook}}"><span><i
                                                class="lni lni-facebook-filled"></i></span></a>
                                <a href="{{$details->userDetails->social_instagram}}"><span><i
                                                class="lni lni-instagram-original"></i></span></a>
                                <a href="{{$details->userDetails->social_linkedin}}"><span><i
                                                class="lni lni-linkedin"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- Reporter Info Modal -->
                    <div class="modal fade custom-modal-2" id="reporter-info-m" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg custom-modal-dialog-2 modal-dialog-centered">
                            <div class="modal-content custom-modal-content-2">
                                <div class="card rounded-4 w-100 custom-card">
                                    <div class="card-body">
                                        <div class="row overflow-hidden bg-white">
                                            <div class="col-12 mb-3">
                                                <label class="form-label custom-form-label-modal d-flex align-items-center"><span
                                                            class="me-2"><i
                                                                class="fadeIn animated bx bx-info-circle"></i></span>Reporter
                                                    Information</label>
                                            </div>
                                        </div>
                                        <form class="row g-3 " method="post"
                                              action="{{route('admin.reporter.info.update')}}">
                                            @csrf
                                            <input type="hidden" name="user_details_id"
                                                   value="{{$details->userDetails->id}}">
                                            <div class="col-12 mb-2">
                                                <div class="row mobile-modal-height custom-mobile-scroll">
                                                    <div class="col-12 col-md-4 ">
                                                        <div class="input-block mb-2">
                                                            <label class="reg-label mb-1">Reporter Designation
                                                                (EN)</label>
                                                            <input type="text" class="form-control input-custom"
                                                                   name="en_designation"
                                                                   value="{{$details->userDetails->en_designation}}"
                                                                   required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-4 ">
                                                        <div class="input-block mb-2">
                                                            <label class="reg-label mb-1">Reporter Designation
                                                                (BN)</label>
                                                            <input type="text" class="form-control input-custom"
                                                                   name="bn_designation"
                                                                   value="{{$details->userDetails->bn_designation}}"
                                                                   required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-4 ">
                                                        <div class="input-block mb-2">
                                                            <label class="reg-label mb-1">Email Address</label>
                                                            <input type="email" class="form-control input-custom"
                                                                   name="email" value="{{$details->email}}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6 mt-0">
                                                        <div class="input-block mb-2 ">
                                                            <div class="category-post">
                                                                <div class="mb-2 custom-single-select">
                                                                    <label class="reg-label mb-1">Reporter Role</label>
                                                                    <select class="single-select-wsearch" name="role_id"
                                                                            required>
                                                                        @foreach($reporterRole as $roleList)
                                                                            <option value="{{$roleList->id}}" {{$details->role_id==$roleList->id ? 'selected':''}}>{{$roleList->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6 mt-0">
                                                        <div class="input-block mb-2 ">
                                                            <div class="sub-category-post">
                                                                <div class="mb-2 custom-single-select">
                                                                    <label class="reg-label mb-1">Reporter Type</label>
                                                                    <select class="single-select-wsearch"
                                                                            name="reporter_type_id" required>
                                                                        @foreach($reporterType as $reporterTypeInfo)
                                                                            <option value="{{$reporterTypeInfo->id}}" {{$details->userDetails->reporter_type_id==$reporterTypeInfo->id ? 'selected':''}}>{{$reporterTypeInfo->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-md-4 mt-0">
                                                        <div class="input-block mb-2">
                                                            <label class="reg-label mb-1">Facebook Link</label>
                                                            <input type="text" class="form-control input-custom"
                                                                   name="social_facebook"
                                                                   value="{{$details->userDetails->social_facebook}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-4 mt-0">
                                                        <div class="input-block mb-2">
                                                            <label class="reg-label mb-1">Instagram Link</label>
                                                            <input type="text" class="form-control input-custom"
                                                                   name="social_instagram"
                                                                   value="{{$details->userDetails->social_instagram}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-4 mt-0">
                                                        <div class="input-block mb-2">
                                                            <label class="reg-label mb-1">Linkedin Link</label>
                                                            <input type="text" class="form-control input-custom"
                                                                   name="social_linkedin"
                                                                   value="{{$details->userDetails->social_linkedin}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6 mt-0">
                                                        <div class="input-block mb-2">
                                                            <label class="reg-label mb-1">Joining Date</label>
                                                            <input class="result form-control datepicker-custom"
                                                                   type="text" placeholder="Joining Date"
                                                                   data-dtp="dtp_NF9F8" name="joining_date"
                                                                   value="{{$details->userDetails->joining_date}}"
                                                                   required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6 mt-0">
                                                        <div class="input-block mb-2">
                                                            <label class="reg-label mb-1">Expire Date</label>
                                                            <input class="result form-control datepicker-custom"
                                                                   type="text" placeholder="Expire Date."
                                                                   data-dtp="dtp_NF9F8" name="expire_date" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="input-block mb-2 d-flex justify-content-end mt-1">
                                                    <label for="reporter_info_submit" href="#" class="add-section-btn">
                                                        <div class="parent-icon"><i class="lni lni-save"></i>
                                                        </div>
                                                        <div class="menu-title">Save</div>
                                                    </label>
                                                    <button type="submit" style="display: none"
                                                            id="reporter_info_submit"></button>
                                                </div>
                                            </div>


                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Reporter Info Modal -->
                </div>
            </div>
        </div>
        <div class="col-12 mb-0 mb-md-4">
            <div class="user-feature d-flex justify-content-md-center justify-content-start align-items-center custom-card-scroll  flex-nowrap">
                <div class="user-feature-item" data-bs-toggle="modal" data-bs-target="#change-password">
                    <div class="user-content-body">
                        <img src="{{asset('assets/backend')}}/images/Skill/icon/key.png" alt="">
                        <h6>Change Password</h6>
                    </div>
                </div>
                <div class="user-feature-item">
                    <div class="user-content-body">
                        <img src="{{asset('assets/backend')}}/images/Skill/icon/block.png" alt="">
                        <h6>Terminate</h6>
                    </div>
                </div>
                <div class="user-feature-item">
                    <div class="user-content-body">
                        <img src="{{asset('assets/backend')}}/images/Skill/icon/mail.png" alt="">
                        <h6>Send Email</h6>
                    </div>
                </div>
                <div class="user-feature-item">
                    <div class="user-content-body">
                        <img src="{{asset('assets/backend')}}/images/Skill/icon/messenger.png" alt="">
                        <h6>Send SMS</h6>
                    </div>
                </div>
                <div class="user-feature-item">
                    <div class="user-content-body">
                        <img src="{{asset('assets/backend')}}/images/Skill/icon/credit-card.png" alt="">
                        <h6>ID Card Generated</h6>
                    </div>
                </div>
                <div class="user-feature-item">
                    <div class="user-content-body">
                        <img src="{{asset('assets/backend')}}/images/Skill/icon/direct-download.png" alt="">
                        <h6>Export Cv</h6>
                    </div>
                </div>
                <div class="user-feature-item">
                    <div class="user-content-body">
                        <img src="{{asset('assets/backend')}}/images/Skill/icon/view.png" alt="">
                        <h6>All Post</h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- Left Side Wrap -->
    </div>

    <div class="row">
        <div class="col-12 col-md-5 d-flex">
            <div class="card rounded-4 w-100">
                <div class="card-body">
                    <div class="content-wrapper position-relative">
                        <label class="form-label custom-form-label"><span class="me-2"><i
                                        class="fadeIn animated bx bx-info-circle"></i></span>Basic Information</label>
                        <div class="edit-box-4">
                            <p data-bs-toggle="modal" data-bs-target="#basic-info"><span><i
                                            class="fadeIn animated bx bx-pencil"></i></span></p>
                        </div>
                        <div class="content-body">
                            <div class="p-content-item d-flex align-items-center">
                                <h6 class="d-flex justify-content-between align-items-center">Name (BN) <span>:</span>
                                </h6>
                                <p class="bn-lang">  {{$details->bn_first_name}}  {{$details->bn_last_name}}</p>
                            </div>
                            <div class="p-content-item d-flex align-items-center">
                                <h6 class="d-flex justify-content-between align-items-center">Name (EN) <span>:</span>
                                </h6>
                                <p> {{$details->en_first_name}}  {{$details->en_last_name}}</p>
                            </div>
                            <div class="p-content-item d-flex align-items-center">
                                <h6 class="d-flex justify-content-between align-items-center">Mobile <span>:</span></h6>
                                <p> {{$details->phone}}</p>
                            </div>
                            <div class="p-content-item d-flex align-items-center">
                                <h6 class="d-flex justify-content-between align-items-center">Mobile 2 <span>:</span>
                                </h6>
                                <p> {{$details->phone_2}}</p>
                            </div>
                            <div class="p-content-item d-flex align-items-center">
                                <h6 class="d-flex justify-content-between align-items-center">NID No <span>:</span></h6>
                                <p>{{$details->userDetails->nid}}</p>
                            </div>
                            <div class="p-content-item d-flex align-items-center">
                                <h6 class="d-flex justify-content-between align-items-center">Passport No <span>:</span>
                                </h6>
                                <p>{{$details->userDetails->passport}}</p>
                            </div>
                            <div class="p-content-item d-flex align-items-center">
                                <h6 class="d-flex justify-content-between align-items-center">Gender <span>:</span></h6>
                                <p>{{$details->userDetails->gender}}</p>
                            </div>
                            <div class="p-content-item d-flex align-items-center">
                                <h6 class="d-flex justify-content-between align-items-center">Blood Group <span>:</span>
                                </h6>
                                <p>{{$details->userDetails->blood_group}}</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-7 d-flex">
            <div class="card rounded-4 w-100">
                <div class="card-body">
                    <div class="content-wrapper position-relative">
                        <label class="form-label custom-form-label"><span class="me-2"><i
                                        class="fadeIn animated bx bx-info-circle"></i></span>Personal
                            Information</label>
                        <div class="edit-box-4">
                            <p data-bs-toggle="modal" data-bs-target="#personal-info"><span><i
                                            class="fadeIn animated bx bx-pencil"></i></span></p>
                        </div>
                        <div class="content-body two">
                            <div class="p-content-item d-flex align-items-center">
                                <h6 class="d-flex justify-content-between align-items-center">Father's Name
                                    <span>:</span></h6>
                                <p> {{$details->userDetails->father_name}}</p>
                            </div>
                            <div class="p-content-item d-flex align-items-center">
                                <h6 class="d-flex justify-content-between align-items-center">Mother's Name
                                    <span>:</span></h6>
                                <p>{{$details->userDetails->mother_name}}</p>
                            </div>
                            <div class="p-content-item d-flex align-items-center">
                                <h6 class="d-flex justify-content-between align-items-center">Present Address
                                    <span>:</span></h6>
                                <p>{{$details->userDetails->present_address}}</p>
                            </div>
                            <div class="p-content-item d-flex align-items-center">
                                <h6 class="d-flex justify-content-between align-items-center">Permanent Address
                                    <span>:</span></h6>
                                <p>{{$details->userDetails->permanent_address}}</p>
                            </div>
                            <div class="p-content-item d-flex align-items-center">
                                <h6 class="d-flex justify-content-between align-items-center">Marital Status
                                    <span>:</span></h6>
                                <p>{{$details->userDetails->marital_status}}</p>
                            </div>
                            <div class="p-content-item d-flex align-items-center">
                                <h6 class="d-flex justify-content-between align-items-center">Nationality <span>:</span>
                                </h6>
                                <p>{{$details->userDetails->nationality}}</p>
                            </div>
                            <div class="p-content-item d-flex align-items-center">
                                <h6 class="d-flex justify-content-between align-items-center">Religion <span>:</span>
                                </h6>
                                <p>{{$details->userDetails->religion}}</p>
                            </div>
                            <div class="p-content-item d-flex align-items-center">
                                <h6 class="d-flex justify-content-between align-items-center">Date Of Birth
                                    <span>:</span></h6>
                                <p>{{date('d M Y',strtotime($details->userDetails->date_of_birth))}}</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Photo  Info Modal Start -->
    <div class="modal fade custom-modal-9" id="profile-upload" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg custom-modal-dialog-2 modal-dialog-centered">
            <div class="modal-content custom-modal-content-2">
                <div class="card rounded-4 w-100 custom-card">
                    <div class="card-body">
                        <form class="row g-3">
                            <label class="form-label custom-form-label-modal d-flex align-items-center"><span
                                        class="me-2"><i class="fadeIn animated bx bx-info-circle"></i></span>Profile
                                Picture</label>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <div class="required-file-area" id="required-file-area">
                                            <form>
                                                <input type="file" id="icon-upload-image-2">
                                                <label for="icon-upload-image-2" class="icon-images-f-2 two">
                              <span class="bg-icon-upload">
                                <i class="fadeIn animated bx bx-images"></i>
                              </span>
                                                </label>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-block mb-2 d-flex justify-content-center mt-4">
                                    <a href="#" class="add-section-btn">
                                        <div class="parent-icon"><i class="lni lni-save"></i>
                                        </div>
                                        <div class="menu-title">Save</div>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Photo  Info Modal End-->

    <!-- Basic Info Modal Start-->
    <div class="modal fade custom-modal-2" id="basic-info" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg custom-modal-dialog-2 modal-dialog-centered">
            <div class="modal-content custom-modal-content-2">
                <div class="card rounded-4 w-100 custom-card">
                    <div class="card-body">
                        <form class="row g-3" method="post" action="{{route('admin.reporter.basic.info.edit')}}">
                            @csrf

                            <input type="hidden" name="user_id" value="{{$details->id}}">
                            <div class="col-12">
                                <label class="form-label custom-form-label-modal d-flex align-items-center"><span
                                            class="me-2"><i class="fadeIn animated bx bx-info-circle"></i></span>Basic
                                    Information</label>
                            </div>
                            <div class="col-12">
                                <div class="row mobile-modal-height custom-mobile-scroll">
                                    <div class="col-12 col-md-6">
                                        <div class="input-block mb-2">
                                            <label class="reg-label mb-1">Name(BN)</label>
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <input required type="text" class="form-control input-custom"
                                                           name="bn_first_name" value="{{$details->bn_first_name}}"
                                                           placeholder="First Name">
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <input required type="text" class="form-control input-custom"
                                                           name="bn_last_name" value="{{$details->bn_last_name}}"
                                                           placeholder="Last Name ">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="input-block mb-2">
                                            <label class="reg-label mb-1">Name(EN)</label>
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <input required type="text" class="form-control input-custom"
                                                           name="en_first_name" value="{{$details->en_first_name}}"
                                                           placeholder="First Name">
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <input required type="text" class="form-control input-custom"
                                                           name="en_last_name" value="{{$details->en_last_name}}"
                                                           placeholder="Last Name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="input-block mb-2">
                                            <label class="reg-label mb-1">Mobile Number</label>
                                            <input required type="text" class="form-control input-custom"
                                                   value="{{$details->phone}}" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="input-block mb-2">
                                            <label class="reg-label mb-1">Mobile Number 2</label>
                                            <input type="text" class="form-control input-custom"
                                                   value="{{$details->phone_2}}" name="phone_2"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="input-block mb-2">
                                            <label class="reg-label mb-1">NID No.</label>
                                            <input type="text" class="form-control input-custom" name="nid"
                                                   value="{{$details->userDetails->nid}}"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="input-block mb-2">
                                            <label class="reg-label mb-1">Passport No.</label>
                                            <input type="text" class="form-control input-custom" name="passport"
                                                   value="{{$details->userDetails->passport}}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="category-post">
                                            <div class="mb-2 custom-single-select">
                                                <label class="reg-label mb-1">Blood Group</label>
                                                <select class="single-select-wsearch" name="blood_group">
                                                    @foreach(getBloodGroupList() as $blood)
                                                        <option value="{{$blood}}" {{$details->userDetails->blood_group==$blood?'selected':''}}>{{$blood}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="input-block mb-2">
                                            <div class="category-post">
                                                <div class="mb-2 custom-single-select">
                                                    <label class="reg-label mb-1">Gender</label>
                                                    <select class="single-select-wsearch" name="gender">
                                                        @foreach(getGenderList() as $gender)
                                                            <option value="{{$gender}}" {{$details->userDetails->gender==$gender?'selected':''}}>{{$gender}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="input-block mb-2 d-flex justify-content-end ">
                                    <label for="basic_info" class="add-section-btn">
                                        <div class="parent-icon"><i class="lni lni-save"></i>
                                        </div>
                                        <div class="menu-title">Save</div>
                                    </label>
                                    <button type="submit" style="display: none;" id="basic_info"></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Info Modal End -->

    <!-- personal Info Modal Start -->
    <div class="modal fade custom-modal-2" id="personal-info" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg custom-modal-dialog-2 modal-dialog-centered">
            <div class="modal-content custom-modal-content-2">
                <div class="card rounded-4 w-100 custom-card">
                    <div class="card-body">
                        <form class="row g-3" method="post" action="{{route('admin.reporter.personal.info.edit')}}">
                            @csrf
                            <div class="col-12">
                                <label class="form-label custom-form-label-modal d-flex align-items-center"><span
                                            class="me-2"><i class="fadeIn animated bx bx-info-circle"></i></span>Personal
                                    Information</label>
                            </div>
                            <input type="hidden" name="user_id" value="{{$details->id}}">
                            <div class="col-12">
                                <div class="row mobile-modal-height custom-mobile-scroll">
                                    <div class="col-12 col-md-6">

                                        <div class="input-block mb-2">
                                            <label class="reg-label mb-1">Father's Name</label>
                                            <input type="text" class="form-control input-custom"
                                                   value="{{$details->userDetails->father_name}}" name="father_name"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="input-block mb-2">
                                            <label class="reg-label mb-1">Mother's Name</label>
                                            <input type="text" class="form-control input-custom"
                                                   value="{{$details->userDetails->mother_name}}" name="mother_name"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">


                                        <div class="mb-2 custom-single-select">
                                            <label class="reg-label mb-1">Marital Status</label>
                                            <select class="single-select-wsearch" name="marital_status">
                                                @foreach(getMarriedStatus() as $marriedList)
                                                    <option value="{{$marriedList}}" {{$marriedList==$details->userDetails->marital_status?'selected':''}}>{{$marriedList}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="input-block mb-2">
                                            <label class="reg-label mb-1">Nationality</label>
                                            <input type="text" class="form-control input-custom"
                                                   value=" {{$details->userDetails->nationality}}" name="nationality"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="input-block mb-2">
                                            <label class="reg-label mb-1">Religion</label>
                                            <input type="text" class="form-control input-custom"
                                                   value=" {{$details->userDetails->religion}}" name="religion"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="input-block mb-2">
                                            <label class="reg-label mb-1">Date Of Birth</label>
                                            <input class="result form-control datepicker-custom input-custom"
                                                   type="text" placeholder="Date Picker..." name="date_of_birth"
                                                   value="{{$details->userDetails->date_of_birth}}"
                                                   data-dtp="dtp_NF9F8">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row justify-content-center">
                                            <label class="form-label custom-form-label-modal d-flex align-items-center mb-1"><span
                                                        class="me-2"><i
                                                            class="fadeIn animated bx bx-info-circle"></i></span>Present
                                                Address</label>
                                            <div class="input-block mb-2">
                                                <textarea name="present_address" rows="2" cols="80"
                                                          class="form-control">{{$details->userDetails->present_address}}</textarea>
                                            </div>

                                            <div class="col-12 col-md-4">
                                                <div class="input-block mb-2">
                                                    <div class="category-post">
                                                        <div class="mb-2 custom-single-select">
                                                            <label class="reg-label mb-1">Division</label>
                                                            <select class="single-select-wsearch"
                                                                    name="present_address_division"
                                                                    onchange="districtList1(this)">
                                                                @foreach($divisionList as $division)
                                                                    <option value="{{$division->id}}" {{$division->id==$details->userdetails->present_address_division ? 'selected':''}}>{{$division->name}}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="input-block mb-2">
                                                    <div class="category-post">
                                                        <div class="mb-2 custom-single-select">
                                                            <label class="reg-label mb-1">District</label>

                                                            <select class="single-select-wsearch"
                                                                    onchange="thanaList1(this)"
                                                                    name="present_address_district" id="district1">

                                                                @if($selectedPresentDistrict)
                                                                    @foreach($selectedPresentDistrict as $presentDistrict)
                                                                        <option value="{{$presentDistrict->id}}" {{$presentDistrict->id==$details->userdetails->present_address_district?'selected':'' }}>{{$presentDistrict->name}}</option>
                                                                    @endforeach
                                                                @endif

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="input-block mb-2">
                                                    <div class="category-post">
                                                        <div class="mb-2 custom-single-select">
                                                            <label class="reg-label mb-1">Thana</label>
                                                            <select class="single-select-wsearch"
                                                                    name="present_address_thana" id="thana1">
                                                                @if($selectedPresentThana)
                                                                    @foreach($selectedPresentThana as $presentThana)
                                                                        <option value="{{$presentThana->id}}" {{$presentThana->id==$details->userDetails->present_address_thana?'selected':''}}>{{$presentThana->name}}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <label class="form-label custom-form-label-modal d-flex align-items-center mb-1"><span
                                                        class="me-2"><i
                                                            class="fadeIn animated bx bx-info-circle"></i></span>Permanent
                                                Address</label>
                                            <div class="input-block mb-2">
                                                <textarea name="permanent_address" rows="2" cols="80"
                                                          class="form-control">{{$details->userDetails->permanent_address}}</textarea>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="input-block mb-2">
                                                    <div class="category-post">
                                                        <div class="mb-2 custom-single-select">
                                                            <label class="reg-label mb-1">Division</label>
                                                            <select class="single-select-wsearch"
                                                                    name="permanent_address_division"
                                                                    onchange="districtList2(this)">
                                                                @foreach($divisionList as $divisionB)
                                                                    <option value="{{$divisionB->id}}" {{$divisionB->id==$details->userdetails->permanent_address_division ? 'selected':''}}>{{$divisionB->name}}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="input-block mb-2">
                                                    <div class="category-post">
                                                        <div class="mb-2 custom-single-select">
                                                            <label class="reg-label mb-1">District</label>


                                                            <select class="single-select-wsearch"
                                                                    name="permanent_address_district"
                                                                    onchange="thanaList2(this)" id="district2">

                                                                @if($selectedPermanentDistrict)
                                                                    @foreach($selectedPermanentDistrict as $permanentDistrictPer)
                                                                        <option value="{{$permanentDistrictPer->id}}" {{$permanentDistrictPer->id==$details->userDetails->permanent_address_district?'selected':''}}>{{$permanentDistrictPer->name}}</option>
                                                                    @endforeach
                                                                @endif


                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="input-block mb-2">
                                                    <div class="category-post">
                                                        <div class="mb-2 custom-single-select">
                                                            <label class="reg-label mb-1">Thana</label>
                                                            <select class="single-select-wsearch"
                                                                    name="permanent_address_thana" id="thana2">
                                                                @if($selectedPermanentThana)
                                                                    @foreach($selectedPermanentThana as $permanentThana)
                                                                        <option value="{{$permanentThana->id}}" {{$permanentThana->id==$details->userDetails->permanent_address_thana?'selected':''}}>{{$permanentThana->name}}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="col-12">
                                <div class="input-block mb-2 d-flex justify-content-end ">
                                    <label for="submitPersonal" class="add-section-btn">
                                        <div class="parent-icon"><i class="lni lni-save"></i>
                                        </div>
                                        <div class="menu-title">Save</div>
                                    </label>
                                    <button type="submit" id="submitPersonal" style="display: none"></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Personal Info Modal End-->



    <div class="row align-items-start">
        <div class="col-12 col-md-4 d-flex">
            <div class="card rounded-4 w-100">
                <div class="card-body">
                    <div class="content-wrapper position-relative">
                        <label class="form-label custom-form-label"><span class="me-2"><i
                                        class="fadeIn animated bx bx-info-circle"></i></span>Experience Info</label>
                        <div class="edit-box-4">
                            <p data-bs-toggle="modal" data-bs-target="#experience-info">
                                <span><i class="fadeIn animated bx bx-pencil"></i></span></p>
                        </div>
                        <div class="content-body">
                            <div class="timeline block  custom-card-scroll">
                                @foreach($experience as $itemInfo)
                                    <div class="tl-item active">
                                        <div class="tl-dot b-warning"></div>
                                        <div class="tl-content">
                                            <div class="designation-name">{{$itemInfo->designation}}</div>
                                            <div class="company-name">{{$itemInfo->company_name}}</div>
                                            <div class="tl-date mt-1">
                                                <span>{{ date('d M Y',strtotime($itemInfo->joining_date)) }}</span> -
                                                <span>{{ date('d M Y',strtotime($itemInfo->end_date)) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 d-flex">
            <div class="card rounded-4 w-100">
                <div class="card-body">
                    <div class="content-wrapper position-relative">
                        <label class="form-label custom-form-label"><span class="me-2"><i
                                        class="fadeIn animated bx bx-info-circle"></i></span>Achievement Info</label>
                        <div class="edit-box-4">
                            <p data-bs-toggle="modal" data-bs-target="#achievement-info"><span><i
                                            class="fadeIn animated bx bx-pencil"></i></span></p>
                        </div>
                        <div class="content-body">
                            <div class="timeline block  custom-card-scroll">
                                @foreach($achievement as $key=>$achievementList)
                                    <div class="tl-item active">
                                        <div class="tl-dot b-warning"></div>
                                        <div class="tl-content">
                                            <div class="designation-name">{{$achievementList->title}}</div>
                                            <div class="company-name">{{$achievementList->organization_name}}</div>
                                            <div class="tl-date mt-1">
                                                <span>{{ date('d M Y',strtotime($achievementList->date)) }}</span></div>
                                        </div>
                                    </div>

                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 d-flex">
            <div class="card rounded-4 w-100">
                <div class="card-body">
                    <div class="content-wrapper position-relative">
                        <label class="form-label custom-form-label"><span class="me-2"><i
                                        class="fadeIn animated bx bx-info-circle"></i></span>Skill Info</label>
                        <div class="edit-box-4">
                            <p data-bs-toggle="modal" data-bs-target="#skill-info"><span><i
                                            class="fadeIn animated bx bx-pencil"></i></span></p>
                        </div>
                        <div class="content-body">
                            <div class="skill-box d-flex align-items-center flex-wrap">
                                @foreach($details->userSkill as $skill)
                                    @if($skill->skill=='Word')
                                        <div class="skill-items">
                                            <img src="{{asset('assets/backend')}}/images/Skill/word.png" alt="">
                                            <h6>Word</h6>
                                        </div>
                                    @elseif($skill->skill=='Excel')
                                        <div class="skill-items">
                                            <img src="{{asset('assets/backend')}}/images/Skill/excel.png" alt="">
                                            <h6>Excel</h6>
                                        </div>
                                    @elseif($skill->skill=='Powerpoint')
                                        <div class="skill-items">
                                            <img src="{{asset('assets/backend')}}/images/Skill/powerpoint.png" alt="">
                                            <h6>Powerpoint</h6>
                                        </div>
                                    @elseif($skill->skill=='Typing')
                                        <div class="skill-items">
                                            <img src="{{asset('assets/backend')}}/images/Skill/typing.png" alt="">
                                            <h6>Typing</h6>
                                        </div>
                                    @elseif($skill->skill=='Writing')
                                        <div class="skill-items">
                                            <img src="{{asset('assets/backend')}}/images/Skill/writing.png" alt="">
                                            <h6>Writing</h6>
                                        </div>
                                    @elseif($skill->skill=='Speaking')
                                        <div class="skill-items">
                                            <img src="{{asset('assets/backend')}}/images/Skill/speech.png" alt="">
                                            <h6>Speaking</h6>
                                        </div>
                                    @elseif($skill->skill=='English')
                                        <div class="skill-items">
                                            <img src="{{asset('assets/backend')}}/images/Skill/eng.png" alt="">
                                            <h6>English</h6>
                                        </div>
                                    @elseif($skill->skill=='Talking')
                                        <div class="skill-items">
                                            <img src="{{asset('assets/backend')}}/images/Skill/chat.png" alt="">
                                            <h6>Talking</h6>
                                        </div>

                                    @elseif($skill->skill=='Energetic')
                                        <div class="skill-items">
                                            <img src="{{asset('assets/backend')}}/images/Skill/struggle.png" alt="">
                                            <h6>Energetic</h6>
                                        </div>

                                    @endif

                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 d-flex">
            <div class="card rounded-4 w-100">
                <div class="card-body">
                    <div class="content-wrapper position-relative">
                        <label class="form-label custom-form-label"><span class="me-2"><i
                                        class="fadeIn animated bx bx-info-circle"></i></span>Educational Info</label>
                        <div class="edit-box-4">
                            <p data-bs-toggle="modal" data-bs-target="#educational-info"><span><i
                                            class="fadeIn animated bx bx-pencil"></i></span></p>
                        </div>
                        <div class="content-body">
                            <div class="timeline block custom-card-scroll">

                                @foreach($educationInfo as $eduData)
                                    <div class="tl-item active">
                                        <div class="tl-dot b-warning"></div>
                                        <div class="tl-content">
                                            <div class="designation-name"><span>{{$eduData->examination}}</span> <span
                                                        style="font-weight:700;font-size:11px;">({{$eduData->group}})</span>
                                            </div>
                                            <div class="company-name">{{$eduData->institute_name}}</div>
                                            <div class="tl-date mt-1">Grade - <span>{{$eduData->grade}}</span> -
                                                <span>{{$eduData->board}}</span> -
                                                <span>{{$eduData->passing_year}}</span></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-8 d-flex">
            <div class="card rounded-4 w-100">
                <div class="card-body">
                    <div class="content-wrapper position-relative">
                        <label class="form-label custom-form-label"><span class="me-2"><i
                                        class="fadeIn animated bx bx-info-circle"></i></span>Attachment</label>
                        <div class="edit-box-4">
                            <p data-bs-toggle="modal" data-bs-target="#attachment-info"><span><i
                                            class="fadeIn animated bx bx-pencil"></i></span></p>
                        </div>
                        <div class="content-body">
                            <div class="skill-box d-flex align-items-center flex-wrap">
                                <div class="certificate-item">
                                    <img src="{{asset($details->userDetails->attachment_nid)}}" alt="">
                                    <h6>NID</h6>
                                </div>
                                <div class="certificate-item">
                                    <img src="{{asset($details->userDetails->attachment_passport)}}" alt="">
                                    <h6>Passport</h6>
                                </div>
                                <div class="certificate-item">
                                    <img src="{{asset($details->userDetails->attachment_signature)}}"
                                         alt="">
                                    <h6>Signature</h6>
                                </div>

                                @foreach($details->reporterCertificate as  $certificate)
                                <div class="certificate-item">
                                    <img src="{{asset($certificate->image)}}" alt="">
                                    <h6>{{$certificate->title}}</h6>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Experience Info Modal Start -->
    <div class="modal fade custom-modal-3" id="experience-info" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg custom-modal-dialog-2 modal-dialog-centered">
            <div class="modal-content custom-modal-content-2">
                <div class="card rounded-4 w-100 custom-card">
                    <div class="card-body">
                        <form action="{{route('admin.reporter.experience.add')}}" method="post">
                            @csrf
                            <label class="form-label custom-form-label-modal d-flex align-items-center"><span
                                        class="me-2"><i class="fadeIn animated bx bx-info-circle"></i></span>Experience
                                Information</label>

                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="hidden" name="user_id" value="{{$details->id}}">

                                        <div class="form-items custom-card-scroll job-experience">
                                            <div id="expDiv">
                                                @if($experienceItem > 0)
                                                    @foreach($experience as $key=>$item)
                                                        <div class="bottom-separate">
                                                            <input type="hidden" name="experience_id[]"
                                                                   value="{{$item->id}}">
                                                            <div class="input-block mb-2">
                                                                <span class="float-end"><i
                                                                            class="fal fa-times"></i></span>

                                                                <label class="reg-label mb-1">Designation &nbsp; <strong
                                                                            class="itemnumber designation_i">{{$key+1}}</strong>
                                                                </label>
                                                                <input type="text" class="form-control input-custom"
                                                                       name="designation[]"
                                                                       value="{{$item->designation}}" required>
                                                            </div>
                                                            <div class="input-block mb-2">
                                                                <label class="reg-label mb-1">Company Name</label>
                                                                <input type="text" class="form-control input-custom"
                                                                       name="company_name[]"
                                                                       value="{{$item->company_name}}">
                                                            </div>
                                                            <div class="input-block mb-2 row custom-wrap-join g-3 pb-2">
                                                                <div class="col-md-6">
                                                                    <label class="reg-label mb-1">Job Period
                                                                        Start</label>
                                                                    <input class="result form-control datepicker-custom"
                                                                           name="joining_date[]" type="text"
                                                                           placeholder="Date Picker..."
                                                                           value="{{$item->joining_date}}"
                                                                           data-dtp="dtp_NF9F8" required>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="reg-label mb-1">Job Period End</label>
                                                                    <input class="result form-control datepicker-custom"
                                                                           name="end_date[]" type="text"
                                                                           placeholder="Date Picker..."
                                                                           value="{{$item->end_date}}"
                                                                           data-dtp="dtp_NF9F8" required>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    @endforeach
                                                @else
                                                    <div class="bottom-separate">
                                                        <input type="hidden" name="experience_id[]" value="0">
                                                        <div class="input-block mb-2">
                                                            <span class="float-end"><i class="fal fa-times"></i></span>
                                                            <label class="reg-label mb-1">Designation
                                                                &nbsp; @if($experienceItem>0)<strong
                                                                        class="itemnumber designation_i"></strong> @endif
                                                            </label>
                                                            <input type="text" class="form-control input-custom"
                                                                   name="designation[]" required>
                                                        </div>
                                                        <div class="input-block mb-2">
                                                            <label class="reg-label mb-1">Company Name</label>
                                                            <input type="text" class="form-control input-custom"
                                                                   name="company_name[]" required>
                                                        </div>
                                                        <div class="input-block mb-2 row custom-wrap-join g-3 pb-2">
                                                            <div class="col-md-6">
                                                                <label class="reg-label mb-1">Job Period Start</label>
                                                                <input class="result form-control datepicker-custom"
                                                                       name="joining_date[]" type="text"
                                                                       placeholder="Date Picker..."
                                                                       data-dtp="dtp_NF9F8" required>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="reg-label mb-1">Job Period End</label>
                                                                <input class="result form-control datepicker-custom"
                                                                       name="end_date[]" type="text"
                                                                       placeholder="Date Picker..."
                                                                       data-dtp="dtp_NF9F8" required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                @endif
                                            </div>

                                            <div class="btn-center">
                                              <span class="add-area mt-2" onclick="addExperience()"><i
                                                          class="lni lni-circle-plus"></i></span>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>


                            <div class="col-12">
                                <div class="input-block mb-2 d-flex justify-content-center ">
                                    <label for="addxperience" class="add-section-btn">
                                        <div class="parent-icon"><i class="lni lni-save"></i>
                                        </div>
                                        <div class="menu-title">Save</div>
                                    </label>
                                    <button type="submit" id="addxperience" style="display:none"></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Experience Info Modal End-->

    <!-- Achievement  Info Modal Start -->
    <div class="modal fade custom-modal-3" id="achievement-info" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg custom-modal-dialog-2 modal-dialog-centered">
            <div class="modal-content custom-modal-content-2">
                <div class="card rounded-4 w-100 custom-card">
                    <div class="card-body">
                        <form class="row g-3" method="post" action="{{route('admin.reporter.achievement.store')}}">
                            @csrf
                            <label class="form-label custom-form-label-modal d-flex align-items-center"><span
                                        class="me-2"><i class="fadeIn animated bx bx-info-circle"></i></span>Achievement</label>
                            <div class="col-12">
                                <input type="hidden" name="user_id" value="{{$details->id}}">
                                <div class="form-items custom-card-scroll job-experience" id="achievementList">
                                    @if($achievementCount >0)
                                        @foreach($achievement as $key=>$achieveItem)
                                            <div class="achievementItem bottom-separate">
                                                <input type="hidden" name="id[]" value="{{$achieveItem->id}}">
                                                <div class="input-block mb-2">
                                                    <label class="reg-label mb-1">Organization Name <strong
                                                                class="itemnumber achiv_i">{{$key+1}}</strong></label>
                                                    <input type="text" class="form-control input-custom"
                                                           name="organization_name[]"
                                                           value="{{$achieveItem->organization_name}}"
                                                           required>
                                                </div>
                                                <div class="input-block mb-2">
                                                    <label class="reg-label mb-1">Title</label>
                                                    <input type="text" class="form-control input-custom" name="title[]"
                                                           value="{{$achieveItem->title}}" required>
                                                </div>

                                                <div class="input-block mb-2 row custom-wrap-join g-3 pb-2">
                                                    <div class="col-12">
                                                        <label class="reg-label mb-1">Date</label>
                                                        <input class="result form-control datepicker-custom"
                                                               name="date[]"
                                                               type="text"
                                                               placeholder="Date Picker..." data-dtp="dtp_NF9F8"
                                                               value="{{$achieveItem->date}}">
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="achievementItem bottom-separate">
                                            <input type="hidden" name="id[]" value="0">
                                            <div class="input-block mb-2">
                                                <label class="reg-label mb-1">Organization Name @if($achievementCount>0)
                                                        <strong class="itemnumber achiv_i"></strong> @endif</label>
                                                <input type="text" class="form-control input-custom"
                                                       name="organization_name[]"
                                                       required>
                                            </div>
                                            <div class="input-block mb-2">
                                                <label class="reg-label mb-1">Title</label>
                                                <input type="text" class="form-control input-custom" name="title[]"
                                                       required>
                                            </div>
                                            <div class="input-block mb-2 row custom-wrap-join g-3 pb-2">
                                                <div class="col-12">
                                                    <label class="reg-label mb-1">Date</label>
                                                    <input class="result form-control datepicker-custom" name="date[]"
                                                           type="text"
                                                           placeholder="Date Picker..." data-dtp="dtp_NF9F8" required>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                                <div class="col-12 text-center">
                                    <span class="add-area mt-2" onclick="addAchievement()"><i
                                                class="lni lni-circle-plus"></i></span>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-block mb-2 d-flex justify-content-center ">
                                    <label for="acv" class="add-section-btn">
                                        <div class="parent-icon"><i class="lni lni-save"></i>
                                        </div>
                                        <div class="menu-title">Save</div>
                                    </label>
                                    <button id="acv" type="submit" style="display: none"></button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Achievement  Info Modal End-->

    <!-- Skill  Info Modal Start -->
    <div class="modal fade custom-modal-4" id="skill-info" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg custom-modal-dialog-2 modal-dialog-centered">
            <div class="modal-content custom-modal-content-2">
                <div class="card rounded-4 w-100 custom-card">
                    <div class="card-body">
                        <form class="row g-3" method="post" action="{{route('admin.skill.store')}}">
                            @csrf
                            <input type="hidden" name="user_id" value="{{$details->id}}">
                            <label class="form-label custom-form-label-modal d-flex align-items-center"><span
                                        class="me-2"><i class="fadeIn animated bx bx-info-circle"></i></span>Skill Info</label>
                            <div class="col-12">
                                <div class="switcher-custom-wrapper mobile-modal-height custom-mobile-scroll">
                                    <ul class="custom-checkbox-2">


                                        <li class="custom-check-list-2">
                                            <input type="checkbox" id="myCheckbox1"
                                                   {{ in_array("Word",$userActiveSkill)?'checked':''}} name="skill[]"
                                                   value="Word"
                                                   class="custom-check skillData">
                                            <label for="myCheckbox1" class="custom-check-label-2 activeSkill"><img
                                                        src="{{asset('assets/backend')}}/images/Skill/word.png"> <span>Word</span></label>
                                        </li>
                                        <li class="custom-check-list-2">
                                            <input type="checkbox" id="myCheckbox2"
                                                   {{ in_array("Powerpoint",$userActiveSkill)?'checked':''}} name="skill[]"
                                                   value="Powerpoint"
                                                   class="custom-check skillData">
                                            <label for="myCheckbox2" class="custom-check-label-2"><img
                                                        src="{{asset('assets/backend')}}/images/Skill/powerpoint.png">
                                                <span>Powerpoint</span></label>
                                        </li>
                                        <li class="custom-check-list-2">
                                            <input type="checkbox" id="myCheckbox3"
                                                   {{ in_array("Excel",$userActiveSkill)?'checked':''}} name="skill[]"
                                                   value="Excel"
                                                   class="custom-check skillData">
                                            <label for="myCheckbox3" class="custom-check-label-2"><img
                                                        src="{{asset('assets/backend')}}/images/Skill/excel.png">
                                                <span>Excel</span></label>
                                        </li>
                                        <li class="custom-check-list-2">
                                            <input type="checkbox" id="myCheckbox4"
                                                   {{ in_array("Typing",$userActiveSkill)?'checked':''}}  name="skill[]"
                                                   value="Typing"
                                                   class="custom-check skillData">
                                            <label for="myCheckbox4" class="custom-check-label-2"><img
                                                        src="{{asset('assets/backend')}}/images/Skill/typing.png">
                                                <span>Typing</span> </label>
                                        </li>
                                        <li class="custom-check-list-2">
                                            <input type="checkbox" id="myCheckbox5"
                                                   {{ in_array("Writing",$userActiveSkill)?'checked':''}} name="skill[]"
                                                   value="Writing"
                                                   class="custom-check skillData">
                                            <label for="myCheckbox5" class="custom-check-label-2"><img
                                                        src="{{asset('assets/backend')}}/images/Skill/writing.png">
                                                <span>Writing</span> </label>
                                        </li>
                                        <li class="custom-check-list-2">
                                            <input type="checkbox" id="myCheckbox6"
                                                   {{ in_array("Speaking",$userActiveSkill)?'checked':''}} name="skill[]"
                                                   value="Speaking"
                                                   class="custom-check skillData">
                                            <label for="myCheckbox6" class="custom-check-label-2"><img
                                                        src="{{asset('assets/backend')}}/images/Skill/speech.png">
                                                <span>Speaking</span> </label>
                                        </li>
                                        <li class="custom-check-list-2">
                                            <input type="checkbox" id="myCheckbox7" name="skill[]"
                                                   {{ in_array("English",$userActiveSkill)?'checked':''}} value="English"
                                                   class="custom-check skillData">
                                            <label for="myCheckbox7" class="custom-check-label-2"><img
                                                        src="{{asset('assets/backend')}}/images/Skill/eng.png">
                                                <span>English</span> </label>
                                        </li>
                                        <li class="custom-check-list-2">
                                            <input type="checkbox" id="myCheckbox8" name="skill[]"
                                                   {{ in_array("Talking",$userActiveSkill)?'checked':''}} value="Talking"
                                                   class="custom-check skillData">
                                            <label for="myCheckbox8" class="custom-check-label-2"><img
                                                        src="{{asset('assets/backend')}}/images/Skill/chat.png">
                                                <span>Talking</span> </label>
                                        </li>
                                        <li class="custom-check-list-2">
                                            <input type="checkbox" id="myCheckbox9" name="skill[]"
                                                   {{ in_array("Energetic",$userActiveSkill)?'checked':''}} value="Energetic"
                                                   class="custom-check skillData">
                                            <label for="myCheckbox9" class="custom-check-label-2"><img
                                                        src="{{asset('assets/backend')}}/images/Skill/struggle.png">
                                                <span>Energetic</span> </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-block mb-2 d-flex justify-content-center ">
                                    <label for="skillSubmit" href="#" class="add-section-btn">
                                        <div class="parent-icon"><i class="lni lni-save"></i>
                                        </div>
                                        <div class="menu-title">Save</div>
                                    </label>
                                    <button type="submit" id="skillSubmit" style="display: none"></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Skill  Info Modal End-->

    <!-- Educational  Info Modal Start -->
    <div class="modal fade custom-modal-7" id="educational-info" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg custom-modal-dialog-2 modal-dialog-centered">
            <div class="modal-content custom-modal-content-2">
                <div class="card rounded-4 w-100 custom-card">
                    <div class="card-body">
                        <form class="row g-3" method="post" action="{{route('admin.reporter.education.info.store')}}">
                            @csrf
                            <label class="form-label custom-form-label-modal d-flex align-items-center"><span
                                        class="me-2"><i class="fadeIn animated bx bx-info-circle"></i></span>Educational
                                Information </label>
                            <div class="col-12">
                                <input type="hidden" name="user_id" value="{{$details->id}}">
                                <div class="form-items row justify-content-center custom-card-scroll educational-info">

                                    <div class="col-12" id="educationInfo">

                                        @if($educationInfoCount>0)
                                            @foreach($educationInfo as $key=>$eduInfo)
                                                <div class="row bottom-separate">
                                                    <input type="hidden" name="id[]" value="{{$eduInfo->id}}">
                                                    {{--<div class="col-12  eduinfo_si text-center">--}}
                                                    {{--<strong class="">1</strong>--}}
                                                    {{--</div>--}}
                                                    <div class="col-12 col-md-6">
                                                        <div class="input-block mb-2">
                                                            <label class="reg-label mb-1">Institution Name <strong
                                                                        class="itemnumber edu_i">{{$key+1}}</strong></label>
                                                            <input type="text" class="form-control input-custom"
                                                                   name="institute_name[]"
                                                                   value="{{$eduInfo->institute_name}}"
                                                                   required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-3">
                                                        <div class="input-block mb-2">
                                                            <label class="reg-label mb-1">Examination</label>
                                                            <input type="text" class="form-control input-custom"
                                                                   name="examination[]"
                                                                   value="{{$eduInfo->examination}}"
                                                                   required="" spellcheck="false" placeholder="SSC">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-3">
                                                        <div class="input-block mb-2">
                                                            <label class="reg-label mb-1">Group</label>
                                                            <input type="text" class="form-control input-custom"
                                                                   name="group[]"
                                                                   required=""
                                                                   value="{{$eduInfo->group}}" spellcheck="false"
                                                                   placeholder="Science">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-4">
                                                        <div class="input-block mb-2">
                                                            <label class="reg-label mb-1">Grade/ CGPA</label>
                                                            <input type="text" class="form-control input-custom"
                                                                   value="{{$eduInfo->grade}}" name="grade[]"
                                                                   required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-4">
                                                        <div class="input-block mb-2">
                                                            <label class="reg-label mb-1">Board</label>
                                                            <input type="text" class="form-control input-custom"
                                                                   name="board[]"
                                                                   value="{{$eduInfo->board}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-4">
                                                        <div class="input-block mb-2">
                                                            <label class="reg-label mb-1">Passing year</label>
                                                            <input type="text" class="form-control input-custom"
                                                                   value="{{$eduInfo->passing_year}}"
                                                                   name="passing_year[]"
                                                                   required>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                        @else
                                            <div class="row bottom-separate">
                                                <input type="hidden" name="id[]" value="0">
                                                {{--<div class="col-12 col-md-6 eduinfo_si">--}}
                                                {{--<h2>Education info 1</h2>--}}
                                                {{--</div>--}}
                                                <div class="col-12 col-md-6">
                                                    <div class="input-block mb-2">
                                                        <label class="reg-label mb-1">Institution Name <strong
                                                                    class="itemnumber edu_i">1</strong></label>
                                                        <input type="text" class="form-control input-custom"
                                                               name="institute_name[]"
                                                               required>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <div class="input-block mb-2">
                                                        <label class="reg-label mb-1">Examination</label>
                                                        <input type="text" class="form-control input-custom"
                                                               name="examination[]"
                                                               required="" spellcheck="false"
                                                               placeholder="SSC">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <div class="input-block mb-2">
                                                        <label class="reg-label mb-1">Group</label>
                                                        <input type="text" class="form-control input-custom"
                                                               name="group[]"
                                                               required="" spellcheck="false"
                                                               placeholder="Science">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <div class="input-block mb-2">
                                                        <label class="reg-label mb-1">Grade/ CGPA</label>
                                                        <input type="text" class="form-control input-custom"
                                                               name="grade[]"
                                                               required>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <div class="input-block mb-2">
                                                        <label class="reg-label mb-1">Board</label>
                                                        <input type="text" class="form-control input-custom"
                                                               name="board[]"
                                                        >
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <div class="input-block mb-2">
                                                        <label class="reg-label mb-1">Passing year</label>
                                                        <input type="text" class="form-control input-custom"
                                                               name="passing_year[]"
                                                               required>
                                                    </div>
                                                </div>
                                            </div>

                                        @endif


                                    </div>


                                    <div class="col-12 btn-center">
                                        <span class="add-area mt-2" onclick="educationInfoAdd()"><i
                                                    class="lni lni-circle-plus"></i></span>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-block mb-2 d-flex justify-content-end ">
                                    <label for="educationStore" class="add-section-btn">
                                        <div class="parent-icon"><i class="lni lni-save"></i>
                                        </div>
                                        <div class="menu-title">Save</div>
                                    </label>
                                    <button style="display: none" type="submit" id="educationStore"></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Educational  Info Modal End-->

    <!-- Others  Info Modal Start -->
    <div class="modal fade custom-modal-6" id="attachment-info" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg custom-modal-dialog-2 modal-dialog-centered">
            <div class="modal-content custom-modal-content-2">
                <div class="card rounded-4 w-100 custom-card">
                    <div class="card-body">
                        <input type="text" id="parentClass" style="display: none">
                        <form class="row g-3" method="post" action="{{route('admin.upload.reporter.attachment')}}"  enctype="multipart/form-data">
                            @csrf
                            <input type="hidden"  name="user_id" value="{{$details->id}}" >
                            <label class="form-label custom-form-label-modal d-flex align-items-center"><span
                                        class="me-2"><i class="fadeIn animated bx bx-info-circle"></i></span>Attachment
                                File</label>
                            <div class="col-12">
                                <div class="row mobile-modal-height custom-mobile-scroll ">
                                    <div class="col-12 col-md-4">
                                        <div class="required-file-area" id="required-file-area">
                                            <h6 class="mb-2 mt-2">NID</h6>

                                                <label for="upload_nid" class="icon-images-f-2 p0">
                                                    <input type="file" class="img_input"   p-class="p0" value="555" id="upload_nid" style="display: none">
                                                    <input type="text" class="img_input_set" name="nid" style="display: none">
                                                    <span class="bg-icon-upload img_show" id="nid_img">
                                                        @if($details->userDetails->attachment_nid)
                                                        <img src="{{asset($details->userDetails->attachment_nid)}}" width="100%" height="100%" alt="">
                                                        @else
                                                            <i class="fadeIn animated bx bx-images"></i>
                                                        @endif
                                                     </span>
                                                </label>

                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="required-file-area" id="required-file-area">
                                            <h6 class="mb-2 mt-2">Passport</h6>
                                                <label for="passport" class="icon-images-f-2 p1">
                                                    <input type="file" class="img_input"   p-class="p1" id="passport" style="display:none">
                                                    <input type="text" class="img_input_set" name="passport" style="display: none">
                                                    <span class="bg-icon-upload img_show">
                                                      @if($details->userDetails->attachment_passport)
                                                            <img src="{{asset($details->userDetails->attachment_passport)}}" width="100%" height="100%" alt="">
                                                        @else
                                                            <i class="fadeIn animated bx bx-images"></i>
                                                        @endif
                                                    </span>
                                                </label>

                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="required-file-area" id="required-file-area">
                                            <h6 class="mb-2 mt-2">Signature</h6>


                                                <label for="signature" class="icon-images-f-2 p2">
                                                    <input type="file" class="img_input"   p-class="p2" id="signature" style="display:none">
                                                    <input type="text" class="img_input_set" name="signature" style="display: none">
                                                    <span class="bg-icon-upload img_show">
                                                       @if($details->userDetails->attachment_signature)
                                                            <img src="{{asset($details->userDetails->attachment_signature)}}" width="100%" height="100%" alt="">
                                                        @else
                                                            <i class="fadeIn animated bx bx-images"></i>
                                                        @endif
                                                    </span>
                                                </label>

                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <label class="form-label custom-form-label-modal d-flex align-items-center mb-2"><span
                                                    class="me-2"><i
                                                        class="fadeIn animated bx bx-info-circle"></i></span>Certification</label>
                                    </div>
                                    <div class="col-12">
                                        <div class="row justify-content-start certificate-body custom-card-scroll"
                                             id="certificateDiv">
                                            <div class="col-12 col-md-4 mb-2">
                                                <div class="required-file-area" id="required-file-area">
                                                    <h6 class="mb-2 mt-2">Certificate - <span class="carnumber">1</span></h6>

                                                        <label for="cr1" class="icon-images-f-2 pc0">
                                                            <input type="file" class="img_input"  p-class="pc0" id="cr1" style="display: none">
                                                            <input type="text" class="img_input_set" name="certificate[]"  style="display: none">
                                                            <span class="bg-icon-upload img_show">
                                                         <i class="fadeIn animated bx bx-images"></i>
                                                         </span>
                                                        </label>

                                                </div>


                                                    <div class="input-block  mt-2">
                                                        <input type="text" class="form-control input-custom"
                                                               value=""  placeholder="Title" name="certificate_title[]"
                                                               required
                                                        >
                                                    </div>

                                            </div>
                                            {{--<div class="col-12 col-md-4">--}}
                                            {{--<div class="required-file-area" id="required-file-area">--}}
                                            {{--<h6 class="mb-2 mt-2">Certificate - 02</h6>--}}
                                            {{--<form>--}}
                                            {{--<input type="file" id="icon-upload-image-2">--}}
                                            {{--<label for="icon-upload-image-2" class="icon-images-f-2">--}}
                                            {{--<span class="bg-icon-upload">--}}
                                            {{--<i class="fadeIn animated bx bx-images"></i>--}}
                                            {{--</span>--}}
                                            {{--</label>--}}
                                            {{--</form>--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-12 col-md-4">--}}
                                            {{--<div class="required-file-area" id="required-file-area">--}}
                                            {{--<h6 class="mb-2 mt-2">Certificate - 03</h6>--}}
                                            {{--<form>--}}
                                            {{--<input type="file" id="icon-upload-image-2">--}}
                                            {{--<label for="icon-upload-image-2" class="icon-images-f-2">--}}
                                            {{--<span class="bg-icon-upload">--}}
                                            {{--<i class="fadeIn animated bx bx-images"></i>--}}
                                            {{--</span>--}}
                                            {{--</label>--}}
                                            {{--</form>--}}
                                            {{--</div>--}}
                                            {{--</div>--}}

                                        </div>

                                        <div class="col-12 mt-2  b-separate">
                                            <span class="add-area mt-2" onclick="addCertificate()"><i
                                                        class="lni lni-circle-plus"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="input-block mb-2 d-flex justify-content-end ">
                                    <label for="cr" class="add-section-btn">
                                        <div class="parent-icon"><i class="lni lni-save"></i>
                                        </div>
                                        <div class="menu-title">Save</div>

                                    </label>
                                    <button type="submit" id="cr" style="display: none"></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Educational  Info Modal End-->

    <!-- Experience Info Modal Start -->
    <div class="modal fade custom-modal-3" id="change-password" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg custom-modal-dialog-2 modal-dialog-centered">
            <div class="modal-content custom-modal-content-2">
                <div class="card rounded-4 w-100 custom-card">
                    <div class="card-body">
                        <form class="row g-3">
                            <label class="form-label custom-form-label-modal d-flex align-items-center"><span
                                        class="me-2"><i class="fadeIn animated bx bx-info-circle"></i></span>Change
                                Password</label>
                            <div class="col-12">
                                <div class="form-items">
                                    <div class="input-block  d-flex flex-wrap align-items-center">
                                        <label class="reg-label mb-1 d-block pass-title">New Password</label>
                                        <input type="text" class="form-control input-custom generate-input-box"
                                               name="input-text" required="" placeholder="">
                                        <a href="#" class="generate-pass"><span><i
                                                        class="fadeIn animated bx bx-refresh"></i></span></a>

                                        <div class="check-input-data d-flex justify-content-center align-items-center mt-2">
                                            <div class="switcher-custom-wrapper">
                                                <ul class="custom-checkbox-3">
                                                    <li class="custom-check-list-3">
                                                        <input type="checkbox" id="send-mail" class="custom-check">
                                                        <label for="send-mail" class="custom-check-label-3"><img
                                                                    src="{{asset('assets/backend')}}/images/Skill/message.png">
                                                            <span>Send Email</span></label>
                                                    </li>
                                                    <li class="custom-check-list-3">
                                                        <input type="checkbox" id="send-sms" class="custom-check">
                                                        <label for="send-sms" class="custom-check-label-3"><img
                                                                    src="{{asset('assets/backend')}}/images/Skill/send.png">
                                                            <span>Send SMS</span></label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-block d-flex justify-content-center ">
                                    <a href="#" class="add-section-btn">
                                        <div class="parent-icon"><i class="lni lni-save"></i>
                                        </div>
                                        <div class="menu-title">Save</div>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Experience Info Modal End-->


    {{--Another  exprience add--}}
    <div class="row" style="display: none" id="another_experience">
        <div class="bottom-separate">
            <input type="hidden" name="experience_id[]" value="0">
            <div class="input-block mb-2">
                <label class="reg-label mb-1">Designation &nbsp; <strong
                            class="itemnumber designation_i"></strong></label>
                <input type="text" class="form-control input-custom"
                       name="designation[]" required>
            </div>
            <div class="input-block mb-2">
                <label class="reg-label mb-1">Company Name</label>
                <input type="text" class="form-control input-custom"
                       name="company_name[]" required>
            </div>
            <div class="input-block mb-2 row custom-wrap-join g-3 pb-2">
                <div class="col-md-6">
                    <label class="reg-label mb-1">Job Period Start</label>
                    <input class="result form-control datepicker-custom"
                           name="joining_date[]" type="text"
                           placeholder="Date Picker..." data-dtp="dtp_NF9F8" required>
                </div>
                <div class="col-md-6">
                    <label class="reg-label mb-1">Job Period End</label>
                    <input class="result form-control datepicker-custom"
                           name="end_date[]" type="text"
                           placeholder="Date Picker..." data-dtp="dtp_NF9F8" required>
                </div>
            </div>
        </div>
    </div>

    {{--add exprience--}}

    {{--Another  education info add--}}


    <div id="educationInfoitem" style="display:none">
        <div class="row bottom-separate">
            <input type="hidden" name="id[]" value="0">
            <div class="col-12 col-md-6">
                <div class="input-block mb-2">
                    <label class="reg-label mb-1">Institution Name <strong class="itemnumber edu_i">1</strong></label>
                    <input type="text" class="form-control input-custom" name="institute_name[]"
                           required>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="input-block mb-2">
                    <label class="reg-label mb-1">Examination</label>
                    <input type="text" class="form-control input-custom" name="examination[]"
                           required="" spellcheck="false" placeholder="SSC">
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="input-block mb-2">
                    <label class="reg-label mb-1">Group</label>
                    <input type="text" class="form-control input-custom" name="group[]"
                           required="" spellcheck="false" placeholder="Science">
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="input-block mb-2">
                    <label class="reg-label mb-1">Grade/ CGPA</label>
                    <input type="text" class="form-control input-custom" name="grade[]"
                           required>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="input-block mb-2">
                    <label class="reg-label mb-1">Board</label>
                    <input type="text" class="form-control input-custom" name="board[]"
                    >
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="input-block mb-2">
                    <label class="reg-label mb-1">Passing year</label>
                    <input type="text" class="form-control input-custom" name="passing_year[]"
                           required>
                </div>
            </div>
        </div>
    </div>



    {{--end Another  education info add--}}

    {{--add echievement--}}

    <div id="achievementItem" style="display: none">
        <div class="achievementItem bottom-separate">
            <input type="hidden" name="id[]" value="0">
            <div class="input-block mb-2">
                <label class="reg-label mb-1">Organization Name <strong class="itemnumber achiv_i"></strong></label>
                <input type="text" class="form-control input-custom" name="organization_name[]"
                       required>
            </div>
            <div class="input-block mb-2">
                <label class="reg-label mb-1">Title</label>
                <input type="text" class="form-control input-custom" name="title[]"
                       required>
            </div>
            <div class="input-block mb-2 row custom-wrap-join g-3 pb-2">
                <div class="col-12">
                    <label class="reg-label mb-1">Date</label>
                    <input class="result form-control datepicker-custom" name="date[]" type="text"
                           placeholder="Date Picker..." data-dtp="dtp_NF9F8" required>
                </div>
            </div>
        </div>
    </div>
    {{--add echievement--}}

@endsection

@section('modal')
    @include('backend.admin.partials._common_image_crop_modal')
@endsection


@section('css_plugins')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/plugins/cropperjs/cropper.css')}}?v=1.7"/>

    <link href="{{ asset('assets/backend')}}/plugins/datetimepicker/css/classic.css" rel="stylesheet"/>
    <link href="{{ asset('assets/backend')}}/plugins/datetimepicker/css/classic.time.css" rel="stylesheet"/>
    <link href="{{ asset('assets/backend')}}/plugins/datetimepicker/css/classic.date.css" rel="stylesheet"/>
    <link rel="stylesheet"
          href="{{ asset('assets/backend')}}/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


    <link href="{{ asset('assets/backend')}}/plugins/select2/css/select2.min.css" rel="stylesheet"/>
    <link href="{{ asset('assets/backend')}}/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet"/>

@endsection

@section('js_plugins')
    <script src="{{asset('assets/backend/plugins/cropperjs/cropper.js')}}"></script>
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
        {{--img Crope Start--}}
        /*crop logo image*/
        var $modal = $('#logoImgModal');
        var image = document.getElementById('modalShowImage');
        var cropper;
        $("body").on("change", ".img_input", function (e) {
            var files = e.target.files;
            let parentCls = $(this).attr('p-class');
            $('#parentClass').val(parentCls)
            var done = function (url) {
                showLoader('Loading...', 'Please Wait');
                image.src = url;
                $modal.modal('show');
                $("#icon-upload-image").val('');
            };
            var reader;
            var file;
            var url;

            if (files && files.length > 0) {
                file = files[0];

                reader = new FileReader();
                reader.onload = function (e) {
                    done(reader.result);
                };
                reader.readAsDataURL(file);
            }
        });
        $modal.on('shown.bs.modal', function () {
            cropper = new Cropper(image, {
                // aspectRatio: 16 / 9,
                // viewMode: 3,
                preview: '.preview',
                ready() {
                    setTimeout(function () {
                        /*if($(window).width() <= 768) {
                            $(".imgCropModal .modal-body").attr('style', 'padding: unset;');
                        }*/
                        hideLoader();
                    }, 500);
                },
            });

        }).on('hidden.bs.modal', function () {
            cropper.destroy();
            cropper = null;
            $(".imgCropModal .modal-body").removeAttr('style');
        }).on('loaded.bs.modal', function (e) {

            setTimeout(function () {
                // $(".imgCropModal .modal-body").attr('style', 'padding: unset;padding-left: 4px;');
                hideLoader();
            }, 500);
        });

        $("#crop").click(function () {
            var canvas = cropper.getCroppedCanvas({
                width: 800,
                height: 450
            });
            canvas.toBlob(function (blob) {
                $modal.modal('hide');
                url = URL.createObjectURL(blob);
                var reader = new FileReader();
                reader.readAsDataURL(blob);
                reader.onloadend = function () {
                    var base64data = reader.result;
                    let parentClass = $('#parentClass').val();
                    $('.' + parentClass).find('.img_input_set').val(base64data);
                    // $("#nid_img").html(`<img width="100%" height="100%" src="${base64data}">`);
                    $('.' + parentClass).find('.img_show').html(`<img width="100%" height="100%" src="${base64data}">`);


                    $("#crop_logo").val(base64data);


                    // $('#imgSave').submit();

                    // saveImage(base64data)

                }
            });
        });


        //multi crop


        {{--img Crope end--}}

        function addExperience() {
            var esperience = $('#another_experience').html();

            $('#expDiv').append(esperience);

            $('.datepicker-custom').bootstrapMaterialDatePicker({
                time: false
            });

            $('.designation_i').each(function (key) {
                $(this).html(key + 1);
            })
        }

        function educationInfoAdd() {
            var item = $('#educationInfoitem').html();

            $('#educationInfo').append(item);

            $('.edu_i').each(function (key) {
                $(this).html(key + 1);
            })
        }

        function addAchievement() {
            var achievementItem = $('#achievementItem').html();

            $('#achievementList').append(achievementItem);

            $('.datepicker-custom').bootstrapMaterialDatePicker({
                time: false
            });
            $('.achiv_i').each(function (key) {
                $(this).html(key + 1);
            })

        }

    </script>


    <script>
        function districtList1(data) {
            var division_id = $('option:selected', data).val();

            $.ajax({
                url: "{{route('admin.district.get')}}",
                type: "get",
                data: {
                    id: division_id,
                },
                success: function (response) {
                    $('#district1').html(response)
                },
                error: function (xhr) {
                    //Do Something to handle error
                }
            });

        }

        function thanaList1(data) {
            var district_id = $(data).val();

            $.ajax({
                url: "{{route('admin.thana.get')}}",
                type: "get",
                data: {
                    id: district_id,
                },
                success: function (response) {
                    $('#thana1').html(response)
                },
                error: function (xhr) {
                    //Do Something to handle error
                }
            });

        }
    </script>
    <script>
        function districtList2(data) {
            var division_id = $('option:selected', data).val();

            $.ajax({
                url: "{{route('admin.district.get')}}",
                type: "get",
                data: {
                    id: division_id,
                },
                success: function (response) {
                    $('#district2').html(response)
                },
                error: function (xhr) {
                    //Do Something to handle error
                }
            });

        }

        function thanaList2(data) {
            var district_id = $(data).val();

            $.ajax({
                url: "{{route('admin.thana.get')}}",
                type: "get",
                data: {
                    id: district_id,
                },
                success: function (response) {
                    $('#thana2').html(response)
                },
                error: function (xhr) {
                    //Do Something to handle error
                }
            });

        }

        function addCertificate() {
            let uniqid = Date.now();
            let newCrtfc = ` <div class="col-12 col-md-4 mb-2">
                                                <div class="required-file-area" id="required-file-area">
                                                    <h6 class="mb-2 mt-2 ">Certificate - <span class="carnumber">1</span></h6>
                                                        <label for="cr${uniqid}" class="icon-images-f-2 pc${uniqid}">
                                                            <input type="file" class="img_input"  p-class="pc${uniqid}" id="cr${uniqid}" style="display: none">
                                                            <input type="text" class="img_input_set" name="certificate[]" style="display: none">
                                                        <span class="bg-icon-upload img_show">
                                                         <i class="fadeIn animated bx bx-images"></i>
                                                         </span>
                                                        </label>
                                                </div>
                                                  <div class="input-block  mt-2">
                                                        <input type="text" class="form-control input-custom"
                                                               value="" placeholder="Title" name="certificate_title[]"
                                                              required
                                                        >
                                                    </div>
                                            </div>`


            $('#certificateDiv').append(newCrtfc)


            $( ".carnumber" ).each(function( index ) {
                $( this ).html(index+1);
            });


        }


        // function setSkill(data){
        //
        //
        //         $(data).find('.skillData').click();
        //
        // }
    </script>
@endsection


