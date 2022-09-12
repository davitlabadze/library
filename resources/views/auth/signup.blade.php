@extends('layouts.authLayout')
@section('auth')

<form action="#" class="mt-3 ml-14">
    <div>
        <label for="username" class="block mb-1 text-2xl text-left text-white">Username</label>
        <input type="text" name="text" id="text"
            class="p-3 text-orange-400 rounded-lg outline-none w-96 placeholder:text-orange-300" placeholder="Jhon Doe">
    </div>
    <div class="mt-4">
        <label for="email" class="block mb-1 text-2xl text-left text-white">Email</label>
        <input type="email" name="email" id="email"
            class="p-3 text-orange-400 rounded-lg outline-none w-96 placeholder:text-orange-300"
            placeholder="JhonDoe@gmai.com">
    </div>
    <div class="mt-4">
        <label for="password" class="block mb-1 text-2xl text-left text-white">Password</label>
        <input type="password" name="password" id="password"
            class="p-3 text-orange-400 rounded-lg outline-none w-96 placeholder:text-orange-300" placeholder="********">
    </div>
    <div class="mt-4">
        <label for="repeat_password" class="block mb-1 text-2xl text-left text-white">Repeat Password</label>
        <input type="password" name="repeat_password" id="repeat_password"
            class="p-3 text-orange-400 rounded-lg outline-none w-96 placeholder:text-orange-300" placeholder="********">
    </div>
    <div class="mt-4">
        <label for="phone" class="block mb-1 text-2xl text-left text-white">Phone Number</label>
        <input type="tel" name="phone" id="phone"
            class="p-3 text-orange-400 rounded-lg outline-none w-96 placeholder:text-orange-300"
            placeholder="+995 555 555 555">
    </div>
    <div class="flex mt-4 ">
        <input type="checkbox" name="checkbox" class="w-5 h-5 mt-1 ml-2 accent-orange-400" />
        <label for="checkbox" class="ml-2 font-semibold text-gray-100 ">Remember this device</label>
    </div>

    <button type="submit" class="p-3 mt-3 bg-white rounded-lg w-96 ">
        <p class="font-black text-orange-400">Sign Up</p>
    </button>
    <div class="flex mt-2 ml-10 space-x-2">
        <p class="text-gray-100">Already have an account?</p>
        <a href="{{ url('/sign-in') }}" class="font-bold text-white">Sign In</a>
    </div>

</form>

@endsection
