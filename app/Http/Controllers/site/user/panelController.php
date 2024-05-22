<?php

namespace App\Http\Controllers\site\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\site\change_profile_user_request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Morilog\Jalali\Jalalian;

class panelController extends Controller
{
    public function index()
    {
        return view('site.auth.user.panel');
    }

    public function change_profile()
    {
        return view("site.auth.user.change_profile");
    }

    public function change_profile_store(change_profile_user_request $request)
    {
        $inputs = $request->validated();
        $inputs['date_birth'] = convert_to_timestamp($request->date_birth);
        auth()->user()->update($inputs);
        return back()->with("success", trans("common.msg.success"));
    }

    public function comment(Request $request)
    {
        $comment = auth()->user()->comment()->paginate(2);
        if ($request->ajax()) {
            return view("site.layout.partials.comment", compact('comment'));
        } else {
            return view('site.auth.user.comment', compact('comment'));
        }
    }

    public function change_pass(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'before_password' => ['required', 'min:0', 'max:255'],
            'new_password' => ['required', 'min:8', 'max:255', 'confirmed'],
        ]);
        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()]);
        }
        if (Hash::check($request->before_password, auth()->user()->password)) {
            auth()->user()->update([
                'password'=>Hash::make($request->get("new_password"))
            ]);
            Auth::logout();
            return response()->json("ok");

        } else {
            return response()->json(['errors'=>['before_password'=>['رمز عبور قبلی معتبر نیست']]]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('main');
    }
}
