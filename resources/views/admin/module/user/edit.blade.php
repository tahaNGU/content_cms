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
                            @component($prefix_component."form",['action'=>route('admin.user.update',['user'=>$user["id"]]),'upload_file'=>true])
                                @slot("content")
                                    @component($prefix_component."input",['name'=>'name','title'=>'نام','value'=>$user["name"],'class'=>'w-50'])@endcomponent
                                    @component($prefix_component."input",['name'=>'lastname','title'=>'نام خانوادگی','value'=>$user["lastname"],'class'=>'w-50'])@endcomponent
                                    @component($prefix_component."input",['name'=>'email','title'=>'ایمیل','value'=>$user["email"],'class'=>'w-50'])@endcomponent
                                    @component($prefix_component."input",['name'=>'password','title'=>'رمز عبور','type'=>'password','class'=>'w-50'])@endcomponent
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
@section("footer")

@endsection
