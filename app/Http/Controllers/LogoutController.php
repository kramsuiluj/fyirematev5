<?php

namespace App\Http\Controllers;


use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class LogoutController extends Controller
{
    public function __invoke(): Redirector|Application|RedirectResponse
    {
        $user = auth()->user();

        auth()->logout();

        if (!$user->is_admin) {
            activity('Logout')->causedBy($user)->log('User has logged out.');
            return redirect(route('index'));
        }

        activity('Logout')->causedBy($user)->log('Administrator has logged out.');
        return redirect(route('index'));
    }
}
