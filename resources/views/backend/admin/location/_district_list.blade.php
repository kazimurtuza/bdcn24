@if($district)
    @foreach($district as $divisionList)
        <option value="{{$divisionList->id}}">{{$divisionList->name}}</option>
    @endforeach

@endif