@extends('layouts.frontLayout')
@section('content')

<div class="container flex h-full mx-auto mt-24 bg-orange-400 rounded-lg shadow-xl shadow-orange-500">

    <div class="w-1/2">
        @yield('auth')
    </div>
    <div class="w-full">
        <img src="{{ asset('image/bks.jpg') }}" class="object-none w-full h-full rounded-r-xl" alt="">
    </div>
</div>
@endsection
