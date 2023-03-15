@extends('backend.admin.layouts.master')
@section('main_content')


    <div class="row align-items-start">
        <!-- Right Side Wrap -->
        <div class="col-12 d-flex">
            <div class="card rounded-4 w-100 custom-card">
                <div class="card-body">
                    <div class="row justify-content-center align-items-center pb-1 pb-md-5">
                        <div class="col-12 col-md-6 p-2 ">
                            <div class="local-image-u">
                                <div class="f-image-upload f-image-three">
                                    <div class="f-image-title text-center card-title-h6">
                                        <h6>Upload Image </h6>
                                        <p>Add images that represent the writing to make it more interesting</p>
                                    </div>
                                    <div class="divider-space-text"></div>


                                    <form method="post" action="{{route('admin.upload.image.save')}}" id="imgSave">
                                        @csrf
                                        <input type="file" id="icon-upload-image" accept="image/*">
                                        <input type="hidden" name="crop_logo" id="crop_logo">
                                        <label for="icon-upload-image" class="icon-images-f">
                                              <span class="bg-icon-upload" id="show_logo_wrapper">
                                                  <img src="{{ asset('assets/backend/images/crop-bg.png') }}" alt=""
                                                       id="show_logo">
                                              </span>
                                        </label>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 ">
                        <div class="col-12">
                            <div class="row mobile-row justify-content-between pb-0">
                                <div class="col-12">
                                    <div class="total-counter-item">
                                        <p>Total-<span>{{$imgList->count()}}</span> Images</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-12 pb-3 pe-3 pt-0 pt-md-2 imgUploadList">
                            <div class="row g-2 gallery-image-wrap " id="imgList">

                                @foreach($imgList as $imgInfo)
                                    <div class="col-lg-3 col-md-4 col-6 custom-col-3 five {{$imgInfo->id}}"
                                         onclick="editImgData({{$imgInfo->id}},this)">
                                        <div class="featured-modal-grid">
                                                <span>
                                                    <div class="actived-f">
                                                        <img class="f-modal-img" src="{{ asset($imgInfo->image_full_path) }}"
                                                             alt="{{$imgInfo->alt_text}}">
                                                        <div class="active-image select_img" style="display: none">
                                                            <span class="selected-images"><i
                                                                        class="fadeIn animated bx bx-check-circle"></i></span>
                                                        </div>
                                                    </div>
                                                </span>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="col-md-4 col-12 left-sidebar-wrap border-radius-10">
                            <div class="left-sidebar-modal">
                                <div class="search-wrap">
                                    <form class="searchbar" id="imageFormSubmit" method="post" action="">
                                        @csrf
                                        <div class="search-icon position-relative">
                                            <span class="icon-search"><i class="bi bi-search"></i></span>
                                            <input class="form-control" type="text" oninput="srcImage(this)" placeholder="Type here to search">
                                        </div>
                                        <button type="submit" style="display: none;"></button>
                                    </form>
                                </div>
                                <form action="{{route('media.img.data.edit')}}" method="post">
                                    @csrf
                                    <div class="image-seo-property">
                                        <div class="img-property d-flex justify-content-between align-items-center">
                                            <div class="item-seo-property-1">
                                                <input type="hidden" id="edit_img_id" name="img_id">
                                                <div class="f-image-title right sidebar-1 ">
                                                    <div class="d-flex justify-content-start align-content-center">
                                                        <h6 class="align-self-center">Attachment Image Link</h6>
                                                    </div>
                                                </div>
                                                <div class="input-block">
                                                    <input type="text" class="form-control" name="attributed_image_path"
                                                           id="attributed_image_path" spellcheck="false"
                                                           placeholder="Image Url" readonly>
                                                </div>
                                            </div>
                                            <div class="item-seo-property-2">
                                                <a href="#" id="viewImgBtn" target="_blank"><span><i class="lni lni-eye"></i></span></a>
                                                <span onclick="copyImgPath()"><i class="fadeIn animated bx bx-copy"></i></span>
                                            </div>
                                        </div>
                                        <div class="img-property">
                                            <div class="f-image-title right sidebar-1">
                                                <div class="d-flex justify-content-start align-content-center">
                                                    <h6 class="align-self-center">Images Title</h6>
                                                </div>
                                            </div>
                                            <div class="input-block">
                                                <input type="text" class="form-control" name="name" id="img_name"
                                                       required="" spellcheck="false" placeholder="Image Title Here...">
                                            </div>
                                        </div>
                                        <div class="img-property">
                                            <div class="f-image-title right sidebar-1">
                                                <div class="d-flex justify-content-start align-content-center">
                                                    <h6 class="align-self-center">Alt Text</h6>
                                                </div>
                                            </div>
                                            <div class="input-block">
                                                <input type="text" class="form-control" name="alt_text" id="alt_text"
                                                       required="" spellcheck="false" placeholder="Alt Text..">
                                            </div>
                                        </div>
                                        <div class="selected-btn-wrap d-flex flex-wrap justify-content-center">
                                            <label for="imgedit" class="selected-btn"> Save</label>
                                            <button type="submit" style="display: none" id="imgedit"></button>
                                            <a href="javascript:void(0);" class="selected-btn bg-black"> Select</a>
                                            <span onclick="deleteSelectedMediaImg()" class="selected-btn-delete"><span><i
                                                            class="fadeIn animated bx bx-trash"></i></span></span>
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
@endsection
@section('modal')
    @include('backend.admin.partials._common_image_crop_modal')
