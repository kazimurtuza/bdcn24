@extends('backend.admin.layouts.master')
@section('main_content')
            <div class="row mobile-row">
                <div class="col-12 col-lg-8 col-xl-8 d-flex flex-wrap">
                    <div class="col-12 d-flex">
                        <div class="card rounded-4 w-100 mobile-card">
                            <div class="card-body mobile-card-body">
                                <div class="post-wrap">
                                    <div class="post-header flex-wrap justify-content-between d-flex align-items-center">
                                        <div class="post-status margin-right">
                                            <div class="post-header-title text-center">
                                                <p>Serial No.</p>
                                            </div>
                                        </div>
                                        <div class="post-details margin-right">
                                            <div class="post-header-title">
                                                <p>Reporter Type</p>
                                            </div>
                                        </div>
                                        <div class="post-reporter margin-right">
                                            <div class="post-header-title">
                                                <p>Details</p>
                                            </div>
                                        </div>

                                        <div class="post-action margin-right">
                                            <div class="post-header-title">
                                                <span class="text-end"><i class="lni lni-cog"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    @foreach($reporterTypeList as $key=>$typeList)
                                    <div class="post-body category-post flex-wrap justify-content-between d-flex align-items-center">
                                        <div class="serial-catagory text-center">
                                            {{$key+1}}
                                        </div>
                                        <div class="category-name">
                                            <h4>{{$typeList->name}}</h4>
                                        </div>
                                        <div class="slug-category">
                                            <span>{{$typeList->description}}</span>
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
                                                    <a class="dropdown-item" href="javascript:void(0);" onclick="editType(this)" data-id="{{$typeList->id}}" data-href="{{route('admin.reporter.type.edit')}}">
                                                        <div class="d-flex align-items-center dropdown-text-box">
                                                            <div class="icon-option"><i class="fadeIn animated bx bx-edit"></i></div>
                                                            <div class="ms-1 ms-md-2"><span>Edit</span></div>
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
                                            <h6 id="reporter_type_txt">Store Reporter Type </h6>
                                            <p>Add Reporter Type that represent Reporter Role</p>
                                        </div>
                                        <div class="divider-space-text"></div>
                                        <form class="row g-3" id="typePost" method="post" action="{{route('admin.reporter.type.store')}}">
                                             @csrf
                                            <div class="col-12">
                                                <div class="form-items">
                                                    <input type="hidden" name="id" id="typeid">
                                                    <div class="input-block mb-2">
                                                        <label class="reg-label mb-1">Reporter Type Name</label>
                                                        <input type="text" class="form-control input-custom name" name="name" id="input-text" required  spellcheck="false" placeholder="">
                                                        @error('name')
                                                        <div class=" text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="input-block mb-2">
                                                        <label  class="reg-label mb-1">Reporter Details</label>
                                                        <textarea name="description" id="" cols="30" rows="4" class="form-control input-custom description" name="input-text" id="input-text"></textarea>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="input-block mb-2 d-flex justify-content-center ">
                                                    <label type="submit" for="sbmittype" class="add-section-btn">
                                                        <div class="parent-icon"><i class="lni lni-save"></i>
                                                        </div>
                                                        <div class="menu-title">Save</div>
                                                    </label>

                                                    <button type="submit" id="sbmittype" style="display: none"></button>

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

    <!--end wrapper-->

<!--end row-->
@endsection

@section('js_plugins')
@endsection
@section('js')

    <script>
        function editType(data){

           let url= $(data).attr('data-href');
           let id= $(data).attr('data-id');

           $('#typeid').val(id);
           $('#typePost').attr('action',url)
           $('#reporter_type_txt').html('Edit Reporter Type')

            $.ajax({
                url: "{{route('admin.reporter.type.info')}}",
                type: "get",
                data: {
                    id:id,
                },
                success: function(response) {
                    $('.name').val(response.name);
                    $('.description').val(response.description);
                    // console.log(response);
                },
                error: function(xhr) {
                    //Do Something to handle error
                }});




        }

    </script>
@endsection
