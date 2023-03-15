<option value="">--SELECT--</option>
@foreach($childCategoryList as $childCatelist)
    <option value="{{$childCatelist->id}}">{{$childCatelist->name}}</option>
@endforeach