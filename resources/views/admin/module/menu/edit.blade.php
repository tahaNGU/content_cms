@extends("admin.layout.base")
@php $module_name= $module_title . " ویرایش "  @endphp
@section("title")
    {{$module_name}}
@endsection
@section("content")
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{$module_name}}</h4>
                        </div>
                        <div class="card-body">
                            @component($prefix_component.".form",['action'=>route('admin.menu.update',['menu'=>$menu['id']]),'method'=>'post','upload_file'=>true])
                                @slot("content")
                                    @method('put')
                                    @component($prefix_component."input",['name'=>'title','title'=>'عنوان','value'=>$menu['title'],'class'=>'w-50'])@endcomponent
                                    @component($prefix_component."select",['name'=>'type','title'=>'نوع','class'=>'w-50','items'=>$menu_kind,'value_old'=>$menu['type']])@endcomponent
                                    @component($prefix_component."upload_file",['name'=>'pic','title'=>'تصویر ','value'=>$menu['pic'],'class'=>'w-50 type type-1'])@endcomponent
                                    @component($prefix_component."input",['name'=>'alt_pic','title'=>'alt تصویر','value'=>$menu['alt_pic'],'class'=>'w-50 type type-1'])@endcomponent
                                    @component($prefix_component."select_recursive",['name'=>'catid','options'=>$menu_cats,'label'=>'بخش','first_option'=>'بخش اصلی', 'sub_method'=>'sub_menus','value'=>$menu["catid"]])@endcomponent
                                    @component($prefix_component."select",['name'=>'open_type','title'=>'نوع باز شدن','class'=>'w-50','items'=>$open_type,'value_old'=>$menu['open_type']])@endcomponent
                                    @component($prefix_component."input",['name'=>'address','title'=>'آدرس','value'=>$menu['address'],'class'=>'w-50','dir'=>'ltr'])@endcomponent
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
    <script>
        var show_class=".type-"+{{$menu['type']}};
        $(".type").addClass("d-none");
        $(show_class).addClass("d-block");
        $("[name='type']").on('change', function () {
            var type=$(this).val();
            $(".type").removeClass('d-block').addClass("d-none")
            $(".type-"+type).removeClass('d-none').addClass("d-block")
        })
    </script>
@endsection
