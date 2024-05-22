<?php

namespace App\Http\Controllers\admin;

use App\base\class\admin_controller;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\product_request;
use App\Models\product;
use App\Models\product_cat;
use App\Trait\ResizeImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Morilog\Jalali\Jalalian;

class product_controller extends Controller
{
    use ResizeImage;
    public function __construct(private string $view='',private string $module ='',private string $module_title ='')
    {
        $this->module = "product";
        $this->view = "admin.module.".$this->module.".";
        $this->module_title = __("modules.module_name." . $this->module);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $product = product::with('product_cat')->filter($request->all())->paginate(4);
        $product_cats_search = product_cat::with(['sub_cats'])->where('catid', '0')->get();
        return view($this->view . "list", [
            'module_title' => $this->module_title,
            'product_cats_search' => $product_cats_search,
            'product' => $product
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product_cats = product_cat::where('catid','0')->with('sub_cats')->get();
        return view($this->view . "new", [
            'module_title' => $this->module_title,
            'product_cats' => $product_cats,
            'module' => $this->module,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(product_request $request)
    {
        DB::beginTransaction();
        $pic=$this->upload_file($this->module,'pic');
        $pic_banner = $this->upload_file($this->module,'pic_banner');
        $inputs=$request->validated();
        $inputs['pic']=$pic;
        $inputs['pic_banner']=$pic_banner;
        $inputs['admin_id']=auth()->user()->id;
        $inputs['seo_index_kind']=$request->seo_index_kind ?? '1';
        product::create($inputs);
        DB::commit();
        return back()->with('success', __('common.messages.success',[
            'module' => $this->module_title
        ]));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        $product_cats = product_cat::where('catid', '0')->with('sub_cats')->get();

        return view($this->view . "edit", [
            'module_title' => $this->module_title,
            'product_cats' => $product_cats,
            'product' => $product,
            'module' => $this->module,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(product_request $request, product $product)
    {
        DB::beginTransaction();
        $pic=$this->upload_file($this->module,'pic');
        $pic_banner = $this->upload_file($this->module,'pic_banner');
        $inputs=$request->validated();
        $inputs['pic']=$pic;
        $inputs['pic_banner']=$pic_banner;

        $product->update($inputs);
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
        product::where('id', $id)->where('admin_id',auth()->user()->id)->delete();
        return true;
    }

    public function action_all(Request $request)
    {
        $filed_validation = ['item' => 'required'];
        $validator = Validator::make($request->all(), $filed_validation);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }
        return (new admin_controller())->action($request, product::class);
    }
}
