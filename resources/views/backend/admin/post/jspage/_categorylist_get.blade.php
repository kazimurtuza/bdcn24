<option value=" ">--SELECT--</option>
@foreach($categoryList as $catelist)
<option value="{{$catelist->id}}">{{$catelist->name}}</option>
@endforeach