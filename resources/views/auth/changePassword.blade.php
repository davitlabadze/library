@extends('layouts.authLayout')
@section('auth')

<form action="#" class="mt-12 ml-14">
    <div class="">
        <label for="new_password" class="block mb-1 text-2xl text-left text-white">Password</label>
        <input type="password" name="new_password" id="new_password"
            class="p-3 text-orange-400 rounded-lg outline-none w-96 placeholder:text-orange-300" placeholder="********">
        <label for="repeat_password" class="block mt-6 mb-1 text-2xl text-left text-white">Repeat Password</label>
        <input type="password" name="repeat_password" id="repeat_password"
            class="p-3 text-orange-400 rounded-lg outline-none w-96 placeholder:text-orange-300" placeholder="********">

    </div>
    <button type="submit" class="p-3 mt-12 bg-white rounded-lg w-96 ">
        <p class="font-black text-orange-400">Save Cahnges</p>
    </button>
</form>

@endsection
