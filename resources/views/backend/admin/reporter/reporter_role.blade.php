@extends('backend.admin.layouts.master')
@section('main_content')
    <div class="row mobile-row">

        <div class="col-12">
            <div class="input-block mb-2 d-flex justify-content-end ">
                <p data-bs-toggle="modal" data-bs-target="#sub-category-2"
                   class="d-flex align-items-center category-btn mb-0"><span class="me-2">Create </span><span
                            class="me-1"><i class="lni lni-arrow-right-circle"></i></span>
                </p>

            </div>

            <div class="col-12 col-lg-12 col-xl-12 d-flex flex-wrap">
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
                                    <div class="role-wd margin-right">
                                        <div class="post-header-title">
                                            <p>Role</p>
                                        </div>
                                    </div>
                                    <div class="slug-wd margin-right">
                                        <div class="post-header-title">
                                            <p>Slug</p>
                                        </div>
                                    </div>
                                    <div class="descript-wd margin-right">
                                        <div class="post-header-title">
                                            <p>Description</p>
                                        </div>
                                    </div>
                                    <div class="post-status margin-right">
                                        <div class="post-header-title">
                                            <p>Is Default</p>
                                        </div>
                                    </div>
                                    <div class="post-status margin-right">
                                        <div class="post-header-title">
                                            <p>Status</p>
                                        </div>
                                    </div>

                                    <div class="post-action margin-right">
                                        <div class="post-header-title">
                                            <span class="text-end"><i class="lni lni-cog"></i></span>
                                        </div>
                                    </div>
                                </div>
                                @foreach($reporterRole as $key=>$role)
                                    <div class="post-body category-post flex-wrap justify-content-between d-flex align-items-center">
                                        <div class="serial-catagory text-center">
                                            {{$key+1}}
                                        </div>
                                        <div class="role-wd">
                                            <span>{{$role->name}}</span>
                                        </div>
                                        <div class="slug-wd">
                                            <span>{{$role->slug}}</span>
                                        </div>
                                        <div class="descript-wd">
                                            <span>{{$role->description}}</span>
                                        </div>
                                        <div class="role-wd">
                                            <span>{{$role->is_default==1?'Yes':'No'}}</span>
                                        </div>
                                        <div class="post-status">
                                            <div class="form-check form-switch">
                                                <input onclick="statusChange({{$role->id}},{{$role->status}})"
                                                       class="form-check-input" type="checkbox" role="switch"
                                                       id="flexSwitchCheckChecked" {{$role->status==1?'checked':''}} >
                                            </div>
                                            {{--<span>{{$role->status}}</span>--}}
                                        </div>
                                        <div class="action-box custom margin-right">
                                            <a href="javascript:void(0);"
                                               class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                                               data-bs-toggle="dropdown"><span class="text-end custom-toggle-icon"><i
                                                            class="bi bi-three-dots"></i></span></a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item custom-dropdown-item"
                                                       href="javascript:void(0);">
                                                        <div class="d-flex align-items-center dropdown-text-box">
                                                            <div class="icon-option"><i
                                                                        class="fadeIn animated bx bx-trash"></i></div>
                                                            <div class="ms-1 ms-md-2"><span>Delete</span></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);"
                                                       onclick="editModal(this)" data-id="{{$role->id}}">
                                                        <div class="d-flex align-items-center dropdown-text-box">
                                                            <div class="icon-option"><i
                                                                        class="fadeIn animated bx bx-edit"></i></div>
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
        </div>
    </div>




@endsection

