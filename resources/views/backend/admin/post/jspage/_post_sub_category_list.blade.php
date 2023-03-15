<option value="">--SELECT--</option>
@foreach($subCategoryList as $subCatelist)
    <option value="{{$subCatelist->id}}">{{$subCatelist->name}}</option>
@endforeach