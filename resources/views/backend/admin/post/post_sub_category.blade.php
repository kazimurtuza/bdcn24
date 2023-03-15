@extends('backend.admin.layouts.master')

@section('main_content')
    <div>
        <div class="row mobile-row my-3">
            <div class="col-6">
                <div class="language-switeher" onchange="categoryLanChange()">
                    <div class="switch-button">
                        <input class="switch-button-checkbox" value="bn"  type="checkbox" id="lang-switch-checkbox">
                        <label class="switch-button-label" for="lang-switch-checkbox"><span class="switch-button-label-span">Bangla</span></label>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mobile-row">
            <div class="col-12 col-lg-8 col-xl-8 d-flex flex-wrap">
                <div class="col-12 d-flex">
                    <div class="card rounded-4 w-100 mobile-card">
                        <div class="card-body mobile-card-body">
                            <div class="post-wrap" id="category_list">
                                <div class="post-header flex-wrap justify-content-between d-flex align-items-center">
                                    <div class="post-status margin-right">
                                        <div class="post-header-title text-center">
                                            <p>Serial No.</p>
                                        </div>
                                    </div>
                                    <div class="post-details margin-right">
                                        <div class="post-header-title">
                                            <p>Category Name</p>
                                        </div>
                                    </div>
                                    <div class="post-reporter margin-right">
                                        <div class="post-header-title">
                                            <p>Slug</p>
                                        </div>
                                    </div>

                                    <div class="post-action margin-right">
                                        <div class="post-header-title">
                                            <span class="text-end"><i class="lni lni-cog"></i></span>
                                        </div>
                                    </div>
                                </div>
                                @foreach($subCategoryList as $key=>$listdata)
                                    <div class="post-body category-post flex-wrap justify-content-between d-flex align-items-center">
                                        <div class="serial-catagory">
                                            {{$key+1}}
                                        </div>
                                        <div class="category-name">
                                            <h4>{{$listdata->name}}</h4>
                                        </div>
                                        <div class="slug-category">
                                            <span>{{$listdata->slug}}</span>
                                        </div>
                                        <div class="action-box custom margin-right">
                                            <a href="javascript:void(0);" class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><span class="text-end custom-toggle-icon"><i class="bi bi-three-dots"></i></span></a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item custom-dropdown-item" href="javascript:void(0);">
                                                        <div class="d-flex align-items-center dropdown-text-box">
                                                            <div class="icon-option"><i class="fadeIn animated bx bx-trash"></i></div>
                                                            <div class="ms-1 ms-md-2"><span>Delete</span></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <div class="d-flex align-items-center dropdown-text-box">
                                                            <div class="icon-option"><i class="fadeIn animated bx bx-edit"></i></div>
                                                            <div class="ms-1 ms-md-2" onclick="editSubCategory({{$listdata->id}})"><span>Edit</span></div>
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
            <div class="col-12 col-md-4 order-first order-md-last">
                <div class="row">
                    <div class="col-12">
                        <div class="card rounded-4 w-100">
                            <div class="card-body">
                                <div class="f-image-upload-2">
                                    <div class="f-image-title">
                                        <h6>Create Subcategory </h6>
                                        <p>Add category that represent the writing to make it more interesting</p>
                                    </div>
                                    <div class="divider-space-text"></div>
                                    <form class="row g-3" method="post" action="{{route('admin.post.subcategory.add')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-12">
                                            <div class="form-items">
                                                <div class="input-block mb-2">
                                                    <div class="category-post">
                                                        <div class="mb-2 custom-single-select">
                                                            <label class="reg-label mb-1">Language</label>
                                                            <select class="single-select-wsearch" id="lang2" onchange="fiLterCategory(this,'#changeid')" name="language">
                                                                <option value="bn">Bangla</option>
                                                                <option value="en">English</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="input-block mb-2">
                                                    <div class="category-post">
                                                        <div class="mb-2 custom-single-select">
                                                            <label class="reg-label mb-1">Category</label>
                                                            <select class="single-select-wsearch" id="changeid" name="category_id" required>
                                                                @foreach($categoryList as $catelist)
                                                                    <option value="{{$catelist->id}}">{{$catelist->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="input-block mb-2">
                                                    <label class="reg-label mb-1">SubCategory Name</label>
                                                    <input type="text" class="form-control input-custom" name="name" oninput="makeSlug(this, '#subCateSlug')" id="input-text" required="" spellcheck="false" placeholder="">
                                                </div>
                                                <div class="input-block mb-2">
                                                    <label class="reg-label mb-1">Slug Name</label>
                                                    <input type="text" class="form-control input-custom" id="subCateSlug" name="slug" required="" spellcheck="false" placeholder="">
                                                </div>


                                            </div>




                                        <div class="col-12">
                                            <div class="input-block mb-2 d-flex justify-content-center ">
                                                <label for="categorySubmit" class="add-section-btn">
                                                    <div class="parent-icon"><i class="lni lni-save"></i>
                                                    </div>
                                                    <div class="menu-title">Save</div>
                                                    <button type="submit" id="categorySubmit" style="display: none"></button>
                                                </label>
                                            </div>
                                        </div>
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--end row-->



        <!-- Edit Modal -->
        <div class="modal fade custom-modal-3" id="edit_subcategory" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg custom-modal-dialog-2 modal-dialog-centered">
                <div class="modal-content custom-modal-content-2">
                    <div class="card rounded-4 w-100 custom-card">
                        <div class="card-body " id="editsubcate">
                            <form class="row g-3" method="post" action="">

                                <label class="form-label custom-form-label-modal d-flex align-items-center"><span
                                            class="me-2"><i class="fadeIn animated bx bx-info-circle"></i></span>Subcategory Edit</label>
                                <div class="col-12">
                                    <input type="hidden" name="user_id" value="">
                                    <div class="form-items  job-experience" id="achievementList">
                                        <div class="achievementItem bottom-separate">
                                            <div class="input-block mb-2">
                                                <div class="category-post">
                                                    <div class="mb-2 custom-single-select">
                                                        <label class="reg-label mb-1">Language</label>
                                                        <select class="single-select-wsearch"  name="language">
                                                            <option value="bn">Bangla</option>
                                                            <option value="en">English</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-block mb-2">
                                                <div class="category-post">
                                                    <div class="mb-2 custom-single-select">
                                                        <label class="reg-label mb-1">Category</label>
                                                        <select class="single-select-wsearch" name="category_id" required>
                                                            @foreach($categoryList as $catelist)
                                                                <option value="{{$catelist->id}}">{{$catelist->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-block mb-2">
                                                <label class="reg-label mb-1">Subcategory Name</label>
                                                <input type="text" oninput="makeSlug(this, '#subCateSlug2')" class="form-control input-custom" name="name"
                                                       required>
                                            </div>
                                            <div class="input-block mb-2">
                                                <label class="reg-label mb-1">Slug Name</label>
                                                <input type="text" class="form-control input-custom"  name="slug"
                                                       required>
                                            </div>

                                        </div>

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
        <!-- Edit Modal End-->


    </div>

@endsection
@section('modal')
    @include('backend.admin.partials._common_image_crop_modal')
@endsection
@section('css_plugins')

    <link href="{{ asset('assets/backend')}}/plugins/select2/css/select2.min.css" rel="stylesheet"/>
    <link href="{{ asset('assets/backend')}}/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet"/>


@endsection
@section('js_plugins')

    {{--select--}}
    <script src="{{ asset('assets/backend')}}/plugins/select2/js/select2.min.js"></script>
    <script src="{{ asset('assets/backend')}}/js/form-select2.js"></script>
    {{--select--}}
@endsection
@section('js')

    <script>

        function editSubCategory(id){

            $.ajax({
                url: "{{route('admin.post.subcategory.edit.view')}}",
                type: "get",
                data: {
                    id:id,
                },
                success: function(response) {
                    $('#edit_subcategory').modal('show');
                    $('#editsubcate').html(response)

                    // $('.single-select-wsearch').select2();

                    $('.single-select-wsearch').select2({
                        theme: 'bootstrap4',
                        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                        placeholder: $(this).data('placeholder'),
                        allowClear: Boolean($(this).data('allow-clear')),
                    });
                },
                error: function(xhr) {
                    //Do Something to handle error
                }});
        }

        function onchange(data){
            $()
        }

        function setSubcategory(data){

            let text=$(data).val().toLowerCase();
            let custtxt=text.replace(" ", "-");

            $('#subcate').val(custtxt);

            let text2='kazi murtuza sdflkhj sldfjl'


        }


        function makeSlug(input, placement) {
            let text = $(input).val();
            let slug = text.toLowerCase()
                .trim()
                .replace(/[^\w\s-]/g, '')
                .replace(/[\s_-]+/g, '-')
                .replace(/^-+|-+$/g, '');
            $(placement).val(slug);
        }

        function fiLterCategory(data,id){


           let language=$(data).val();

            $.ajax({
                url: "{{route('admin.get.post.category.item')}}",
                type: "get",
                data: {
                    language:language,
                },
                success: function(response) {
                    $(id).html(response);
                    $('.single-select-wsearch').select2({
                        theme: 'bootstrap4',
                        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                        placeholder: $(this).data('placeholder'),
                        allowClear: Boolean($(this).data('allow-clear')),
                    });
                },
                error: function(xhr) {
                    //Do Something to handle error
                }});
        }

        function categoryLanChange(){
            let tgval= $('#lang-switch-checkbox').val();

            if(tgval=='bn'){
                tgval='en';
            }else{
                tgval='bn';
            }
            $('#lang-switch-checkbox').val(tgval);

            $("#lang2").val(tgval).change();

            $.ajax({
                url: "{{route('admin.get.sub-category.list.by-language')}}",
                type: "get",
                data: {
                    language:tgval,
                },
                success: function(response) {
                    $('#category_list').html(response);

                },
                error: function(xhr) {
                    //Do Something to handle error
                }});

        }
    </script>
@endsection