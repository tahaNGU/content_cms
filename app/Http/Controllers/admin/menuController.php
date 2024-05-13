<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class menuController extends Controller
{

    public function __construct(private string $view = "", private string $module = '', private string $module_title = '')
    {
        $this->view = "admin.module.menu.";
        $this->module = "menu";
        $this->module_title = __("modules.module_name.".$this->module);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menu_kind=trans('common.menu_kind');
        $open_type = trans('common.open_type');
        return view($this->view.'new',[
            'menu_kind' => $menu_kind,
            'open_type' => $open_type,
            'module_title' => $this->module_title,
            'module' => $this->module
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

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
