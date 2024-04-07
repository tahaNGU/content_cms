<?php

namespace App\Http\Controllers\site\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\site\RegisterUser;
use App\Mail\confirmActive;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;
use Illuminate\View\View;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('site.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(RegisterUser $request): RedirectResponse
    {
        $user = User::where('username', $request->username)->first(['state','username','confirm_code','lastname','name']);
        if (!is_null($user)) {
            if ($user["state"] == "1") {
                return redirect()->route('auth.login')->with(['user_login' => trans('auth.user_login')]);
            }
            $fullname = $user['name'] . " " . $user['lastname'];
            Mail::to($user['username'])->send(new confirmActive($fullname, $user['confirm_code']));
            return redirect()->route('auth.active', ['username' => code_string($user['username'])])->with(['state_active' => trans('auth.state_active')]);
        }
        $code = rand(10000, 99999);
        User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'confirm_code' => $code,
        ]);
        $fullname = $request->name . " " . $request->lastname;
        Mail::to($request->username)->send(new confirmActive($fullname, $code));
        return redirect()->route('auth.active', ['username' => code_string($request->username)]);
    }

}
