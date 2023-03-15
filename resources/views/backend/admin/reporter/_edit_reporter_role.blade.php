@if($roleInfo)
<input type="hidden" name="role_id" value="{{$roleInfo->id}}">
<div class="input-block mb-2">
    <label class="reg-label mb-1">Role Name</label>
    <input type="text" class="form-control input-custom" name="name" value="{{$roleInfo->name}}"
           id="input-text" required="" spellcheck="false" placeholder="">
</div>
<div class="input-block mb-2">
    <label class="reg-label mb-1">Slug Name</label>
    <input type="text" class="form-control input-custom" name="slug" value="{{$roleInfo->slug}}"
           id="input-text" spellcheck="false" placeholder="">
</div>
<div class="input-block mb-2">
    <label class="reg-label mb-1">Description</label>
    <textarea class="form-control input-custom" name="description" id="" cols="30"
              rows="3">{{$roleInfo->description}}</textarea>
</div>

<div class="input-block mb-2">
    <input type="checkbox" id="demoCheckbox" name="is_default" value="1" {{$roleInfo->is_default==1?'checked':''}}>
    <label for="demoCheckbox"> Is Default !</label>
</div>
@endif
