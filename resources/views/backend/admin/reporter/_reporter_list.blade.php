@foreach($reporter as $reporter_list)
    <div class="author-box d-flex justify-content-start align-items-center my-2" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal">
        <div class="author-img">
            <img src="assets/images/avatars/avatar-11.png" alt="">
        </div>
        <div class="author-name">
            <h4>{{$reporter_list->en_first_name}} {{$reporter_list->en_last_name}}</h4>
            <p>{{$reporter_list->type}}</p>
        </div>
    </div>
@endforeach