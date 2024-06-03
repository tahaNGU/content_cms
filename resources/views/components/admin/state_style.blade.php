@props(['column'=>'','id'=>'','state'=>'','class'=>'success','title'=>''])
<div class="pretty p-switch">
    <input type="checkbox" class="state_checkbox"
           data-column="{{$column}}"
           data-item="{{$id}}"
           @if($state) checked @endif>
    <div class="state p-{{$class}}">
        <label>{{$title}}</label>
    </div>
</div>
