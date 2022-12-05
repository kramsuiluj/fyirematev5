<?php

namespace App\Http\Controllers;


use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class LogoutController extends Controller
{
    public function __invoke(): Redirector|Application|RedirectResponse
    {
        $user = auth()->user()->is_admin;

        auth()->logout();

        if (!$user) {
            activity('Logout')->log('User has logged out.');
            return redirect(route('index'));
        }

        activity('Logout')->log('Administrator has logged out.');
        return redirect(route('index'));
    }
}
