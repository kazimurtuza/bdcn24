
@if($postList)
@foreach($postList as $post_data)

    <div class="post-body d-flex align-items-center flex-wrap  justify-content-between">
        <div class="post-details-box margin-right">
            <div class="d-flex align-items-center  gap-3">
                <div class="product-box border">
                    <a href="#">
                        @if($post_data->featured_image_id)
                            <img src="{{asset($post_data->uploadImage->image_full_path)}}" alt="product img">
                        @endif
                    </a>
                </div>
                <div class="flex-grow-1">
                    <div class="progress-wrapper">
                        <p class="mb-2"> <a href="#"><span class="cate-post text-red">@if($post_data->post_child_category_id) {{$post_data->childCategory->name}} @elseif($post_data->post_sub_category_id) {{$post_data->subCategory->name}} @elseif($post_data->post_category_id) {{$post_data->category->name}} @endif</span></a> <span
                                    class="dots1"></span> <span class="ms-3 date-post-p">{{date('M d,Y',strtotime($post_data->created_at)) }}</span> <span
                                    class="dots2"></span> <span class="ms-3 date-post-p">{{date(' g:i a',strtotime($post_data->created_at)) }}</span></p>
                        <div class="post-title-popular">
                            <a href="#">
                                <h4>
                                    @if(strlen($post_data->title) > 32)
                                        {{ mb_substr($post_data->title, 0, 32)}} ...
                                    @else
                                        {{$post_data->title}}
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
                        <h4>{{$post_data->reporterInfo->bn_first_name}} {{$post_data->reporterInfo->en_last_name}}</h4>
                        <p>Editor</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="area-box margin-right">
            <a href="javascript:void(0);">
                <p class="pb-2 d-flex align-items-center"><span><i class="bi bi-pin-map-fill"></i></span> @if($post_data->district_id) {{$post_data->district->name}} @endif</p>
            </a>
            <a href="javascript:void(0);">
                <p class=" d-flex align-items-center"><span><i class="lni lni-eye"></i></span> <span style="color:#222; margin-right:5px;">50,000</span>Visitor</p>
            </a>
        </div>
        <div class="status-box margin-right">
            <span class="bg-color-nine">
                {{$post_data->post_status_name}}
            </span>
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
                    <a class="dropdown-item" href="{{route('post.edit',['post_id'=>$post_data->id])}}">
                        <div class="d-flex align-items-center dropdown-text-box">
                            <div class=""><i class="fadeIn animated bx bx-edit"></i></div>
                            <div class="ms-1 ms-md-3"><span>Edit</span></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{route('post.change-to.pending',['post_id'=>$post_data->id])}}">
                        <div class="d-flex align-items-center dropdown-text-box">
                            <div class=""><i class="lni lni-question-circle"></i></div>
                            <div class="ms-1 ms-md-3"><span>Make as pending</span></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{route('post.change-to.unpublish',['post_id'=>$post_data->id])}}">
                        <div class="d-flex align-items-center dropdown-text-box">
                            <div class=""><i class="lni lni-ban"></i></div>
                            <div class="ms-1 ms-md-3"><span>Unpublished</span></div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>

@endforeach

    @else
    <div class="area-box margin-right" style="flex-basis: 100%;text-align: center">
      <span>NO Data Found</span>
    </div>
    @endif