<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    /**
     * Destroy the user's session and log them out.
     */
    public function destroySession(): \Illuminate\Http\RedirectResponse
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('auth.login')->with('toastSuccess', __('auth.logout'));
    }
}
