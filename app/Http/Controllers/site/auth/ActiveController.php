<?php

namespace App\Http\Controllers\site\auth;

use App\Http\Controllers\Controller;
use App\Mail\confirmActive;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class ActiveController extends Controller
{
    public function active()
    {
        return view('site.auth.active');
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'confirm_code' => 'required|min:5|max:5'
        ], ['confirm_code' => __('common.request_validation.confirm_active')]);
        $user = User::where('username', decode_string(request()->get('username')))->where('confirm_code', request()->get('confirm_code'))->where('state', '0')->first();
        if (!is_null($user)) {
            $user->update(['state'=>'1']);
            Auth::login($user);
            return redirect(RouteServiceProvider::HOME);
        }else{
            throw ValidationException::withMessages([
                'confirm_code' => trans('common.request_validation.confirm_active'),
            ]);
        }
    }

    public function resend_code(Request $request){
        $user=User::where('username',decode_string($request->username))->where('state','0')->first();
        $user->update(['confirm_code'=>rand(10000, 99999)]);
        $fullname = $user['name'] . " " . $user['lastname'];
        Mail::to($user['username'])->send(new confirmActive($fullname, $user['confirm_code']));

        return response()->json($user);
    }


}
