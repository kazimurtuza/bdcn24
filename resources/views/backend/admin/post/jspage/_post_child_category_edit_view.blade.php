<form class="row g-3" method="post" action="{{route('admin.post.child.category.edit.store')}}"
      enctype="multipart/form-data">
    @csrf
    <div class="col-12">
        <div class="form-items">
            <div class="input-block mb-2">
                <div class="category-post">
                    <input type="hidden" value="{{$childCategory->id}}" name="child_category_id">
                    <div class="mb-2 custom-single-select">
                        <label class="reg-label mb-1">Language</label>
                        <select class="single-select-wsearch" id="lang3"
                                onchange="fiLterCategory(this,'#changeid')"
                                name="language">
                            <option value="">--Select--</option>
                            <option value="bn" {{$childCategory->language=='bn'?'selected':''}}>Bangla</option>
                            <option value="en" {{$childCategory->language=='en'?'selected':''}}>English</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="input-block mb-2">
                <div class="category-post">
                    <div class="mb-2 custom-single-select">
                        <label class="reg-label mb-1">Category</label>
                        <select class="single-select-wsearch" id="changeid2"
                                onchange="setSubcategory(this)" name="category_id"
                                required>
                            <option value="">--Select--</option>

                            @foreach($categoryList as $category)
                                <option value="{{$category->id}}" {{$childCategory->post_category_id==$category->id ?'selected':''}}>{{$category->name}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
            </div>


            <div class="input-block mb-2">
                <div class="category-post">
                    <div class="mb-2 custom-single-select">
                        <label class="reg-label mb-1">Subcategory</label>
                        <select class="single-select-wsearch" id="sub_category_id2" name="sub_category_id"
                                required>
                            <option value="">--Select--</option>
                            @foreach($subCategoryList as $subCategory)
                                <option value="{{$subCategory->id}}" {{$childCategory->post_sub_category_id==$subCategory->id ?'selected':''}}>{{$subCategory->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="input-block mb-2">
                <label class="reg-label mb-1">Child Category Name</label>
                <input type="text" class="form-control input-custom" name="name"
                       oninput="makeSlug(this, '#subCateSlugedit')" id="input-text"
                       required="" spellcheck="false" value="{{$childCategory->name}}" placeholder="">
            </div>
            <div class="input-block mb-2">
                <label class="reg-label mb-1">Slug Name</label>
                <input type="text" class="form-control input-custom"
                       id="subCateSlugedit" name="slug" required="" value="{{$childCategory->slug}}" spellcheck="false"
                       placeholder="">
            </div>


        </div>


        <div class="col-12">
            <div class="input-block mb-2 d-flex justify-content-center ">
                <label for="subcategorySubmitedit" class="add-section-btn">
                    <div class="parent-icon"><i class="lni lni-save"></i>
                    </div>
                    <div class="menu-title">Save</div>
                    <button type="submit" id="subcategorySubmitedit"
                            style="display: none"></button>
                </label>
            </div>
        </div>
    </div>
</form>