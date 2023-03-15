@extends('backend.admin.layouts.master')

@section('main_content')

    <div>

        <div class="row d-md-none d-block">
            <div class="col-12">
                <p class="mb-2 ps-2 breadcrumb-pages"><span class="me-2"><i class="lni lni-pencil-alt"></i></span>Add
                    Article</p>
            </div>
        </div>
        <!-- Post List End -->

        <form action="{{route('admin.post.add')}}" method="post" id="postform">
            @csrf
            <div class="row align-items-start">
                <!-- Right Side Wrap -->
                <div class="col-12 col-lg-8 col-xl-8 d-flex">
                    <div class="card rounded-4 w-100 custom-card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center justify-content-md-end">
                                    <div class="related-post-auto-switeher " onclick="isrelatedPost()"
                                         style="margin-right: 15px;">
                                        <div class=" metual switch-button">
                                            <input class="switch-button-checkbox" type="checkbox"
                                                   id="lang-switch-checkbox">
                                            <label class="switch-button-label" for="lang-switch-checkbox"><span
                                                        class="switch-button-label-span">Auto</span></label>
                                        </div>
                                    </div>

                                    <div class="language-switeher" onclick="categoryLanChange()">
                                        <div class="switch-button">
                                            <input type="text" id="setlanguage" name="language" value="bn"
                                                   style="display: none">
                                            <input type="text" id="is_auto" name="related_post_type" value="0"
                                                   style="display: none">
                                            <input type="text" id="parentClass" style="display: none">
                                            <input class="switch-button-checkbox" type="checkbox"
                                                   id="lang-switch-checkbox1">
                                            <label class="switch-button-label" for="lang-switch-checkbox">
                                                <span class="switch-button-label-span">Bangla</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="new-post-wrap">
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label class="form-label custom-form-label">Title <span
                                                            class="required-star">*</span></label>

                                                <div class="input-block">
                                                    <input type="text" class="form-control"
                                                           id="input-text" name="title" spellcheck="false"
                                                           value="{{old('title')}}"
                                                           oninput="makeSlug(this,'#slug')">

                                                    @error('title')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                    <span class="placeholder">Enter Post Title...</span>
                                                    <p class="label-sub">
                                                        <span style="font-weight: 500;color:rgb(49, 49, 49)">Note: </span>Add
                                                        images that represent the writing to make it more interesting
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label custom-form-label">Subtitle</label>

                                                <div class="input-block">
                                                    <input type="text" class="form-control"
                                                           value="{{old('subtitle')}}"
                                                           id="input-text" name="subtitle" spellcheck="false">
                                                    <span class="placeholder">
                                                 Enter Post Subtitle...
                                                </span>
                                                    <p class="label-sub">
                                                        <span style="font-weight: 500;color:rgb(49, 49, 49)">Note: </span>Add
                                                        images that represent the writing to make it more interesting
                                                    </p>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="new-post-wrap">
                                        <div class="row g-3">
                                            <div class="col-12" id="firstdiscriptionDiv">
                                                <label class="form-label custom-form-label mt-3">First Description
                                                    <span class="required-star">*</span>
                                                </label>
                                                <div class="editor" name="first_description"
                                                     id="firstDescription">{!!old('first_description')!!}</div>
                                                <textarea name="first_description" style="display: none" id="first_ds"
                                                          cols="30" rows="10">{{old('first_description')}}</textarea>
                                                @error('first_description')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                                <p class="label-sub">
                                                    <span style="font-weight: 500;color:rgb(49, 49, 49)">Note: </span>
                                                    Add images that represent the writing to make it more interesting
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 mt-3">
                                    <div class="new-post-wrap" id="seconddiscriptionDiv">
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label class="form-label custom-form-label mt-3">Second Description
                                                    <span class="required-star">*</span>
                                                </label>
                                                <div class="editor"
                                                     id="secondDescription">{!! old('second_description') !!}</div>
                                                <textarea name="second_description" style="display: none" id="second_ds"
                                                          cols="30" rows="10"></textarea>
                                                <p class="label-sub">
                                                    <span style="font-weight: 500;color:rgb(49, 49, 49)">Note: </span>
                                                    Add images that represent the writing to make it more interesting
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12" style="display: none" id="anoter_ck_list">

                                </div>
                                <div class="col-12" id="new_section">


                                </div>

                                <div class="add-section d-flex justify-content-center">
                                    <a class="add-section-btn">
                                        <div class="parent-icon">
                                            <i class="lni lni-circle-plus"></i>
                                        </div>
                                        <div class="menu-title" onclick="addNewSection()">Add Section</div>
                                    </a>
                                </div>
                                <div class="divider-section"></div>
                                <div class="col-12">
                                    <label class="form-label mt-3 custom-form-label">Slug <span
                                                class="required-star">*</span></label>

                                    <div class="input-block">
                                        <input type="text" class="form-control" value="{{old('slug')}}" name="slug"
                                               id="slug"
                                               spellcheck="false">
                                        @error('slug')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <span class="placeholder">Slug ...</span>
                                        <p class="label-sub">
                                            <span style="font-weight: 500;color:rgb(49, 49, 49)">Note: </span>
                                            Add images that represent the writing to make it more interesting
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label mt-3 custom-form-label">Meta Description</label>

                                    <div class="input-block">
                                        {{--<input type="text" class="form-control" name="meta_description" value="{{old('meta_description')}}" id="input-text"--}}
                                        {{--spellcheck="false">--}}

                                        <textarea cols="30" rows="2" class="form-control" name="meta_description"
                                                  value="{{old('meta_description')}}" id="input-text"
                                                  spellcheck="false"></textarea>

                                        <p class="label-sub">
                                            <span style="font-weight: 500;color:rgb(49, 49, 49)">Note: </span>
                                            Add images that represent the writing to make it more interesting
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 custom-tags input-block">
                                    <label class="form-label mt-3 custom-form-label"> Meta tags</label>

                                    <input type="text" class="form-control" name="meta_tags" data-role="tagsinput"
                                           value="{{old('meta_tags')}}">
                                    <p class="label-sub">
                                        <span style="font-weight: 500;color:rgb(49, 49, 49)">Note: </span>
                                        Add images that represent the writing to make it more interesting
                                    </p>
                                </div>


                                <div class="col-12 custom-tags input-block">
                                    <label class="form-label mt-3 custom-form-label"> Post tags</label>

                                    <input type="text" class="form-control tagsInput" name="post_tags"
                                           value="{{old('post_tags')}}">
                                    <p class="label-sub">
                                        <span style="font-weight: 500;color:rgb(49, 49, 49)">Note: </span>
                                        Add images that represent the writing to make it more interesting
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Left Side Wrap -->
                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="row">


                        <!-- Featured Images Modal Start -->
                        <div class="col">
                            <!-- Modal -->
                            <div class="modal fade custom-modal nine" id="exampleLargeModal" tabindex="-1"
                                 aria-hidden="true">
                                <div class="modal-dialog modal-lg custom-modal-dialog modal-dialog-centered">
                                    <div class="modal-content custom-modal-content">
                                        <div class="modal-header ">
                                            <h5 class="modal-title d-block d-md-inline">Uploaded Media</h5>
                                            <input type="hidden" id="ImgType">
                                            <div class="custom-tab">
                                                <ul class="nav nav-tabs nav-primary" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link active show" data-bs-toggle="tab"
                                                           href="#local-images" role="tab" aria-selected="true">
                                                            <div class="d-flex align-items-center">
                                                                <div class="tab-icon"><i
                                                                            class='fadeIn animated bx bx-upload font-18 me-1'></i>
                                                                </div>
                                                                <div class="tab-title">Local</div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link  " data-bs-toggle="tab"
                                                           href="#uploaded-images"
                                                           role="tab" aria-selected="false" onclick="uploadImgList()">
                                                            <div class="d-flex align-items-center">
                                                                <div class="tab-icon">
                                                                    <i class='fadeIn animated bx bx-images font-18 me-1'></i>
                                                                </div>
                                                                <div class="tab-title">Uploaded</div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    {{--<li class="nav-item" role="presentation">--}}
                                                    {{--<a class="nav-link" data-bs-toggle="tab" href="#resources-file"--}}
                                                    {{--role="tab" aria-selected="false">--}}
                                                    {{--<div class="d-flex align-items-center">--}}
                                                    {{--<div class="tab-icon">--}}
                                                    {{--<i class='lni lni-files font-18 me-1'></i>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="tab-title">Resource</div>--}}
                                                    {{--</div>--}}
                                                    {{--</a>--}}
                                                    {{--</li>--}}

                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link" class="nav-link  " data-bs-toggle="tab"
                                                           href="#uploaded-images"
                                                           role="tab" aria-selected="false" style="cursor: pointer"
                                                           onclick="resourceImgList()">
                                                            <div class="d-flex align-items-center">
                                                                <div class="tab-icon">
                                                                    <i class='lni lni-files font-18 me-1'></i>
                                                                </div>
                                                                <div class="tab-title">Resource</div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                </ul>

                                            </div>
                                            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                        </div>
                                        <div class="modal-body pb-3">
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="local-images"
                                                     role="tabpanel">
                                                    <div class="row justify-content-center align-items-center mt-3 mt-md-0">
                                                        <div class="col-10 col-md-8 p-0 p-md-5">
                                                            <div class="local-image-u">
                                                                <div class="f-image-upload f-image-two nine featureImg">
                                                                    <div class="f-image-title text-center">
                                                                        <h6>Select Featured Image </h6>
                                                                        <p>Add images that represent the writing to make
                                                                            it
                                                                            more interesting</p>
                                                                    </div>
                                                                    <div class="divider-space-text"></div>

                                                                    <input type="file" class="img_input"
                                                                           p-class="featureImg"
                                                                           id="icon-upload-image33">
                                                                    <input type="text" class="img_input_set"
                                                                           style="display: none">
                                                                    <label for="icon-upload-image33"
                                                                           class="icon-images-f"
                                                                    >
                                                                    <span class="bg-icon-upload img_show">
                                                                      <i class="fadeIn animated bx bx-images"></i>
                                                                    </span>

                                                                    </label>


                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane fade" id="uploaded-images" role="tabpanel">
                                                    <div class="row g-3 ">
                                                        <div class="col-md-8 col-12 py-3 pe-3">
                                                            <input type="hidden" id="pageNo" value="0">
                                                            <input type="hidden" id="rscPageNo" value="0">
                                                            <div class="row g-2 gallery-image-wrap custom-nw justify-content-start"
                                                                 id="imgList">
                                                                {{--@foreach($imgList as $imgInfo)--}}
                                                                {{--<div class="col-lg-3 col-md-4 col-6 custom-col-3 five {{$imgInfo->id}}"--}}
                                                                {{--onclick="editImgData({{$imgInfo->id}},this)">--}}
                                                                {{--<div class="featured-modal-grid">--}}
                                                                {{--<span>--}}
                                                                {{--<div class="actived-f">--}}
                                                                {{--<img class="f-modal-img"--}}
                                                                {{--src="{{ asset($imgInfo->image_full_path) }}"--}}
                                                                {{--alt="{{$imgInfo->alt_text}}">--}}
                                                                {{--<div class="active-image select_img"--}}
                                                                {{--style="display: none">--}}
                                                                {{--<span class="selected-images">--}}
                                                                {{--<i class="fadeIn animated bx bx-check-circle"></i>--}}
                                                                {{--</span>--}}
                                                                {{--</div>--}}
                                                                {{--</div>--}}
                                                                {{--</span>--}}
                                                                {{--</div>--}}
                                                                {{--</div>--}}
                                                                {{--@endforeach--}}


                                                            </div>

                                                        </div>
                                                        <div class="col-md-4 col-12 left-sidebar-wrap border-radius-bottom">
                                                            <div class="left-sidebar-modal">
                                                                <div class="search-wrap">
                                                                    <div class="searchbar">
                                                                        <div class="search-icon position-relative">
                                                                        <span class="icon-search"><i
                                                                                    class="bi bi-search"></i></span>
                                                                            <input class="form-control"
                                                                                   style=" display: none "
                                                                                   id="uploadSrc" type="text"
                                                                                   oninput="srcImage(this,'upload')"
                                                                                   placeholder="Type here to search">

                                                                            <input class="form-control"
                                                                                   style=" display: none "
                                                                                   id="resourceSrc" type="text"
                                                                                   oninput="srcImage(this,'resource')"
                                                                                   placeholder="Type here to search">
                                                                        </div>

                                                                    </div>
                                                                    <div class="image-seo-property">
                                                                        <div class="img-property d-flex justify-content-between align-items-center">
                                                                            <div class="item-seo-property-1">
                                                                                <div class="f-image-title right sidebar-1 ">
                                                                                    <div class="d-flex justify-content-start align-content-center">
                                                                                        <h6 class="align-self-center">
                                                                                            Attachment
                                                                                            Image Link</h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="input-block">
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           id="attributed_image_path"
                                                                                           spellcheck="false"
                                                                                           placeholder="Image Url"
                                                                                           readonly>
                                                                                    <!-- <span class="placeholder">
                                                                                        image url...
                                                                                      </span> -->
                                                                                </div>
                                                                            </div>
                                                                            <div class="item-seo-property-2">
                                                                                <span><i class="lni lni-eye"></i></span>
                                                                                <span><i class="fadeIn animated bx bx-copy"></i></span>
                                                                            </div>

                                                                        </div>
                                                                        <div class="img-property">
                                                                            <div class="f-image-title right sidebar-1">
                                                                                <div class="d-flex justify-content-start align-content-center">
                                                                                    <h6 class="align-self-center">Images
                                                                                        Title</h6>
                                                                                </div>
                                                                            </div>
                                                                            {{--kaxi--}}
                                                                            <div class="input-block">
                                                                                <input type="text" class="form-control"
                                                                                       id="img_name"
                                                                                       spellcheck="false"
                                                                                       name="img_title_set"
                                                                                       placeholder="Image Title Here...">
                                                                                <!-- <span class="placeholder">
                                                                                    title here...
                                                                                  </span> -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="img-property">
                                                                            <div class="f-image-title right sidebar-1">
                                                                                <div class="d-flex justify-content-start align-content-center">
                                                                                    <h6 class="align-self-center">Alt
                                                                                        Text</h6>
                                                                                </div>
                                                                            </div>
                                                                            <div class="input-block">
                                                                                <input type="text" class="form-control"
                                                                                       id="alt_text"
                                                                                       spellcheck="false"
                                                                                       placeholder="Alt Text..">
                                                                                <!-- <span class="placeholder">
                                                                                    alt text here...
                                                                                  </span> -->
                                                                            </div>
                                                                        </div>


                                                                        <div class="selected-btn-wrap d-flex flex-wrap justify-content-center">
                                                                            <a href="javascript:void(0);"
                                                                               class="selected-btn"
                                                                               onclick="saveFeatureImageData()">
                                                                                Save</a>
                                                                            <a href="javascript:void(0);"
                                                                               class="selected-btn bg-black"
                                                                               onclick="setFeatureImage()"> Select</a>
                                                                            <a href="javascript:void(0);"
                                                                               class="selected-btn-delete"
                                                                               onclick="deleteFeatureImage()"><span><i
                                                                                            class="fadeIn animated bx bx-trash"></i></span></a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="resources-file" role="tabpanel">
                                                    <div class="row g-3 ">
                                                        <div class="col-md-8 col-12 py-3 pe-3">
                                                            <div class="row g-2 gallery-image-wrap custom-nw justify-content-start"
                                                                 id="imgList2">
                                                                {{--@foreach($resourceImgList as $resourceImgInfo)--}}
                                                                {{--<div class="col-lg-3 col-md-4 col-6 custom-col-3 five {{$resourceImgInfo->id}}"--}}
                                                                {{--onclick="editImgData({{$resourceImgInfo->id}},this)">--}}
                                                                {{--<div class="featured-modal-grid">--}}
                                                                {{--<span>--}}
                                                                {{--<div class="actived-f">--}}
                                                                {{--<img class="f-modal-img"--}}
                                                                {{--src="{{ asset($resourceImgInfo->image_full_path) }}"--}}
                                                                {{--alt="{{$resourceImgInfo->alt_text}}">--}}
                                                                {{--<div class="active-image select_img"--}}
                                                                {{--style="display: none">--}}
                                                                {{--<span class="selected-images">--}}
                                                                {{--<i class="fadeIn animated bx bx-check-circle"></i>--}}
                                                                {{--</span>--}}
                                                                {{--</div>--}}
                                                                {{--</div>--}}
                                                                {{--</span>--}}
                                                                {{--</div>--}}
                                                                {{--</div>--}}
                                                                {{--@endforeach--}}


                                                            </div>

                                                        </div>
                                                        <div class="col-md-4 col-12 left-sidebar-wrap">
                                                            <div class="left-sidebar-modal">
                                                                <div class="search-wrap">


                                                                    <div class="search-icon position-relative">
                                                                        <span class="icon-search"><i
                                                                                    class="bi bi-search"></i></span>
                                                                        <input class="form-control" type="text"
                                                                               oninput="srcImage(this,'resource')"
                                                                               placeholder="Type here to search">
                                                                    </div>
                                                                    <div class="image-seo-property">
                                                                        <div class="img-property d-flex justify-content-between align-items-center">
                                                                            <div class="item-seo-property-1">
                                                                                <div class="f-image-title right sidebar-1 ">
                                                                                    <div class="d-flex justify-content-start align-content-center">
                                                                                        <h6 class="align-self-center">
                                                                                            Attachment
                                                                                            Image Link</h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="input-block">
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           id="input-text"
                                                                                           spellcheck="false"
                                                                                           placeholder="Image Url">
                                                                                    <!-- <span class="placeholder">
                                                                                        image url...
                                                                                      </span> -->
                                                                                </div>
                                                                            </div>
                                                                            <div class="item-seo-property-2">
                                                                                <span><i class="lni lni-eye"></i></span>
                                                                                <span><i class="fadeIn animated bx bx-copy"></i></span>
                                                                            </div>

                                                                        </div>
                                                                        <div class="img-property">
                                                                            <div class="f-image-title right sidebar-1">
                                                                                <div class="d-flex justify-content-start align-content-center">
                                                                                    <h6 class="align-self-center">Images
                                                                                        Title</h6>
                                                                                </div>
                                                                            </div>
                                                                            <div class="input-block">
                                                                                <input type="text" class="form-control"
                                                                                       id="input-text"

                                                                                       spellcheck="false"
                                                                                       placeholder="Image Title Here...">
                                                                                <!-- <span class="placeholder">
                                                                                    title here...
                                                                                  </span> -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="img-property">
                                                                            <div class="f-image-title right sidebar-1">
                                                                                <div class="d-flex justify-content-start align-content-center">
                                                                                    <h6 class="align-self-center">Alt
                                                                                        Text</h6>
                                                                                </div>
                                                                            </div>
                                                                            <div class="input-block">
                                                                                <input type="text" class="form-control"
                                                                                       id="input-text"
                                                                                       spellcheck="false"
                                                                                       placeholder="Alt Text..">
                                                                                <!-- <span class="placeholder">
                                                                                    alt text here...
                                                                                  </span> -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="selected-btn-wrap d-flex flex-wrap justify-content-center">
                                                                            <a href="javascript:void(0);"
                                                                               class="selected-btn">
                                                                                Save</a>
                                                                            <a href="javascript:void(0);"
                                                                               class="selected-btn bg-black"> Select</a>
                                                                            <a href="javascript:void(0);"
                                                                               class="selected-btn-delete"><span><i
                                                                                            class="fadeIn animated bx bx-trash"></i></span></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Featured Images Modal Start -->

                        <div class="col-12 ">
                            <div class="card rounded-4 w-100">
                                <div class="card-body">
                                    <div class="f-image-upload ">
                                        <div class="f-image-title">
                                            <h6>Select Featured Image <span class="required-star">*</span></h6>
                                            <p>Add images that represent the writing to make it more interesting</p>
                                        </div>
                                        <div class="divider-space-text"></div>

                                        <!-- <input type="file" id="icon-upload-image"> -->
                                        <label class="icon-images-f" data-bs-toggle="modal"
                                               data-bs-target="#exampleLargeModal">
                                            <input type="text" id="fe_img_id" name="fetature_img">


                                            <div style="display: none" id="storeUploadImg"></div>
                                            <input type="hidden" id="storeUploadImgId">


                                            <span class="bg-icon-upload fetatureimgSet" id="">
                                         <i class="fadeIn animated bx bx-images"></i>
                                        </span>

                                            @error('fetature_img')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </label>
                                        <br>
                                        <br>

                                        {{--kkk--}}
                                        {{--<div class="input-block mt-3">--}}
                                        {{--<input type="text" class="form-control" name="img_caption[]"  id="input-text"--}}
                                        {{--spellcheck="false">--}}
                                        {{--<span class="placeholder">Image Caption...</span>--}}
                                        {{--</div>--}}


                                    </div>

                                    {{--<div class="input-block">--}}
                                    {{--<input type="text" class="form-control" name="audio_link" id="input-text"--}}
                                    {{--spellcheck="false" value="{{old('video_link')}}">--}}
                                    {{--<span class="placeholder">Image Caption</span>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="card rounded-4 w-100">
                                <div class="card-body">
                                    <div class="f-image-upload ">
                                        <div class="f-image-title">
                                            <h6>Select Category</h6>
                                            <p>Add images that represent the writing to make it more interesting</p>
                                        </div>
                                        <div class="divider-space-text"></div>
                                        <div class="category-post">
                                            <div class="mb-3 custom-single-select">
                                                <label class="form-label post-cat-label">Category <span
                                                            class="required-star">*</span></label>
                                                <select class="single-select" name="post_category_id" id="category_list"
                                                        onchange="setSubcategory(this)">
                                                    <option value="">Choose Category</option>
                                                    @foreach($categoryuList as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach

                                                </select>
                                                @error('post_category_id')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror


                                            </div>
                                        </div>
                                        <div class="sub-category-post">
                                            <div class="mb-3 custom-single-select">
                                                <label class="form-label post-cat-label">Sub Category</label>
                                                <select class="single-select" name="post_sub_category_id"
                                                        id="sub_category_id"
                                                        onchange="setChildCategoryList(this)">
                                                    <option value="">Choose Sub Category</option>

                                                </select>

                                            </div>
                                        </div>
                                        <div class="child-category-post">
                                            <div class="mb-3 custom-single-select">
                                                <label class="form-label post-cat-label">Child Category</label>
                                                <select class="single-select" name="post_child_category_id"
                                                        id="child_category_id">
                                                    <option value="">Choose Child Category</option>


                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="card rounded-4 w-100">
                                <div class="card-body">
                                    <div class="f-image-upload customtwo">
                                        <div class="f-image-title right">
                                            <div class="d-flex justify-content-start align-content-center">
                                                <h6 class="align-self-center">Youtube Video Link</h6>
                                                <img src="{{asset('assets/backend')}}/images/icons/youtube.png" alt=""
                                                     class="title-icon">
                                            </div>
                                            <p>Add images that represent the writing to make it more interesting</p>
                                        </div>
                                        <div class="divider-space-text"></div>
                                        <div class="input-block">
                                            <input type="text" class="form-control" name="video_link"
                                                   value="{{old('video_link')}}" id="input-text"
                                                   spellcheck="false">
                                            <span class="placeholder">Link Paste...</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="card rounded-4 w-100">
                                <div class="card-body">
                                    <div class="f-image-upload customtwo">
                                        <div class="f-image-title right">
                                            <div class="d-flex justify-content-start align-content-center">
                                                <h6 class="align-self-center">Soundcloud Audio Link</h6>
                                                <img src="{{asset('assets/backend')}}/images/icons/soundcloud.png"
                                                     alt=""
                                                     class="title-icon">
                                            </div>
                                            <p>Add images that represent the writing to make it more interesting</p>
                                        </div>
                                        <div class="divider-space-text"></div>
                                        <div class="input-block">
                                            <input type="text" class="form-control" name="audio_link" id="input-text"
                                                   spellcheck="false" value="{{old('video_link')}}">
                                            <span class="placeholder">Link Paste...</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="card rounded-4 w-100">
                                <div class="card-body">
                                    <div class="f-image-title">
                                        <h6>Post Placement </h6>
                                        <p>Add images that represent the writing to make it more interesting</p>
                                    </div>
                                    <div class="switcher-custom-wrapper">
                                        <ul class="custom-checkbox">
                                            <li class="custom-check-list">
                                                <input type="checkbox" name="placement" value="featured"
                                                       onclick="checkedMe(this)" id="myCheckbox1"
                                                       class="custom-check postPlace"/>
                                                <label for="myCheckbox1" class="custom-check-label"><img
                                                            src="{{asset('assets/backend')}}/images/icons/picture.png"/>
                                                    <span>Featured</span></label>
                                            </li>
                                            <li class="custom-check-list">
                                                <input type="checkbox" name="placement" value="left"
                                                       onclick="checkedMe(this)" id="myCheckbox2"
                                                       class="custom-check postPlace"/>
                                                <label for="myCheckbox2" class="custom-check-label"><img
                                                            src="{{asset('assets/backend')}}/images/icons/slider.png"/>
                                                    <span>Featured Left</span></label>
                                            </li>
                                            <li class="custom-check-list">
                                                <input type="checkbox" name="placement" value="right"
                                                       onclick="checkedMe(this)" id="myCheckbox3"
                                                       class="custom-check postPlace"/>
                                                <label for="myCheckbox3" class="custom-check-label"><img
                                                            src="{{asset('assets/backend')}}/images/icons/photo.png"/>
                                                    <span>Featured Right</span></label>
                                            </li>
                                            <li class="custom-check-list">
                                                <input type="checkbox" name="breaking_placement" value="breaking"
                                                       id="myCheckbox4" class="custom-check"/>
                                                <label for="myCheckbox4" class="custom-check-label"><img
                                                            src="{{asset('assets/backend')}}/images/icons/television.png"/>
                                                    <span>Breaking News</span> </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="card rounded-4 w-100">
                                <div class="card-body">
                                    <div class="f-image-upload ">
                                        <div class="f-image-title">
                                            <h6>Select Location </h6>
                                            <p>Add images that represent the writing to make it more interesting</p>
                                        </div>
                                        <div class="divider-space-text"></div>
                                        <div class="category-post">
                                            <div class="mb-3 custom-single-select">
                                                <label class="form-label post-cat-label">Division</label>
                                                <select class="single-select" name="division_id"
                                                        onchange="districtList(this)">
                                                    <option value="">Choose Division</option>
                                                    @foreach($division as $divisiondata)
                                                        <option value="{{$divisiondata->id}}">{{$divisiondata->name}}</option>
                                                    @endforeach

                                                </select>

                                            </div>
                                        </div>
                                        <div class="sub-category-post">
                                            <div class="mb-3 custom-single-select">
                                                <label class="form-label post-cat-label">District</label>
                                                <select class="single-select" name="district_id" id="district"
                                                        onchange="thanaList(this)">
                                                    <option value="">Choose District</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="child-category-post">
                                            <div class="mb-3 custom-single-select">
                                                <label class="form-label post-cat-label">Thana</label>
                                                <select class="single-select" name="thana_id" id="thana">
                                                    <option value="">Choose Thana</option>

                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--order-md-first--}}
                        <div class="col-12 order-last ">
                            <div class="card rounded-4 w-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3"
                                         style="display: none">
                                        <h6 class="mb-0">Schedule Post </h6>
                                        <div class="form-check form-switch custom-scduled-switch">
                                            <input class="form-check-input" type="checkbox" name="isSchedule"
                                                   oninput="scheduleCheck(this)"
                                                   id="flexSwitchCheckChecked" {{old('isSchedule')=='on'?'checked':''}} >
                                        </div>
                                    </div>
                                    <div class="choose-date-box schedule" style="display: none">
                                        <input class="result form-control" name="schedule_post_date"
                                               value="{{old('schedule_post_date')}}" type="text" id="date-time"
                                               placeholder="Date Picker...">
                                    </div>
                                    <input type="hidden" id="post_type" name="post_type" value="">


                                    <div class="direct-post-publish d-flex align-items-center g-3 justify-content-start">
                                        <div class="add-section d-flex justify-content-left scheduled me-2">
                                            <label for="saveandpreview" class="add-section-btn">
                                                <div class="parent-icon"><i class="fadeIn animated bx bx-save"></i>
                                                </div>
                                                <div class="menu-title">Save & Preview</div>
                                            </label>
                                            <button type="submit" onclick="formSubmit('save-preview')"
                                                    style="display:none" id="saveandpreview">submit
                                            </button>
                                        </div>

                                        <div class="add-section d-flex justify-content-left scheduled p-post">
                                            <label for="publishRequest" class="add-section-btn">
                                                <div class="parent-icon"><i class="lni lni-bullhorn"></i>
                                                </div>
                                                <div class="menu-title " id="publisType">Publish</div>
                                            </label>
                                            <button type="submit" onclick="formSubmit('publish-request')"
                                                    style="display:none" id="publishRequest">submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="card rounded-4 w-100">
                                <div class="card-body">
                                    <div class="f-image-upload">
                                        <div class="f-image-title right">
                                            <div class="d-flex justify-content-start align-content-center">
                                                <h6 class="align-self-center">Author <span
                                                            class="required-star">*</span></h6>
                                            <!-- <img src="{{asset('assets/backend')}}/images/icons/writer.png" alt="" class="title-icon"> -->
                                            </div>
                                            <p>Add images that represent the writing to make it more interesting</p>
                                        </div>
                                        <div class="author-box d-flex justify-content-start align-items-center"
                                             data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal">
                                            <div class="author-img">
                                                <img src="{{asset('assets/backend')}}/images/avatars/avatar-11.png"
                                                     alt="">
                                            </div>
                                            <div class="author-name">
                                                <h4>Minhaz Morshed</h4>
                                                <p>Editor</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
        </form>
    </div>
    <!--end row-->
    {{--add new section --}}
    <div class="row" style="display: none;">
        <div id="related_post">
            <div class="mb-3 custom-single-select related-article-select-wrapper cls-related" style="display: none">
                <label class="form-label post-cat-label ">Related Post</label>
                <select class="related-article-select" name="related_post_id[]">
                    <option value="">Choose Related Post</option>
                    @foreach($publishPostList as $post_data)
                        <option value="{{$post_data->id}}">   @if(strlen($post_data->title) > 40)
                                {{ mb_substr($post_data->title, 0, 40)}} ...
                            @else
                                {{$post_data->title}}
                            @endif</option>
                    @endforeach
                </select>
            </div>

        </div>

    </div>
    {{--end new section--}}

    </main>

@endsection

{{--@section('modal')--}}
{{--@include('backend.admin.partials._common_image_crop_modal')--}}
{{--@endsection--}}

@section('modal')

    <!-- Author Box Start -->
    <!-- Modal -->
    <div class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered custom-author-dialog">
            <div class="modal-content">
                <div class="modal-header pb-0">
                    <div class="row">
                        <div class="col-12 d-flex mb-2">
                            <h5 class="modal-title custom-model-title">Select Auhtor</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="col-12">
                            <div class="search-author-box mb-3">
                                <div class="searchbar">
                                    <div class="search-icon position-relative">
                                        <span class="icon-search"><i class="bi bi-search"></i></span>
                                        <input class="form-control" type="text"
                                               placeholder="Type here to search">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-body custom-modal-author">
                    @foreach($reporterList as $reporter)
                        <div class="author-box d-flex justify-content-start align-items-center">
                            <div class="author-img">
                                <img src="{{asset('assets/backend')}}/images/avatars/avatar-11.png" alt="">
                            </div>
                            <div class="author-name">
                                <h4>{{$reporter->bn_full_name}}</h4>
                                <p>Editor</p>
                            </div>
                        </div>
                    @endforeach


                </div>

            </div>
        </div>
    </div>

    <!-- Author Box End -->


    <div class="modal fade" id="jCropModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Resize Your Image</h5>
                    <button type="button" class="close" onclick="closeCropModal()">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="img-container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <img id="jCropModalImg" src="" style="max-width: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm btn-sm-fwb" onclick="closeCropModal()">
                        Cancel
                    </button>
                    <button type="button" class="btn btn-primary btn-sm btn-sm-fwb" id="crop">Crop</button>
                </div>
            </div>
        </div>
    </div>




@endsection



@section('css_plugins')

    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/plugins/ckeditor5-build-classic/build/ckeditor.js')}}?v=1.7"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/plugins/cropperjs/cropper.css')}}?v=1.7"/>


    <link href="{{ asset('assets/backend')}}/plugins/select2/css/select2.min.css" rel="stylesheet"/>
    <link href="{{ asset('assets/backend')}}/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet"/>

    <link href="{{ asset('assets/backend')}}/plugins/input-tags/css/tagsinput.css" rel="stylesheet"/>
    <link href="{{ asset('assets/backend')}}/plugins/datetimepicker/css/classic.css" rel="stylesheet"/>
    <link href="{{ asset('assets/backend')}}/plugins/datetimepicker/css/classic.time.css" rel="stylesheet"/>
    <link href="{{ asset('assets/backend')}}/plugins/datetimepicker/css/classic.date.css" rel="stylesheet"/>
    <link rel="stylesheet"
          href="{{ asset('assets/backend')}}/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="{{asset('assets/backend')}}/css/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="{{ asset('assets/backend')}}/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet"/>
    <link href="{{ asset('assets/backend')}}/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet"/>
    <link href="{{ asset('assets/backend')}}/plugins/tags/css/amsify.suggestags.css" rel="stylesheet"/>

    {{--<link rel="stylesheet" type="text/css" href="{{asset('assets/backend/plugins/cropperjs/cropper.css')}}?v=1.7"/>--}}

    <style>
        #jCropModalImg {
            max-width: 95%;
            max-height: 60vh;
        }

        .rcrop-wrapper .rcrop-outer-wrapper {
        }
    </style>
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/backend/plugins/jqueryCropper/dist/rcrop.min.css')}}?v=1.7"/>
@endsection
@section('js_plugins')
    <script src="{{asset('assets/backend/plugins/ckeditor5-build-classic/build/ckeditor.js')}}"></script>
    <script src="{{asset('assets/backend/plugins/cropperjs/cropper.js')}}"></script>

    <script src="{{ asset('assets/backend')}}/plugins/input-tags/js/tagsinput.js"></script>
    <!-- Date Picker -->
    <script src="{{ asset('assets/backend')}}/plugins/datetimepicker/js/legacy.js"></script>
    <script src="{{ asset('assets/backend')}}/plugins/datetimepicker/js/picker.js"></script>
    <script src="{{ asset('assets/backend')}}/plugins/datetimepicker/js/picker.time.js"></script>
    <script src="{{ asset('assets/backend')}}/plugins/datetimepicker/js/picker.date.js"></script>
    <script src="{{ asset('assets/backend')}}/plugins/bootstrap-material-datetimepicker/js/moment.min.js"></script>
    <script src="{{ asset('assets/backend')}}/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js"></script>
    <script src="{{ asset('assets/backend')}}/js/form-date-time-pickes.js"></script>
    <!-- Date Picker -->

    {{--select--}}
    <script src="{{ asset('assets/backend')}}/plugins/select2/js/select2.min.js"></script>
    <script src="{{ asset('assets/backend')}}/js/form-select2.js"></script>
    {{--select--}}

    {{--<script src="{{asset('assets/backend/plugins/cropperjs/cropper.js')}}"></script>--}}

    <script type="text/javascript" src="{{asset('assets/backend/plugins/jqueryCropper/dist/rcrop.js')}}?v=2.1"></script>
    <script type="text/javascript" src="{{asset('assets/backend/plugins/tags/js/jquery.amsify.suggestags.js')}}?v=2.1"></script>
