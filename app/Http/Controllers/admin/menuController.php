<?php

namespace App\Http\Controllers\admin;

use App\base\class\admin_controller;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\menu_request;
use App\Models\menu;
use App\Trait\ResizeImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class menuController extends Controller
{
    use ResizeImage;

    //message:
    // search tab doesn't work 
    // edit menu show error pic
    public function __construct(private string $view = "", private string $module = '', private string $module_title = '')
    {
        $this->view = "admin.module.menu.";
        $this->module = "menu";
        $this->module_title = __("modules.module_name.".$this->module);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $menu_kind=trans('common.menu_kind');
        $open_type = trans('common.open_type'); 
        $menus = menu::filter($request->all())->with(['sub_menus'])->orderBy('id','desc')->paginate(5)->withQueryString();
        $menu_cats_search = menu::where("catid", "0")->with("sub_menus")->get();
        return view($this->view . "list", [
            'menu_kind' => $menu_kind,
            'open_type' => $open_type,
            'menus' => $menus,
            'menu_cats_search' => $menu_cats_search,
            'module' => $this->module,
            'module_title' => $this->module_title
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menu_kind=trans('common.menu_kind');
        $open_type = trans('common.open_type');
        $menu_cats=menu::where('catid','0')->get();

        return view($this->view.'new',[
            'menu_kind' => $menu_kind,
            'open_type' => $open_type,
            'module_title' => $this->module_title,
            'module' => $this->module,
            'menu_cats'=>$menu_cats
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(menu_request $request)
    {
        $pic='';
        if ($request->type == '1') {
            $pic = $this->upload_file($this->module,'pic');
        }
        $inputs = $request->validated();
        $inputs['pic'] = $pic;
        $inputs['admin_id'] =auth()->user()->id;
        $inputs['catid'] = $request->catid;
        menu::create($inputs);
        return back()->with('success', __('common.messages.success', [
            'module' => $this->module_title
        ]));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $menu = menu::find($id);
        $menu_kind = trans('common.menu_kind');
        $open_type = trans('common.open_type');

        $menu_cats=menu::where('catid','0')->get();

        return view($this->view . 'edit', [
            'menu_kind' => $menu_kind,
            'open_type' => $open_type,
            'menu' => $menu,
            'menu_cats'=>$menu_cats,
            'module_title' => $this->module_title,
            'module' => $this->module
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(menu_request $request, string $id)
    {
        DB::beginTransaction();
        $inputs = $request->validated();
        $pic='';
        if ($request->type == '1') {
            $pic=$this->upload_file($this->module,'pic');
        }
        $inputs['pic']=$pic;
        $inputs['catid']=$request->catid;
        menu::find($id)->update($inputs);
        DB::commit();
        return back()->with('success', __('common.messages.success_edit', [
            'module' => $this->module_title
        ]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        menu::where('id', $id)->where('admin_id', '1')->delete();
        return true;
    }

    public function action_all(Request $request)
    {
        $filed_validation = ['item' => 'required'];
        $validator = Validator::make($request->all(), $filed_validation);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }
        return (new admin_controller())->action($request, menu::class);
    }
}
