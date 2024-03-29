<?php

namespace App\Http\Controllers\admin;

use App\base\class\admin_controller;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\permission_request;
use App\Models\permissions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class permission_controller extends Controller
{
    private string $view = "";
    private string $module = "";
    private string $module_title = "";
    public function __construct()
    {
        $this->view = "admin.module.permission.";
        $this->module = "permission";
        $this->module_title = __("modules.module_name." . $this->module);
    }

    public function index(Request $request)
    {
        $permissions = permissions::filter($request->all())->orderBy('id','desc')->paginate(5)->withQueryString();
        return view($this->view . "list",[
            'module_title'=>$this->module_title,
            'module'=>$this->module,
            'permissions'=>$permissions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $modules=__('modules.'."module_name");
        return view($this->view . "new",[
            'module_title'=>$this->module_title,
            'modules'=>$modules,
            'module'=>$this->module
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(permission_request $request)
    {
        $access=($request->check_all == '1') ? [] : $request->access ;
        permissions::create([
            'name'=>$request->name,
            'admin_id'=>auth()->user()->id,
            'check_all'=>$request->check_all??'0',
            'access'=>json_encode($access),
        ]);
        return back()->with('success', __('common.messages.success', [
            'module' => $this->module_title
        ]));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(permissions $permission)
    {
        $modules=__('modules.'."module_name");
        return view($this->view . "edit",[
            'module_title'=>$this->module_title,
            'modules'=>$modules,
            'module'=>$this->module,
            'permission'=>$permission
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(permission_request $request, permissions $permission)
    {
        $access=($request->check_all == '1') ? [] : $request->access ;
        $permission->update([
            'name'=>$request->name,
            'admin_id'=>auth()->user()->id,
            'check_all'=>$request->check_all??'0',
            'access'=>json_encode($access),
        ]);
        return back()->with('success', __('common.messages.success_edit', [
            'module' => $this->module_title
        ]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $permission=permissions::where('id', $id)->where('admin_id', auth()->user()->id)->firstOrFail();
        $permission->delete();
        return true;
    }

    public function action_all(Request $request)
    {
        $filed_validation = ['item' => 'required'];
        $validator = Validator::make($request->all(), $filed_validation);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }
        return (new admin_controller())->action($request, permissions::class);
    }
}
