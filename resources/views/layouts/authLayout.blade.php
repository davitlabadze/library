@extends('layouts.frontLayout')
@section('content')

<div class="p-12">
    <a href="{{ url('/') }}" class="">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-12 h-12 stroke-orange-400 hover:stroke-orange-500">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
    </a>
</div>
<div class="container flex h-full mx-auto bg-orange-400 rounded-lg shadow-xl shadow-orange-500">

    <div class="w-1/2">
        @yield('auth')
    </div>
    <div class="w-full">
        <img src="{{ asset('image/bks.jpg') }}" class="object-none w-full h-full rounded-r-xl" alt="">
    </div>
</div>
@endsection
