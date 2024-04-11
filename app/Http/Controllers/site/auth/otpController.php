<?php

namespace App\Http\Controllers\site\auth;

use App\Http\Controllers\Controller;
use App\Mail\confirmActive;
use App\Mail\otp_mail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class otpController extends Controller
{
    public function otp_create(string $username){
        $user=User::where('username',decode_string($username))->first();
        $user->update(['confirm_code'=>rand(10000, 99999),'expire_confirm_at'=>Carbon::now()->addSeconds(env('EXPIRE_DATE_CONFIRM_CODE'))]);
        $fullname = $user['name'] . " " . $user['lastname'];
        Mail::to($user['username'])->send(new otp_mail($fullname, $user['confirm_code']));
        return view('site.auth.otp_create',compact('username'));
    }

    public function otp_resend(Request $request){
        $user=User::where('username',decode_string($request->username))->first();
        $user->update(['confirm_code'=>rand(10000, 99999),'expire_confirm_at'=>Carbon::now()->addSeconds(env('EXPIRE_DATE_CONFIRM_CODE'))]);
        $fullname = $user['name'] . " " . $user['lastname'];
        Mail::to($user['username'])->send(new otp_mail($fullname, $user['confirm_code']));
    }
}
