<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * @throws ValidationException
     */
    public function __invoke(): Redirector|Application|RedirectResponse
    {
        $credentials = request()->validate([
            'username' => ['required', 'min:4', 'alpha_num', Rule::exists('users', 'username')],
            'password' => ['required', Password::min(8)]
        ]);

        if (!auth()->attempt($credentials, request('remember'))) {
            throw ValidationException::withMessages([
                'username' => "Username or Password you entered must've been incorrect."
            ]);
        }

        session()->regenerate();

        if (!auth()->user()->is_admin) {
            activity('Login')->log('User has logged in.');
            return redirect(route('users.dashboard'))->with('success', 'Welcome ' . ucwords(auth()->user()->firstname) . ' !');
        }

        activity('Login')->log('Administrator has logged in.');
        return redirect(route('administrators.dashboard'))->with('success', 'Welcome ' . ucwords(auth()->user()->firstname) . ' !');
    }
}
