<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
        $requestDTO = $request->validated();
        
        try {
            $user = User::where('email', $requestDTO['email'])->limit(1)->first();
            if (is_null($user)) return redirect(route('auth.login'))->with('toastError', 'Email Tidak Terdaftar!')->withInput();

            if (Auth::attempt($requestDTO)) {
                request()->session()->regenerate();
                return redirect()->intended(route('example.dashboard'))->with('toastSuccess', __('auth.success_login'));
            }

            return redirect()->route('auth.login')->with('toastError', __('auth.wrong_password'))->withInput();
        } catch (\Throwable $th) {
            return redirect()->route('auth.login')->with('toastError', __('auth.failed_login'))->withInput();
        }
    }
}
