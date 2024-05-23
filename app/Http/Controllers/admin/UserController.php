<?php

namespace App\Http\Controllers\admin;

use App\base\class\admin_controller;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function __construct(private string $view = '', private string $module = '', private string $module_title = '')
    {
        $this->module = "user";
        $this->view = "admin.module." . $this->module . ".";
        $this->module_title = __("modules.module_name." . $this->module);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users = User::filter($request->all())->paginate(5);
        return view("admin.module.user.list", [
            'module_title' => $this->module_title,
            'module' => $this->module,
            'users' => $users,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user=User::find($id);
        return view("admin.module.user.edit", [
            'module_title' => $this->module_title,
            'module' => $this->module,
            'user' => $user,
        ]);
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
        User::where('id', $id)->delete();
        return true;
    }

    public function action_all(Request $request)
    {
        $filed_validation = ['item' => 'required'];
        $validator = Validator::make($request->all(), $filed_validation);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }
        if ($request->action_type == "delete_all") {
            User::whereIn('id', $request->item)->delete();
            return true;
        }
        else {
            return (new admin_controller())->action($request, User::class);

        }
    }
}
