@if($categoryInfo)

    <form class="row g-3" method="post" action="{{route('admin.reporter.category.edit.store')}}">
        @csrf
        <label class="form-label custom-form-label-modal d-flex align-items-center"><span
                    class="me-2"><i class="fadeIn animated bx bx-info-circle"></i></span>Edit Category</label>
        <div class="col-12">
            <input type="hidden" name="category_id" value="{{$categoryInfo->id}}">
            <div class="form-items  job-experience" id="achievementList">
                <div class="achievementItem bottom-separate">
                    <div class="input-block mb-2">
                        <label class="reg-label mb-1">Language</label>
                        <select class="single-select-wsearch" name="language">
                            <option value="bn" {{$categoryInfo->language=="bn"?'selected':""}}>Bangla</option>
                            <option value="en" {{$categoryInfo->language=="en"?'selected':""}}>English</option>
                        </select>
                    </div>
                    <div class="input-block mb-2">
                        <label class="reg-label mb-1">Category Name</label>
                        <input type="text" class="form-control input-custom" oninput="makeSlug(this,'#slugSt')" value="{{$categoryInfo->name}}" name="name"
                               required>
                    </div>
                    <div class="input-block mb-2">
                        <label class="reg-label mb-1">Slug Name</label>
                        <input type="text" class="form-control input-custom" id="slugSt" value="{{$categoryInfo->slug}}" name="slug"
                               required>
                    </div>
                    <div class="input-block mb-2">
                        <label class="reg-label mb-1">color</label>
                        <input type="color" class="form-control input-custom" value="{{$categoryInfo->color}}" name="color"
                               required>
                    </div>
                    <div class="input-block mb-2">
                        <label class="reg-label mb-1">Category Image</label>
                        <label for="icon-upload-image" class="icon-images-f-2 pc0">
                            <input type="file" class="img_input"  p-class="pc0" id="icon-upload-image" style="display: none">
                            <input type="text" class="crop_logo" name="image"  style="display: none">
                            <span class="bg-icon-upload img_show">

                                @if($categoryInfo->image)
                                    <img width="100%" height="100%" src="{{asset($categoryInfo->image)}}">
                                    @else
                                    <i class="fadeIn animated bx bx-images"></i>
                                    @endif

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

@endif