@section('modal')
    <div class="modal fade custom-modal-3" id="sub-category-2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg custom-modal-dialog-2 modal-dialog-centered">
            <div class="modal-content custom-modal-content-2">
                <div class="card rounded-4 w-100 custom-card">
                    <div class="card-body">
                        <div class="f-image-upload-2">

                            <div class="f-image-title">
                                <h6>Create Reporter Role </h6>
                                {{--<p>Add Reporter Role that represent the writing to make it more interesting</p>--}}
                            </div>
                            <div class="divider-space-text"></div>
                            <form class="row g-3" method="post" action="{{route("admin.reporter.role.store")}}">
                                @csrf
                                <div class="col-12">

                                    <div class="input-block mb-2">
                                        <label class="reg-label mb-1">Role Name</label>
                                        <input type="text" class="form-control input-custom" name="name"
                                               id="input-text" required="" spellcheck="false" placeholder="">
                                    </div>
                                    <div class="input-block mb-2">
                                        <label class="reg-label mb-1">Slug Name</label>
                                        <input type="text" class="form-control input-custom" name="slug"
                                               id="input-text" spellcheck="false" placeholder="">
                                    </div>
                                    <div class="input-block mb-2">
                                        <label class="reg-label mb-1">Description</label>
                                        <textarea class="form-control input-custom" name="description" id=""
                                                  cols="30"
                                                  rows="3"></textarea>
                                    </div>

                                    <div class="input-block mb-2">
                                        <input type="checkbox" id="demoCheckbox" name="is_default" value="1">
                                        <label for="demoCheckbox"> Is Default !</label>
                                    </div>


                                </div>

                                <div class="col-12">
                                    <div class="input-block mb-2 d-flex justify-content-center ">
                                        <label for="submit" class="add-section-btn">
                                            <div class="parent-icon"><i class="lni lni-save"></i>
                                            </div>
                                            <div class="menu-title">Save</div>
                                        </label>
                                        <button type="submit" id="submit" style="display: none"></button>
                                    </div>
                                </div>
                            </form>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--Edit Modal--}}
    <div class="modal fade custom-modal-3" id="role-edit" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg custom-modal-dialog-2 modal-dialog-centered">
            <div class="modal-content custom-modal-content-2">
                <div class="card rounded-4 w-100 custom-card">
                    <div class="card-body">
                        <div class="f-image-upload-2">

                            <div class="f-image-title">
                                <h6>Edit Reporter Role </h6>
                                {{--<p>Add Reporter Role that represent the writing to make it more interesting</p>--}}
                            </div>
                            <div class="divider-space-text"></div>
                            <form class="row g-3" method="post"
                                  action="{{route("admin.reporter.role.update")}}">
                                @csrf
                                <div class="col-12  editRole">

                                    <div class="input-block mb-2">
                                        <label class="reg-label mb-1">Role Name</label>
                                        <input type="text" class="form-control input-custom" name="name"
                                               id="input-text" required="" spellcheck="false" placeholder="">
                                    </div>
                                    <div class="input-block mb-2">
                                        <label class="reg-label mb-1">Slug Name</label>
                                        <input type="text" class="form-control input-custom" name="slug"
                                               id="input-text" spellcheck="false" placeholder="">
                                    </div>
                                    <div class="input-block mb-2">
                                        <label class="reg-label mb-1">Description</label>
                                        <textarea class="form-control input-custom" name="description" id=""
                                                  cols="30"
                                                  rows="3"></textarea>
                                    </div>

                                    <div class="input-block mb-2">
                                        <input type="checkbox" id="demoCheckbox" name="is_default" value="1">
                                        <label for="demoCheckbox"> Is Default !</label>
                                    </div>


                                </div>

                                <div class="col-12">
                                    <div class="input-block mb-2 d-flex justify-content-center ">
                                        <label for="update" class="add-section-btn">
                                            <div class="parent-icon"><i class="lni lni-save"></i>
                                            </div>
                                            <div class="menu-title">Save</div>
                                        </label>
                                        <button type="submit" id="update" style="display: none"></button>
                                    </div>
                                </div>
                            </form>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

    <script>
        function editModal(data) {

            let id = $(data).attr('data-id');


            $.ajax({
                url: "{{route('admin.reporter.role.info')}}",
                type: "get",
                data: {
                    id: id,
                },
                success: function (response) {
                    $('.editRole').html(response)
                    $('#role-edit').modal('show');

                },
                error: function (xhr) {
                    //Do Something to handle error
                }
            });


        }

        function statusChange(id, status) {
            if (status == 1) {
                status = 0;
            } else {
                status = 1;
            }
            $.ajax({
                url: "{{route('admin.reporter.role.status.change')}}",
                type: "get",
                data: {
                    id: id,
                    status: status,
                },
                success: function (response) {

                },
                error: function (xhr) {
                    //Do Something to handle error
                }
            });

        }

    </script>
@endsection
