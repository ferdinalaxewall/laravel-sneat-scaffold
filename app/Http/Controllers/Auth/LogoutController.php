<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    /**
     * Destroy the user's session and log them out.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroySession(): \Illuminate\Http\RedirectResponse
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        
        return redirect()->route('auth.login')->with('toastSuccess', __('auth.logout'));
    }
}
