@extends('layouts.authLayout')
@section('auth')

<form method="POST" action="{{ route('login') }}" class="mt-12 ml-14">
    @csrf
    <div class="mt-4">
        <label for="email" class="block mb-1 text-2xl text-left text-white">Email</label>
        <input type="email" name="email" id="email"
            class="p-3 text-orange-400 rounded-lg outline-none w-96 placeholder:text-orange-300"
            placeholder="JhonDoe@gmail.com">
        @error('email')
        <div class="text-white">{{ $message }}</div>
        @enderror
    </div>
    <div class="mt-4">
        <label for="password" class="block mb-1 text-2xl text-left text-white">Password</label>
        <input type="password" name="password" id="password" autocomplete
            class="p-3 text-orange-400 rounded-lg outline-none w-96 placeholder:text-orange-300" placeholder="********">
        @error('password')
        <div class="text-white">{{ $message }}</div>
        @enderror
    </div>
    <div class="flex mt-4 ">
        <div class="flex">
            <input type="checkbox" name="remember" class="w-5 h-5 mt-1 ml-2 accent-orange-400" />
            <label for="remember" class="ml-2 font-semibold text-gray-100">Remember</label>
        </div>
        <a href="{{ url('/forgot-password')}}" class="ml-32 font-semibold text-white cursor-pointer ">
            Forgot password?</a>
    </div>

    <button type="submit" class="p-3 mt-6 bg-white rounded-lg w-96 ">
        <p class="font-black text-orange-400">Log In</p>
    </button>
    <div class="flex mt-2 ml-10 space-x-2">
        <p class="text-gray-100">Don’t have and account?</p>
        <a href="{{ route('register') }}" class="font-bold text-white">Sign up for free</a>
    </div>

</form>

@endsection