@endsection
@section('css_plugins')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/plugins/cropperjs/cropper.css')}}?v=1.7"/>
@endsection

@section('js_plugins')
    <script src="{{asset('assets/backend/plugins/cropperjs/cropper.js')}}"></script>

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
                    $("#show_logo_wrapper").html(`<img src="${base64data}">`);
                    $("#crop_logo").val(base64data);
                    $modal.modal('hide');

                    // $('#imgSave').submit();
                    saveImage(base64data)

                }
            });
        });

        function editImgData(img_id, thisData) {
            $('.select_img').hide();
            $(thisData).find('.select_img').show();

            $.ajax({
                url: "{{route('admin.upload.image.info.get')}}",
                type: "get",
                data: {
                    img_id: img_id,
                },
                success: function (response) {
                    $('#attributed_image_path').val(response.attributed_image_path);
                    $('#img_name').val(response.name);
                    $('#alt_text').val(response.alt_text);
                    $('#edit_img_id').val(response.id);
                    $('#attributed_image_path').val(response.fullPathImg);
                    $('#viewImgBtn').attr('href', response.fullPathImg);
                    $('#show_logo').attr('src', response.fullPathImg);

                },
                error: function (xhr) {
                    //Do Something to handle error
                }
            });
        }

        function copyImgPath() {
            $('#attributed_image_path').select();
            document.execCommand('copy');
            toastr.success($('#attributed_image_path').val(),'Copied!')
        }

        function saveImage(img) {
            let token = "{{ csrf_token()}}";


            $.ajax({
                url: "{{route('admin.upload.image.save')}}",
                type: "post",
                data: {
                    _token: token,
                    crop_logo: img,
                },
                success: function (response) {
                    if (response.msg == 200) {
                        $('#imgList').prepend(`

                                   <div class="col-lg-3 col-md-4 col-6 custom-col-3 five ${response.id}" onclick="editImgData(${response.id},this)">
                                            <div class="featured-modal-grid">
                                                <span >
                                                    <div class="actived-f">
                                                        <img class="f-modal-img" src="${response.imgUrl}" alt="">
                                                        <div class="active-image select_img" style="display: none">
                                                            <span class="selected-images"><i class="fadeIn animated bx bx-check-circle"></i></span>
                                                        </div>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                `)
                    }
                },
                error: function (xhr) {
                    //Do Something to handle error
                }
            });


        }

         function  deleteSelectedMediaImg(){
            let img_id=$('#edit_img_id').val();
            if(img_id){
                $.ajax({
                    url: "{{route('media.img.delete')}}",
                    type: "get",
                    data: {
                        id:img_id,
                    },
                    success: function(response) {

                        $('.'+response.id).remove();
                    },
                    error: function(xhr) {
                        //Do Something to handle error
                    }});
            }else{
                alert('No Image Selected ')
            }


         }

         function  srcImage(data){
            $srcImg=$(data).val();

             $.ajax({
                 url: "{{route('media.img.src')}}",
                 type: "get",
                 data: {
                     img_name:$srcImg,
                 },
                 success: function(response) {
                     $('#imgList').html('');
                     $('#imgList').html(response);


                 },
                 error: function(xhr) {
                     //Do Something to handle error
                 }});


         }

        /*crop logo image end*/
    </script>
@endsection
