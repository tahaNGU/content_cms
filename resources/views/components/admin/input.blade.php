@props(['type'=>'text','title'=>'','name'=>'','placeholder'=>'','value'=>'','dir'=>'rtl','class'=>'w-50'])
<div class="form-group">
    <label for="{{$name}}">{{$title}}</label>
    <input type="{{$type}}" name="{{$name}}" id="{{$name}}"  dir="{{$dir}}" placeholder="{{$placeholder}}" value="{{$value}}" class="form-control {{$class}}">
    @error($name)<span class="text text-danger">{{$errors->first($name)}}</span>@enderror
</div>
