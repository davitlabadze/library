@extends('layouts.authLayout')
@section('auth')

<form method="POST" action="{{ route('register') }}" class="mt-10 ml-14">
    @csrf
    <div>
        <label for="name" class="block mb-1 text-2xl text-left text-white">Username</label>
        <input type="text" name="name" id="name"
            class="p-3 text-orange-400 rounded-lg outline-none w-96 placeholder:text-orange-300 "
            placeholder="Jhon Doe">
        @error('name')
        <p class="text-white">{{ $message }}</p>
        @enderror
    </div>
    <div class="mt-3">
        <label for="email" class="block mb-1 text-2xl text-left text-white">Email</label>
        <input type="email" name="email" id="email"
            class="p-3 text-orange-400 rounded-lg outline-none w-96 placeholder:text-orange-300"
            placeholder="JhonDoe@gmail.com">
        @error('email')
        <div class="text-white">{{ $message }}</div>
        @enderror
    </div>
    <div class="mt-3">
        <label for="password" class="block mb-1 text-2xl text-left text-white">Password</label>
        <input type="password" name="password" id="password"
            class="p-3 text-orange-400 rounded-lg outline-none w-96 placeholder:text-orange-300" placeholder="********">
        @error('password')
        <div class="text-white">{{ $message }}</div>
        @enderror
    </div>

    <div class="mt-3">
        <label for="password_confirmation" class="block mb-1 text-2xl text-left text-white">Repeat Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation"
            class="p-3 text-orange-400 rounded-lg outline-none w-96 placeholder:text-orange-300" placeholder="********">
        @error('password_confirmation')
        <div class="text-white">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="p-3 mt-6 bg-white rounded-lg w-96 ">
        <p class="font-black text-orange-400">Sign Up</p>
    </button>
    <div class="flex mt-3 ml-10 space-x-2">
        <p class="text-gray-100">Already have an account?</p>
        <a href="{{ url('/login') }}" class="font-bold text-white">Log In</a>
    </div>

</form>

@endsection
