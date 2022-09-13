<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSessionsRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view('auth.signin');
    }

    public function store(StoreSessionsRequest $request)
    {
        if (!Auth::attempt($request->validated(), $request->remember)) {
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verofied'
            ]);
        }

        session()->regenerate();

        return redirect('/');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->route('signin');
    }
}
