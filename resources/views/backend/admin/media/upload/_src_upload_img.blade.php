
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