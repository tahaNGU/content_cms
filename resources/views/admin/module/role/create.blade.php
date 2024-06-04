@extends("admin.layout.base")
@php $module_name= $module_title . " جدید "@endphp
@section("title")
    {{$module_name}}
@endsection
@section("content")
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between  ">
                            <h4>{{$module_name}}</h4>
                        </div>
                        <div class="card-body">
                            @component($prefix_component."form",['action'=>route('admin.role.store'),'upload_file'=>true])
                                @slot("content")
                                    @component($prefix_component."input",['name'=>'title','title'=>'عنوان','value'=>old('title'),'class'=>'w-50'])@endcomponent
                                    @error("permissions")
                                    <div class="text text-danger">{{$errors->first('permissions')}}</div>
                                    @enderror
                                    <div class="col-12 d-flex flex-wrap">

                                        @foreach($modules_permission as $key => $permissions)
                                            <div class="col-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4>{{$key}}</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="form-row">
                                                            <div class="form-group mb-0 d-flex flex-wrap">
                                                                @foreach($permissions as $key => $value)
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" value="{{$value}}" type="checkbox"
                                                                               id="gridCheck{{$value}}" @if(!empty(old("permissions")))@if(in_array($value,old("permissions"))) checked @endif @endif name="permissions[]">
                                                                        <label class="form-check-label" for="gridCheck{{$value}}">
                                                                            {{$key}}
                                                                        </label>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach


                                        @component($prefix_component."button",['title'=>'ارسال'])@endcomponent
                                        @endslot
                                        @endcomponent
                                    </div>
                        </div>

                    </div>

                </div>
            </div>
    </section>

@endsection
