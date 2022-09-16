@extends('layouts.frontLayout')
@section('content')
<div class="container mx-auto bg-orange-50 rounded-2xl">
    <div class="flex mt-20 ml-56 space-x-2 px-96">
        <img class="w-40 h-40 border-2 border-orange-400 rounded-full shadow-sm" src="{{ asset('image/avatar.jpg') }}"
            alt="user image" />
        <div>
            <h1 class="mt-6 ml-12 text-2xl">Deborah Guthrie</h1>
            <button
                class="p-2 mt-6 ml-12 text-orange-400 duration-300 bg-white rounded-xl hover:text-white hover:bg-orange-400">
                Go Library
            </button>
            <button
                class="p-2 mt-6 ml-6 text-orange-400 duration-300 bg-white rounded-xl hover:text-white hover:bg-orange-400">Log
                Out</button>
        </div>
    </div>
    <h1 class="mt-12 text-2xl text-center">My subscribed books</h1>
    <div class="grid grid-cols-3 mx-auto mt-12 mb-12 text-center bg-orange-50 rounded-b-3xl">

        <div class="grid grid-cols-2 mb-12 ">
            <img src="{{ asset('image/4.jpeg') }}" class="h-auto ml-28 w-36 " alt="image">
            <div class="relative">
                <h1>A Game of THRONES</h1>
                <p class="mt-2 text-gray-400">GEORGE R.R MARTIN</p>
                <p class="w-16 mt-2 ml-24 text-white bg-green-500 rounded-md">Free</p>
                <button
                    class="absolute p-2 text-xl text-orange-400 border border-orange-400 left-20 bottom-2 rounded-3xl">Subscribe</button>
            </div>
        </div>
        <div class="grid grid-cols-2 mb-12 ">
            <img src="{{ asset('image/1.jpeg') }}" class="h-auto ml-28 w-36 " alt="image">
            <div class="relative">
                <h1>Harry Potter: and the Chamber of secrets</h1>
                <p class="mt-2 text-gray-400">J.K ROWLING</p>
                <p class="w-16 mt-2 ml-24 text-white bg-red-500 rounded-md">Busy</p>
                <button
                    class="absolute p-2 text-xl text-orange-400 border border-orange-400 left-20 bottom-2 rounded-3xl">Bookmark</button>
            </div>
        </div>
        <div class="grid grid-cols-2 mb-12">
            <img src="{{ asset('image/2.jpeg') }}" class="h-auto ml-28 w-36 " alt="image">
            <div class="relative">
                <h1>The OPPOSITE of Fate hardcover</h1>
                <p class="mt-2 text-gray-400">AMY TAN</p>
                <p class="w-16 mt-2 ml-24 text-white bg-green-500 rounded-md">Free</p>
                <button
                    class="absolute p-2 text-xl text-orange-400 border border-orange-400 left-20 bottom-2 rounded-3xl">Subscribe</button>
            </div>
        </div>
    </div>
</div>



@endsection