@endsection
@section('js')

    <script>

        //------------------------------new croper------------------------------------------------------
        var modalD = null;
        $(document).ready(function () {
            $("body").on("change", ".img_input", function (e) {
                $('#jCropModalImg').rcrop('destroy');
                let parentCls = $(this).attr('p-class');
                $('#parentClass').val(parentCls)
                var files = e.target.files;
                var done1 = function (url) {
                    showLoader('Loading...', 'Please Wait');
                    $("#jCropModalImg").attr('src', url);
                    $("#jCropModal").modal('show');
                    $(".img_input").val('');


                    setTimeout(function () {
                        modalD = $('#jCropModalImg').rcrop({
                            minSize: [160, 90],
                            preserveAspectRatio: true,
                            /*preview : {
                                display: true
                            }*/
                        });
                        $('#jCropModalImg').on('rcrop-changed', function () {
                            selectedCroppedData = $(this).rcrop('getDataURL', 1008, 567);
                        });
                        $('#jCropModalImg').on('rcrop-ready	', function () {
                            selectedCroppedData = $(this).rcrop('getDataURL');
                            hideLoader();
                        });
                    }, 1000);
                };

                var reader;
                var file;
                var url;

                if (files && files.length > 0) {
                    file = files[0];
                    reader = new FileReader();
                    reader.onload = function (e) {
                        done1(reader.result);
                    };
                    reader.readAsDataURL(file);
                }
            });

            $("#crop").on('click', function () {

                //code edit
                var base64data = selectedCroppedData;

                let parentClass = $('#parentClass').val();
                console.log(parentClass);


                $('.' + parentClass).find('.img_input_set').val(base64data);
                // $("#nid_img").html(`<img width="100%" height="100%" src="${base64data}">`);
                $('.' + parentClass).find('.img_show').html(`<img width="100%" height="100%" src="${base64data}">`);

                if (parentClass == 'featureImg') {
                    $('#fe_img_id').val(base64data)
                    $('.fetatureimgSet').html(`<img width="100%" height="100%" src="${base64data}">`)
                }


                $("#crop_logo").val(base64data);

                //code edit


                closeCropModal();
            });
        });


        //------------------------------new croper------------------------------------------------------


        ClassicEditor

            .create(document.querySelector('#editor2'))
            .catch(error => {

            });
        ClassicEditor

            .create(document.querySelector('.editor3'))
            .catch(error => {
                // console.error(error);
            });
        ClassicEditor

            .create(document.querySelector('#firstDescription'))
            .catch(error => {
                // console.error(error);
            });
        ClassicEditor

            .create(document.querySelector('#secondDescription'))
            .catch(error => {
                console.error(error);
            });


        function addNewSection() {

            let uniqid = 'sd' + Date.now();
            let select2id = 'sl2' + Date.now();
            let relatedpost = $('#related_post').html();
            let item = $('#sectionItems').html();
            $('#new_section').append(`<div class="row pc${uniqid}">
                <div class="col-12">
                    <div class="f-image-upload two mt-4">

                        <div class="f-image-title  d-flex justify-content-between py-3">
                            <h6>Another Section </h6>
                            <span class="delete-section" onclick="deleteItem('pc${uniqid}')"><i class="fadeIn animated bx bx-trash"></i></span>
                        </div>
                        <div class="divider-space-text"></div>
                      <div class="d-flex justify-content-center">
                            <input type="file" id="cr${uniqid}" class="img_input"  p-class="pc${uniqid}" id="cr${uniqid}">
                            <input type="text" class="img_input_set"  name="post_img[]">
                            <label for="cr${uniqid}" class="icon-images-f sectionImg" >
                                <span class="bg-icon-upload img_show"><i class="fadeIn animated bx bx-images"></i></span>
                            </label>
                      </div>



                    </div>
                    <div class="input-block mt-3">
                        <input type="text" class="form-control" name="img_caption[]"  id="input-text"
                               spellcheck="false">
                        <span class="placeholder">Image Caption...</span>
                    </div>
                </div>
                <div class="col-12" id="ckdiv${uniqid}">
                    <div class="new-post-wrap">
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label custom-form-label mt-3">Description</label>

                                <div class="editor3 cktxtlist" ckid="ckdiv${uniqid}" id="${uniqid}"></div>
                                <p class="label-sub"><span style="font-weight: 500;color:rgb(49, 49, 49)">Note: </span>
                                 Add images that represent the writing to make it more interesting</p>
                            </div>
                       <div>
                    </div>
                </div>
                       ${relatedpost}

            </div>`)


            ClassicEditor

                .create(document.querySelector('#' + uniqid))
                .catch(error => {
                    console.error(error);
                });
            relatedArticleSelect2();
            // ClassicEditor
            // $('#' + select2id).select2({
            //     theme: 'bootstrap4',
            //     width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            //     placeholder: $(this).data('placeholder'),
            //     allowClear: Boolean($(this).data('allow-clear')),
            // });

            // $('.selectitem').each(function(){
            //     $(this).select2({
            //         theme: 'bootstrap4',
            //         width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            //         placeholder: $(this).data('placeholder'),
            //         allowClear: Boolean($(this).data('allow-clear')),
            //     });
            // })

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

        function categoryLanChange() {
            let tgval = $('#setlanguage').val();
            if (tgval == 'bn' || tgval == 'on') {
                tgval = 'en';
            } else {
                tgval = 'bn';
            }
            $('#setlanguage').val(tgval);


            $("#lang2").val(tgval).change();

            $.ajax({
                url: "{{route('admin.get.post.category.item')}}",
                type: "get",
                data: {
                    language: tgval,
                },
                success: function (response) {
                    $('#category_list').html(response);
                    $('#sub_category_id').html(`<option value="">--SELECT SUBCATEGORY--</option>`)
                    $('#child_category_id').html(`<option value="">--SELECT CHILD CATEGORY--</option>`)

                    $('.single-select-wsearch').select2({
                        theme: 'bootstrap4',
                        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                        placeholder: $(this).data('placeholder'),
                        allowClear: Boolean($(this).data('allow-clear')),
                    });
                },
                error: function (xhr) {
                    //Do Something to handle error
                }
            });


        }

        function setSubcategory(data) {
            let category_id = $(data).val();
            $.ajax({
                url: "{{route('admin.get.post.subcategory.list')}}",
                type: "get",
                data: {
                    category_id: category_id,
                },
                success: function (response) {
                    console.log(response)
                    $('#sub_category_id').html(response)
                },
                error: function (xhr) {
                    //Do Something to handle error
                }
            });
        }

        function setChildCategoryList(data) {
            let subcategory_id = $(data).val();
            $.ajax({
                url: "{{route('admin.get.post.child.category.list')}}",
                type: "get",
                data: {
                    sub_category_id: subcategory_id,
                },
                success: function (response) {
                    console.log(response)

                    $('#child_category_id').html(response)
                },
                error: function (xhr) {
                    //Do Something to handle error
                }
            });
        }


        //    image

        function srcImage(data, type) {
            $srcImg = $(data).val();

            $.ajax({
                url: "{{route('media.img.src')}}",
                type: "get",
                data: {
                    img_name: $srcImg,
                    type: type
                },
                success: function (response) {
                    if (type == 'upload') {
                        $('#imgList').html('');
                        $('#imgList').html(response);
                    }
                    if (type == 'resource') {
                        $('#imgList').html(response);
                    }


                },
                error: function (xhr) {
                    //Do Something to handle error
                }
            });


        }


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
                    //kaxi
                    $('#attributed_image_path').val(response.attributed_image_path);
                    $('#img_name').val(response.name);
                    $('#alt_text').val(response.alt_text);
                    $('#edit_img_id').val(response.id);
                    $('#attributed_image_path').val(response.fullPathImg);
                    $('#viewImgBtn').attr('href', response.fullPathImg);
                    $('#show_logo').attr('src', response.fullPathImg);


                    $('#storeUploadImg').html(`<img style="width: 100%" height="100%" src="${response.fullPathImg}" alt="">`)
                    $('#storeUploadImgId').val(img_id)


                    // $('#fe_img_id').val(img_id)
                    // $('.fetatureimgSet').html(`<img style="width: 100%" height="100%" src="${response.fullPathImg}" alt="">`)

                },
                error: function (xhr) {
                    //Do Something to handle error
                }
            });
        }

        function setFeatureImage() {
            let uploadImage = $('#storeUploadImg').html()
            let imageId = $('#storeUploadImgId').val()

            $('#fe_img_id').val(imageId)
            $('.fetatureimgSet').html(uploadImage)

            $('#exampleLargeModal').modal('hide')
        }

        function deleteFeatureImage() {
            var imgId = $('#storeUploadImgId').val();

            $.ajax({
                url: "{{route('admin.ajax.media.image.delete')}}",
                type: "get",
                data: {
                    img_id: imgId,
                },
                success: function (response) {
                    toastr.success('Successfully Deleted Image', 'Success!');
                },
                error: function (xhr) {
                    //Do Something to handle error
                }
            });

        }


        function saveFeatureImageData() {
            var imgName = $('#img_name').val();
            var imgText = $('#alt_text').val();
            var imgId = $('#storeUploadImgId').val();


            $.ajax({
                url: "{{route('admin.ajax.media.image.update')}}",
                type: "get",
                data: {
                    img_id: imgId,
                    name: imgName,
                    alt_text: imgText,

                },
                success: function (response) {
                    toastr.success('Successfully Updated Image Info', 'Success!');
                },
                error: function (xhr) {
                    //Do Something to handle error
                }
            });

        }

        function districtList(data) {
            var division_id = $(data).val();

            $.ajax({
                url: "{{route('admin.district.get')}}",
                type: "get",
                data: {
                    id: division_id,
                },
                success: function (response) {
                    $('#district').html(response)
                },
                error: function (xhr) {
                    //Do Something to handle error
                }
            });

        }

        function thanaList(data) {
            var district_id = $(data).val();

            $.ajax({
                url: "{{route('admin.thana.get')}}",
                type: "get",
                data: {
                    id: district_id,
                },
                success: function (response) {
                    $('#thana').html(response)
                },
                error: function (xhr) {
                    //Do Something to handle error
                }
            });

        }

        function scheduleCheck(data) {
            if ($(data).is(":checked")) {
                $('.schedule').show(300);
                $('#publisType').html('Schedule');
            } else {
                $('.schedule').hide(300);
                $('#publisType').html('Publish');
            }
        }

        @if(old('isSchedule')=='on')
        $('.schedule').show();

        @endif

        function deleteItem(id) {
            $('.' + id).remove();
            $('#' + id).remove();
        }

        function isrelatedPost() {
            let isauto = $('#is_auto').val();
            if (isauto == 0) {
                $('#is_auto').val(1);
                $('.cls-related').show();
            } else {
                $('#is_auto').val(0);
                $('.cls-related').hide();
            }
        }

        function ckeditordata(item) {
            $value = $('.' + item).html();
            consoel.log($value);
            $('#' + item).html($value);
        }


        function formSubmit(type) {
            event.preventDefault();

            if (type === 'save-preview') {
                $('#post_type').val('save-preview');
            } else {
                $('#post_type').val('publish-request');
            }


            let firstDiscript = $('#firstdiscriptionDiv').find('.ck-content').html();
            if (firstDiscript === '<p><br data-cke-filler=\"true\"></p>' || firstDiscript == '<p></p>') {
                firstDiscript = '';
            }
            $('#first_ds').html(firstDiscript);

            let secondDiscript = $('#seconddiscriptionDiv').find('.ck-content').html();
            $('#second_ds').html(secondDiscript);

            $('.cktxtlist').each(function () {
                let ckid = $(this).attr('ckid');
                let ckval = $('#' + ckid).find('.ck-content').html();
                $('#anoter_ck_list').append(` <textarea name="another_post_details[]">${ckval}</textarea>`)
            })

            // toastr.success('sdfsd','Copied!')
            $('#postform').submit();
        }

        $('#date-time').bootstrapMaterialDatePicker(
            {
                changeMonth: true,
                changeYear: true,
                dateFormat: 'dd/mm/yy',
                // maxDate: maxBirthdayDate,
                // yearRange: '1900:'+maxBirthdayDate.getFullYear(),
            }
        );

        function relatedArticleSelect2() {
            $('#new_section .related-article-select').select2({
                theme: 'bootstrap4',
                width: $(this).data('width')
                    ? $(this).data('width')
                    : $(this).hasClass('w-100')
                    ? '100%' : 'style',
                placeholder: $(this).data('placeholder'),
                allowClear: Boolean($(this).data('allow-clear')),
            });
        }

        $(document).ready(function () {

            $('.single-select').each(function () {
                $(this).select2({
                    theme: 'bootstrap4',
                    width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                    placeholder: $(this).data('placeholder'),
                    allowClear: Boolean($(this).data('allow-clear')),
                });
            });

            {{--function resourceImage(){--}}
            {{--var pageNo=+$('#rscPageNo').val();--}}
            {{--var currentPg=pageNo+1;--}}
            {{--$.ajax({--}}
            {{--url: "{{route('admin.resource.image')}}",--}}
            {{--type: "get",--}}
            {{--data: {--}}
            {{--page: currentPg,--}}
            {{--},--}}
            {{--success: function (response) {--}}
            {{--$('#imgList').append(response)--}}
            {{--},--}}
            {{--error: function (xhr) {--}}
            {{--//Do Something to handle error--}}
            {{--}--}}
            {{--});--}}
            {{--}--}}

            // uploadImage();
            // resourceImage();

            $('#imgList').on('scroll', function () {
                if ($('#imgList').scrollTop() + $('#imgList').innerHeight() >= $('#imgList')[0].scrollHeight) {

                    uploadImage();
                }

            });


            /*$("input[data-role=tagsinputCustom]").tagsinput({
                itemValue: "value",
                itemText: "text",
                typeaheadjs: {
                    name: "task",
                    displayKey: "text",
                    source: task.ttAdapter()
                }
            });*/
            $(".tagsInput").amsifySuggestags({
                suggestions: {!! json_encode($postTags) !!},

            });
            $(".tagsInput").keydown(function(event){
                if( (event.keyCode == 13)) {
                    event.preventDefault();
                    return false;
                }
            });


        });


        function uploadImage() {
            var type = $('#ImgType').val();
            if (type === 'upload') {
                var pageNo = +$('#pageNo').val();
                var currentPg = pageNo + 1;
                $('#pageNo').val(currentPg);
                $.ajax({
                    url: "{{route('admin.upload.image')}}",
                    type: "get",
                    data: {
                        page: currentPg,
                    },

                    success: function (response) {
                        $('#imgList').append(response)
                    },
                    error: function (xhr) {
                        //Do Something to handle error
                    }
                });
            }


            if (type === 'resource') {
                var pageNo2 = +$('#rscPageNo').val();
                var currentPg2 = pageNo2 + 1;
                $.ajax({
                    url: "{{route('admin.resource.image')}}",
                    type: "get",
                    data: {
                        page: currentPg2,
                    },
                    success: function (response) {
                        $('#imgList').append(response)
                    },
                    error: function (xhr) {
                        //Do Something to handle error
                    }
                });
            }

        }

        function resourceImgList() {

            $('#uploadSrc').hide()
            $('#resourceSrc').show()


            $('#ImgType').val('resource')
            $('#imgList').html('')
            $('#rscPageNo').val(0)
            uploadImage()
        }

        function uploadImgList() {
            $('#resourceSrc').hide()
            $('#uploadSrc').show()
            $('#ImgType').val('upload')
            $('#imgList').html('')
            $('#pageNo').val(0)
            uploadImage()
        }

        function checkedMe(data) {
            $('.postPlace').prop("checked", false);

            $(data).prop("checked", true);

        }


    </script>
@endsection









