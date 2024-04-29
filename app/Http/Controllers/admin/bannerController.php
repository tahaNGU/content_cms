<?php

namespace App\Http\Controllers\admin;

use App\base\class\admin_controller;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\banner_request;
use App\Models\banner;
use App\Trait\ResizeImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class bannerController extends Controller
{
    use ResizeImage;
    public function __construct(private string $view="",private string $module='',private string $module_title='')
    {
        $this->view = "admin.module.banner.";
        $this->module = "banner";
        $this->module_title = __("modules.module_name." . $this->module);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $banner_kind=trans('common.banner_kind');
        $open_type=trans('common.open_type');
        $banners=banner::filter($request->all())->paginate(5);
        return view($this->view.'list',[
            'banner_kind'=>$banner_kind,
            'open_type'=>$open_type,
            'module_title'=>$this->module_title,
            'module'=>$this->module,
            'banners'=>$banners,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $banner_kind=trans('common.banner_kind');
        $open_type=trans('common.open_type');
        return view($this->view.'new',[
            'banner_kind'=>$banner_kind,
            'open_type'=>$open_type,
            'module_title'=>$this->module_title,
            'module'=>$this->module
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(banner_request $request)
    {
        $module=$this->module."_type_".$request->kind;
        $pic=$this->upload_file($module,'pic');
        $inputs=$request->validated();
        $inputs['pic']=$pic;
        $inputs['admin_id']=auth()->user()->id;
        banner::create($inputs);
        return back()->with('success', __('common.messages.success', [
            'module' => $this->module_title
        ]));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        banner::where('id', $id)->where('admin_id', '1')->delete();
        return true;
    }

    public function action_all(Request $request){
        $filed_validation = ['item' => 'required'];
        $validator = Validator::make($request->all(), $filed_validation);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }
        return (new admin_controller())->action($request, banner::class);
    }
}
