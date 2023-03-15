@if($thana)
    @foreach($thana as $thanaList)
        <option value="{{$thanaList->id}}">{{$thanaList->name}}</option>
    @endforeach

@endif