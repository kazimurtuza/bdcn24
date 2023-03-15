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
@foreach($childCategoryList as $key=>$listdata)
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