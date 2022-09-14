@extends('layouts.authLayout')
@section('auth')

<form action="{{ route('password.email') }}" method="POST" class="mt-12 ml-14">
    @csrf
    <div class="">
        <label for="email" class="block mb-1 text-2xl text-left text-white">Email</label>
        <input type="email" name="email" id="email"
            class="p-3 text-orange-400 rounded-lg outline-none w-96 placeholder:text-orange-300"
            placeholder="JhonDoe@gmai.com">
    </div>
    <button type="submit" class="p-3 mt-6 bg-white rounded-lg w-96 ">
        <p class="font-black text-orange-400">Reset Password</p>
    </button>
</form>

@endsection
