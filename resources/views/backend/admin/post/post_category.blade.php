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
                                @foreach($categoryList as $key=>$list)
                                <div class="post-body category-post flex-wrap justify-content-between d-flex align-items-center">
                                    <div class="serial-catagory">
                                        {{$key+1}}
                                    </div>
                                    <div class="category-name">
                                        <h4>{{$list->name}}</h4>
                                    </div>
                                    <div class="slug-category">
                                        <span>{{$list->slug}}</span>
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
                                                        <div class="ms-1 ms-md-2" onclick="editCategory({{$list->id}})"><span>Edit</span></div>
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
                                        <h6>Create Category </h6>
                                        <p>Add category that represent the writing to make it more interesting</p>
                                    </div>
                                    <div class="divider-space-text"></div>
                                    <form class="row g-3" method="post" action="{{route('admin.post.category.add')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-12">
                                            <div class="form-items">
                                                <div class="input-block mb-2">
                                                    <div class="category-post">
                                                        <div class="mb-2 custom-single-select">
                                                            <label class="reg-label mb-1">Language</label>
                                                            <select id="lang2" class="single-select-wsearch" name="language">
                                                                <option value="bn">Bangla</option>
                                                                <option value="en">English</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="input-block mb-2">
                                                    <label class="reg-label mb-1">Category Name</label>
                                                    <input type="text" class="form-control input-custom" oninput="makeSlug(this,'#slugSt2')" name="name" id="input-text" required="" spellcheck="false" placeholder="">
                                                </div>
                                                <div class="input-block mb-2">
                                                    <label class="reg-label mb-1">Slug Name</label>
                                                    <input type="text" class="form-control input-custom" id="slugSt2"  name="slug" id="input-text" required="" spellcheck="false" placeholder="">
                                                </div>
                                                <div class="input-block mb-2">
                                                    <label class="reg-label mb-1">Color</label>
                                                    <input type="color" class="form-control input-custom" name="color" id="input-text" required="" spellcheck="false" placeholder="">
                                                </div>

                                                <div class="input-block mb-2">
                                                    <label class="reg-label mb-1">Category Image</label>
                                                    <label for="icon-upload-image" class="icon-images-f-2 pc0">
                                                        <input type="file" class="img_input"  p-class="pc0" id="icon-upload-image" style="display: none">
                                                        <input type="text" class="crop_logo" name="image"  style="display: none">
                                                        <span class="bg-icon-upload img_show">
                                                         <i class="fadeIn animated bx bx-images"></i>
                                                         </span>
                                                    </label>
                                                </div>

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
        <div class="modal fade custom-modal-3" id="edit_category" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg custom-modal-dialog-2 modal-dialog-centered">
                <div class="modal-content custom-modal-content-2">
                    <div class="card rounded-4 w-100 custom-card">
                        <div class="card-body" id="category_edit_modal">
                            <form class="row g-3" method="post" action="{{route('admin.reporter.achievement.store')}}">
                                @csrf
                                <label class="form-label custom-form-label-modal d-flex align-items-center"><span
                                            class="me-2"><i class="fadeIn animated bx bx-info-circle"></i></span>Edit Category</label>
                                <div class="col-12">
                                    <input type="hidden" name="user_id" value="">
                                    <div class="form-items  job-experience" id="achievementList">
                                            <div class="achievementItem bottom-separate">
                                                <div class="input-block mb-2">
                                                    <label class="reg-label mb-1">Language</label>
                                                    <select class="single-select-wsearch" name="language">
                                                        <option value="bn">Bangla</option>
                                                        <option value="en">English</option>
                                                    </select>
                                                </div>
                                                <div class="input-block mb-2">
                                                    <label class="reg-label mb-1">Category Name</label>
                                                    <input type="text" class="form-control input-custom" name="name"
                                                           required>
                                                </div>
                                                <div class="input-block mb-2">
                                                    <label class="reg-label mb-1">Slug Name</label>
                                                    <input type="text" class="form-control input-custom" name="slug"
                                                           required>
                                                </div>
                                                <div class="input-block mb-2">
                                                    <label class="reg-label mb-1">Color Name</label>
                                                    <input type="color" class="form-control input-custom" name="color"
                                                           required>
                                                </div>

                                                <div class="input-block mb-2">
                                                    <label class="reg-label mb-1">Category Image</label>
                                                    <label for="icon-upload-image" class="icon-images-f-2 pc0">
                                                        <input type="file" class="img_input"  p-class="pc0" id="icon-upload-image" style="display: none">
                                                        <input type="text" class="crop_logo" name="image"  style="display: none">
                                                        <span class="bg-icon-upload img_show">
                                                         <i class="fadeIn animated bx bx-images"></i>
                                                         </span>
                                                    </label>
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
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/plugins/cropperjs/cropper.css')}}?v=1.7"/>

    <link href="{{ asset('assets/backend')}}/plugins/select2/css/select2.min.css" rel="stylesheet"/>
    <link href="{{ asset('assets/backend')}}/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet"/>


@endsection
@section('js_plugins')
    <script src="{{asset('assets/backend/plugins/cropperjs/cropper.js')}}"></script>

    {{--select--}}
    <script src="{{ asset('assets/backend')}}/plugins/select2/js/select2.min.js"></script>
    <script src="{{ asset('assets/backend')}}/js/form-select2.js"></script>
    {{--select--}}
@endsection
@section('js')

    <script>
        /*crop logo image*/
        var $modal = $('#logoImgModal');
        var image = document.getElementById('modalShowImage');
        var cropper;
        $("body").on("change", "#icon-upload-image", function (e) {
            var files = e.target.files;
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
                aspectRatio: 16 / 9,
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
                url = URL.createObjectURL(blob);
                var reader = new FileReader();
                reader.readAsDataURL(blob);
                reader.onloadend = function () {
                    var base64data = reader.result;
                    $(".img_show").html(`<img width="100%" height="100%" src="${base64data}">`);
                    $(".crop_logo").val(base64data);
                    $modal.modal('hide');
                    // $('#imgSave').submit();
                    saveImage(base64data)
                }
            });
        });

        function editCategory(id){

            $.ajax({
                url: "{{route('admin.get.category.edit.data')}}",
                type: "get",
                data: {
                    id:id,
                },
                success: function(response) {
                    $('#category_edit_modal').html(response)
                    $('#edit_category').modal('show');

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

        function makeSlug(input, placement) {
            let text = $(input).val();
            let slug = text.toLowerCase()
                .trim()
                .replace(/[^\w\s-]/g, '')
                .replace(/[\s_-]+/g, '-')
                .replace(/^-+|-+$/g, '');
            $(placement).val(slug);
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
              url: "{{route('admin.get.category.list.by-language')}}",
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