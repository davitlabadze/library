<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.signup');
    }

    public function store(StoreRegisterRequest $request)
    {
        $user = User::create($request->validated());

        auth()->login($user);

        return redirect('/');
    }
}
