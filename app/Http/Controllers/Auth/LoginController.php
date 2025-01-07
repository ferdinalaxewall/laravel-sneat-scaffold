<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Constructs the LoginController instance.
     *
     * @param  \Illuminate\Auth\AuthManager  $auth  The authentication manager instance.
     */
    public function __construct(
        protected AuthManager $auth
    ) {}

    /**
     * Renders the login view.
     */
    public function index(): \Illuminate\View\View
    {
        return view('auth.login');
    }

    /**
     * Handles the login process for a user.
     *
     * This method first validates the login request using the `LoginRequest` form request.
     * It then checks if the user with the provided email exists in the database.
     * If the user is found, it attempts to authenticate the user using the provided credentials.
     * If the authentication is successful, it regenerates the session and redirects the user to the intended dashboard.
     * If the authentication fails, it redirects the user back to the login page with an error message.
     * If any exception occurs during the process, it redirects the user back to the login page with a generic error message.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request  The login request.
     * @return \Illuminate\Http\RedirectResponse The redirect response.
     */
    public function store(LoginRequest $request): \Illuminate\Http\RedirectResponse
    {
        $requestDTO = $request->validated();

        try {
            $user = User::where('email', $requestDTO['email'])->limit(1)->first();
            if (is_null($user)) {
                return redirect(route('auth.login'))->with('toastError', 'Email Tidak Terdaftar!')->withInput();
            }

            if ($this->auth->attempt($requestDTO)) {
                request()->session()->regenerate();

                return redirect()->intended(route('example.dashboard'))->with('toastSuccess', __('auth.success_login'));
            }

            return redirect()->route('auth.login')->with('toastError', __('auth.wrong_password'))->withInput();
        } catch (\Throwable $th) {
            return redirect()->route('auth.login')->with('toastError', __('auth.failed_login'))->withInput();
        }
    }
}
