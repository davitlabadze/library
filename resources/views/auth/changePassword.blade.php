@extends('layouts.authLayout')
@section('auth')

<form action="{{ route('password.update') }}" method="POST" class="mt-12 ml-14">
    @csrf
    <div class="">
        <input type="hidden" name="token" value="{{ $token }}" />
        <input type="hidden" name="email" value="{{ $email }}" />
        <label for="password" class="block mb-1 text-2xl text-left text-white">Password</label>
        <input type="password" name="password" id="password" autocomplete
            class="p-3 text-orange-400 rounded-lg outline-none w-96 placeholder:text-orange-300" placeholder="********">
        @error('password')
        <div class="text-white">{{ $message }}</div>
        @enderror
        <label for="password_confirmation" class="block mt-6 mb-1 text-2xl text-left text-white">Repeat Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" autocomplete
            class="p-3 text-orange-400 rounded-lg outline-none w-96 placeholder:text-orange-300" placeholder="********">
        @error('password_confirmation')
        <div class="text-white">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="p-3 mt-12 bg-white rounded-lg w-96 ">
        <p class="font-black text-orange-400">Save Cahnges</p>
    </button>
</form>

@endsection
