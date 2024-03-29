@extends("admin.layout.base")
@php $module_name="لیست " . $module_title @endphp
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

                            @if(isset($permissions[0]))
                                @component($prefix_component."navtab",['number'=>2,'titles'=>['لیست','جستجو']])
                                    @slot("tabContent0")
                                        @component($prefix_component."form",['action'=>route("admin.permission.action_all")])
                                            @slot("content")
                                                <table class="table text-center">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col"><input type="checkbox" id="check_all"></th>
                                                        <th scope="col">ردیف</th>
                                                        <th scope="col">عنوان</th>
                                                        <th scope="col">ادمین</th>
                                                        <th scope="col">تاریخ</th>
                                                        <th scope="col">عملیات</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($permissions as $permission)
                                                        <tr>
                                                            <th scope="row"><input type="checkbox" name="item[]" class="checkbox_item" value="{{$permission['id']}}"></th>
                                                            <td>{{ $loop->iteration + $permissions->firstItem() - 1 }}
                                                            </td>
                                                            <td>{{$permission["name"]}}</td>
                                                            <td>{{$permission->admin->fullname}}</td>
                                                            <td>{{$permission->date_convert()}}</td>
                                                            <td>
                                                                <a href="{{route("admin.permission.edit",['permission'=>$permission['id']])}}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                                                                <a href="javascript:void(0)" data-href="{{route("admin.permission.destroy",['permission'=>$permission['id']])}}" class="btn btn-danger btn-sm delete"><i class="fas fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                    </tbody>
                                                </table>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="col-5">
                                                        <button class="btn btn-danger btn-sm" type="submit" name="action_all" value="delete_all">حذف کلی</button>
                                                    </div>
                                                    <div class="col-7 d-flex justify-content-end">
                                                        {{$permissions->links()}}
                                                    </div>
                                                </div>
                                            @endslot
                                        @endcomponent
                                    @endslot

                                    @slot("tabContent1")
                                        @component($prefix_component."form",['method'=>'get'])
                                            @slot("content")

                                                @component($prefix_component."input",['name'=>'name','title'=>'عنوان','value'=>request()->get("name"),'class'=>'w-50'])@endcomponent
                                                <div class="my-3">
                                                    @component($prefix_component."button",['title'=>'جستجو'])@endcomponent
                                                </div>
                                            @endslot
                                        @endcomponent
                                    @endslot
                                @endcomponent
                            @else
                                <div
                                    class="alert alert-danger">{{__('common.messages.result_not_found')}}</div>
                            @endif


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section("footer")

@endsection
