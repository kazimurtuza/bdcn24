@extends('backend.admin.layouts.master')
@section('css')
    <link href="{{ asset('assets/backend')}}/plugins/select2/css/select2.min.css" rel="stylesheet"/>
    <link href="{{ asset('assets/backend')}}/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet"/>
@endsection
@section('main_content')

    <!-- Post List End -->

    <!-- Post List End -->
    <div class="row align-items-start justify-content-left">
        <div class="col-12 col-md-12">
            <div class="card rounded-4 w-100 custom-card">
                <div class="card-body">

                    <form class="row g-3 justify-content-left" method="post" action="{{route('admin.reporter.store')}}">
                        @csrf
                        <label class="form-label custom-form-label-modal d-flex align-items-center mb-2"><span
                                    class="me-2"><i
                                        class="fadeIn animated bx bx-info-circle"></i></span>Registration</label>
                        <div class="col-12 col-md-2 mt-1 upload-profile-reg">
                            <div class="required-file-area reporter-reg" id="required-file-area">
                                <h6 class="mb-2"> Photo Upload</h6>
                                <input type="file" id="icon-upload-image-2">
                                <label for="icon-upload-image-2" class="icon-images-f-2">
                      <span class="bg-icon-upload">
                        <i class="fadeIn animated bx bx-images"></i>
                        </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-md-10">
                            <div class="row align-items-bottom justify-content-bottom g-3">
                                <div class="col-12 col-md-4 mt-1">
                                    <div class="form-items">
                                        <div class="input-block mb-2">
                                            <div class="category-post">
                                                <div class="mb-2 custom-single-select">
                                                    <label class="reg-label mb-1">Reporter Role</label>
                                                    <select class="single-select-wsearch" name="role_id" required>
                                                        @foreach($reporterRole as $role)
                                                            <option value="{{$role->id}}" {{old('role_id')==$role->id?'selected':''}} {{$role->is_default==1?'selected':''}} >{{$role->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mt-1">
                                    <div class="form-items">
                                        <div class="input-block mb-2">
                                            <div class="category-post">
                                                <div class="mb-2 custom-single-select">
                                                    <label class="reg-label mb-1">Reporter Type</label>
                                                    <select class="single-select-wsearch" name="reporter_type_id"
                                                            required>
                                                        <option value="">-SELECT-</option>
                                                        @foreach($reporterType as $type)
                                                            <option value="{{$type->id}}" {{old('reporter_type_id')==$type->id?'selected':''}}>{{$type->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mt-1">
                                    <div class="form-items">
                                        <div class="input-block mb-2">
                                            <label class="reg-label mb-1">ID Generator</label>
                                            <input type="text" class="form-control input-custom" name="reporter_id"
                                                   id="input-text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mt-1">
                                    <div class="form-items">
                                        <div class="input-block mb-2">
                                            <label class="reg-label mb-1">Phone Number</label>
                                            <input type="text" class="form-control input-custom"
                                                   value="{{old('phone')}}"
                                                   name="phone"
                                                   id="input-text" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mt-1">
                                    <div class="form-items">
                                        <div class="input-block mb-2">
                                            <label class="reg-label mb-1">Email</label>
                                            <input type="email" class="form-control input-custom"
                                                   value="{{old('email')}}" name="email"
                                                   id="input-text" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mt-1">
                                    <div class="form-items">
                                        <div class="input-block mb-2">
                                            <label class="reg-label mb-1">Password</label>
                                            <input type="text" class="form-control input-custom"
                                                   value="{{old('password')}}" name="password"
                                                   id="input-text" required>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-md-3 mt-3">
                            <div class="form-items">
                                <div class="input-block mb-2">
                                    <label class="reg-label mb-1">First Name(BN)</label>
                                    <input type="text" class="form-control input-custom"
                                           value="{{old('bn_first_name')}}" name="bn_first_name"
                                           id="input-text" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 mt-3">
                            <div class="form-items">
                                <div class="input-block mb-2">
                                    <label class="reg-label mb-1">Last Name(BN)</label>
                                    <input type="text" class="form-control input-custom"
                                           value="{{old('bn_first_name')}}" name="bn_first_name"
                                           id="input-text" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 mt-3">
                            <div class="form-items">
                                <div class="input-block mb-2">
                                    <label class="reg-label mb-1">First Name(EN)</label>
                                    <input type="text" class="form-control input-custom"
                                           value="{{old('en_first_name')}}" name="en_first_name"
                                           id="input-text" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 mt-3">
                            <div class="form-items">
                                <div class="input-block mb-2">
                                    <label class="reg-label mb-1">Last Name(EN)</label>
                                    <input type="text" class="form-control input-custom" value="{{old('en_last_name')}}"
                                           name="en_last_name"
                                           id="input-text" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 mt-3">
                            <div class="form-items">
                                <div class="input-block mb-2">
                                    <label class="reg-label mb-1">Designation (BN)</label>
                                    <input type="text" class="form-control input-custom"
                                           value="{{old('en_designation')}}" name="bn_designation"
                                           id="input-text" required>
                                </div>
                            </div>
                        </div>


                        <div class="col-12 col-md-4 mt-3">
                            <div class="form-items">
                                <div class="input-block mb-2">
                                    <label class="reg-label mb-1">Designation (EN)</label>
                                    <input type="text" class="form-control input-custom"
                                           value="{{old('en_designation')}}" name="en_designation"
                                           id="input-text" required>
                                </div>
                            </div>
                        </div>


                        <div class="col-12 col-md-4 mt-3">
                            <div class="form-items">
                                <div class="input-block mb-2">
                                    <label class="reg-label mb-1">Nid./ Passport No.</label>
                                    <input type="text" class="form-control input-custom" value="{{old('nid')}}"
                                           name="nid"
                                           id="input-text">
                                </div>
                            </div>
                        </div>


                        <div class="col-12 col-md-4 mt-3">
                            <div class="form-items">
                                <div class="input-block mb-2">
                                    <div class="category-post">
                                        <div class="mb-2 custom-single-select">
                                            <label class="reg-label mb-1">Gender</label>
                                            <select class="single-select-wsearch" name="gender">
                                                @foreach(getGenderList() as $gender)
                                                    <option value="{{$gender}}">{{$gender}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="form-items">
                                <div class="input-block mb-2">
                                    <div class="category-post">
                                        <div class="mb-2 custom-single-select">
                                            <label class="reg-label mb-1">Blood Group</label>
                                            <select class="single-select-wsearch" name="blood_group">
                                                @foreach(getBloodGroupList() as $blood)
                                                    <option value="{{$blood}}">{{$blood}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-12 mt-1">
                            <div class="form-items">
                                <div class="input-block mb-2">
                                    <label class="form-label custom-form-label-modal d-flex align-items-center mb-1"><span
                                                class="me-2"><i
                                                    class="fadeIn animated bx bx-info-circle"></i></span>Present
                                        Address</label>
                                    <textarea name="present_address"
                                              value="{{old('permanent_address')}}" rows="2" cols="80"
                                              class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-0">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-4">
                                    <div class="input-block mb-2">
                                        <div class="category-post">
                                            <div class="mb-2 custom-single-select">
                                                <label class="reg-label mb-1">Division</label>
                                                <select name="present_address_division" class="single-select-wsearch"
                                                        onchange="districtList(this)"
                                                        required>
                                                    <option value="">--SELECT--</option>
                                                    @foreach($division as $divisionData)
                                                        <option value="{{$divisionData->id}}">{{$divisionData->name}}</option>
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
                                                <select name="present_address_district" class="single-select-wsearch"
                                                        id="district"
                                                        onchange="thanaList(this)" required>

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
                                                <select name="present_address_thana" class="single-select-wsearch"
                                                        id="thana" required>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="col-12">
                            <div class="input-block mb-2 d-flex justify-content-end ">
                                <label for="submit" class="add-section-btn">
                                    <div class="parent-icon"><i class="lni lni-save"></i>
                                    </div>
                                    <div class="menu-title">Registration</div>
                                </label>
                                <button id="submit" style="display:none"></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


    <!--end row-->

    <!--end row-->


@endsection

@section('js_plugins')
    <script src="{{ asset('assets/backend')}}/plugins/select2/js/select2.min.js"></script>
    <script src="{{ asset('assets/backend')}}/js/form-select2.js"></script>
@endsection

@section('js')
    <script>
        function districtList(data) {
            var division_id = $(data).val();

            $.ajax({
                url: "{{route('admin.district.get')}}",
                type: "get",
                data: {
                    id: division_id,
                },
                success: function (response) {
                    $('#district').html(response)
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
                    $('#thana').html(response)
                },
                error: function (xhr) {
                    //Do Something to handle error
                }
            });

        }
    </script>
@endsection



















