<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasswordResetRequest;
use App\Http\Requests\UpdatePasswordRequest;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class PasswordResetController extends Controller
{

    public function passwordRequest()
    {
        return view('auth.forgotPassword');
    }


    public function passwordEmail(PasswordResetRequest $request)
    {

        $status = Password::sendResetLink($request->validated());

        return $status === Password::RESET_LINK_SENT
            ? redirect()->route('verify')->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    public function passwordReset($token)
    {
        $email = request()->email;
        return view('auth.changePassword', ['token' => $token, 'email' => $email]);
    }

    public function passwordUpadte(UpdatePasswordRequest $request)
    {
        $status = Password::reset(
            $request->validated(),
            function ($user, $password) {
                $user->update(['password' => $password]);

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
}
