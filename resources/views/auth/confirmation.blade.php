@extends('layouts.authLayout')
@section('auth')

<div class="mt-44 ml-14">
    <div>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-20 h-20 p-4 text-orange-400 bg-white rounded-full ml-36">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
        </svg>
    </div>
    <p class="mt-10 ml-12 font-black text-white">We have sent you a confirmation email</p>
    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit" class="p-2 mt-6 text-orange-500 bg-white rounded-lg w-96">
            Resend Comfimration
        </button>
    </form>

</div>

@endsection
