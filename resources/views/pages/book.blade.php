@extends('layouts.frontLayout')
@section('content')

<div class="flex justify-between mt-4 ">
    <a href="{{ url('/books') }}" class="ml-12 ">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-12 h-12 stroke-orange-400 hover:stroke-orange-500">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
    </a>
    <div class="flex mr-12 space-x-5 ">
        <div class="mt-2 text-white">
            <img src="{{ asset('image/bookmark.svg') }}" class="w-6 h-6 text-white" alt="">
        </div>
        <img src="{{ asset('image/avatar.jpeg') }}" class="w-10 h-10 text-center rounded-full" alt="">
    </div>
</div>
<div class="container p-4 mx-auto text-center">
    <div class="grid grid-cols-2 ">
        <div>
            <img src="{{ asset('image/1.jpeg') }}" class="h-auto shadow-lg rounded-xl w-96 ml-44" alt="">
        </div>
        <div class="text-left">
            <h1 class="py-4 text-3xl text-left ">The OPPOSITE of Fate hardcover</h1>
            <p class="mt-2 text-2xl text-gray-400">AMY TAN</p>
            <p class="w-12 p-2 mt-6 text-white bg-green-500 rounded-md">Free</p>
            <button
                class="p-2 mt-12 text-xl text-orange-400 border border-orange-400 bottom-96 rounded-3xl">Subscribe</button>
        </div>
    </div>
    <div class="mt-12 columns-6 ">
        <div>
            <a href="">
                <img src="{{ asset('image/2.jpeg') }}" class="w-full h-auto shadow-lg rounded-xl" alt="">
            </a>
        </div>
        <div>
            <a href="">
                <img src="{{ asset('image/5.jpeg') }}" class="w-full h-auto shadow-lg rounded-xl " alt="">
            </a>
        </div>
        <div>
            <a href="">
                <img src="{{ asset('image/4.jpeg') }}" class="w-full h-auto shadow-lg rounded-xl " alt="">
            </a>
        </div>
        <div>
            <a href="">
                <img src="{{ asset('image/1.jpeg') }}" class="w-full h-auto shadow-lg rounded-xl " alt="">
            </a>
        </div>
        <div>
            <a href="">
                <img src="{{ asset('image/2.jpeg') }}" class="w-full h-auto shadow-lg rounded-xl " alt="">
            </a>
        </div>
        <div>
            <a href="">
                <img src="{{ asset('image/1.jpeg') }}" class="w-full h-auto shadow-lg rounded-xl " alt="">
            </a>
        </div>


    </div>
</div>
@endsection
