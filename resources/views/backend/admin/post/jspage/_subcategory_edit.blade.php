<form class="row g-3" method="post" action="{{route('admin.post.subcategory.edit')}}">
    @csrf
    <label class="form-label custom-form-label-modal d-flex align-items-center"><span
                class="me-2"><i class="fadeIn animated bx bx-info-circle"></i></span>Subcategory Edit</label>
    <div class="col-12">
        <input type="hidden" name="subcategory_id" value="{{$subcategory_id}}">
        <div class="form-items  job-experience" id="achievementList">
            <div class="achievementItem bottom-separate">
                <div class="input-block mb-2">
                    <div class="category-post">
                        <div class="mb-2 custom-single-select">
                            <label class="reg-label mb-1">Language</label>
                            <select class="single-select-wsearch" name="language">
                                <option value="bn" {{$subcategorylist->language=='bn'?'selected':''}}>Bangla</option>
                                <option value="en" {{$subcategorylist->language=='en'?'selected':''}}>English</option>
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
                                    <option value="{{$catelist->id}}" {{$subcategorylist->post_category_id==$catelist->id?'selected':''}}>{{$catelist->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="input-block mb-2">
                    <label class="reg-label mb-1">Subcategory Name</label>
                    <input type="text" value="{{$subcategorylist->name}}" oninput="makeSlug(this, '#subCateSlug2')" class="form-control input-custom" name="name"
                           required>
                </div>
                <div class="input-block mb-2">
                    <label class="reg-label mb-1">Slug Name</label>
                    <input type="text" class="form-control input-custom" id="subCateSlug2" value="{{$subcategorylist->slug}}" name="slug"
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