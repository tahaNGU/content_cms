<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\permissions;
use Illuminate\Http\Request;

class roleController extends Controller
{

    public function __construct(private string $view = "", private string $module = '', private string $module_title = '')
    {
        $this->view = "admin.module.role.";
        $this->module = "role";
        $this->module_title = __("modules.module_name." . $this->module);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $modules_permission=[];
        $modules=trans('modules.module_name') ;
        foreach (trans('modules.module_name') as $key => $module) {
            $modules_permission[$module]=permissions::where('module',$key)->get(["id","title"])->pluck("id","title_fa")->toArray();
       }
        return view($this->view . 'create', [
            'module_title' => $this->module_title,
            'module' => $this->module,
            'modules_permission' => $modules_permission,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }
}
