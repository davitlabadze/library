@extends('layouts.frontLayout')
@section('content')


<div class="flex justify-between mt-4 ">
    <a href="{{ route('books') }}" class="ml-12 ">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-12 h-12 stroke-orange-400 hover:stroke-orange-500">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
    </a>
    <div class="flex mr-20 space-x-2" x-data="{ open: false }">
        <div class="mt-2 text-white">
            <img src="{{ asset('image/bookmark.svg') }}" class="w-6 h-6 text-white" alt="">
        </div>
        <img @click="open = !open" src="{{ asset('image/avatar.jpg') }}"
            class="w-10 h-10 text-center rounded-full cursor-pointer" alt="avatar">

        <span class="absolute items-center p-3 mt-12 text-sm font-medium text-center bg-white rounded-xl" x-show="open">
            @can('admin')
            <a href="{{ route('dashboard') }}"
                class="block w-full px-4 py-2 text-sm leading-5 text-orange-400 transition duration-150 ease-in-out bg-white hover:bg-orange-400 hover:text-white ">Dashboard</a>
            @endcan
            <a href="{{ route('profile') }}"
                class="block w-full px-4 py-2 text-sm leading-5 text-orange-400 transition duration-150 ease-in-out bg-white hover:bg-orange-400 hover:text-white ">Profile</a>
            <button x-date="{}" @click.prevent="document.querySelector('#signout-form').submit()"
                class="block w-full px-4 py-2 text-sm leading-5 text-orange-400 transition duration-150 ease-in-out bg-white hover:bg-orange-400 hover:text-white">
                Log Out </button>
            <form id="signout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>
        </span>
    </div>
</div>
<div class="container p-4 mx-auto text-center">
    <div class="grid grid-cols-2 ">
        @foreach($book as $book)
        <div>
            <img src="{{ asset('storage/'. $book->thumbnail) }}" class="h-auto shadow-lg rounded-xl w-96 ml-44" alt="">
        </div>
        <div class="text-left">
            <h1 class="py-4 text-3xl text-left ">{{ $book->name }}</h1>
            @foreach($book->authors as $author)
            <p class="mt-2 text-2xl text-gray-400">{{ $author->name }}</p>
            @endforeach
            @if($book->status === 0)
            <p class="w-12 p-2 mt-6 text-white bg-green-500 rounded-md">Free</p>
            <button class="p-2 mt-12 text-xl text-orange-400 border border-orange-400 bottom-96 rounded-3xl">
                Subscribe
            </button>
            @else
            <p class="w-12 p-2 mt-6 text-white bg-red-500 rounded-md">Busy</p>

            <button class="p-2 mt-12 text-xl text-orange-400 border border-orange-400 bottom-96 rounded-3xl">
                BookMark
            </button>
            @endif
        </div>
        @endforeach
    </div>
    <div class="mt-12 columns-6 ">
        @foreach($suggestedbooks as $suggestedbook)
        <div>
            <a href="0">
                <img src="{{ asset('storage/'. $suggestedbook->thumbnail) }}" class="w-full h-auto shadow-lg rounded-xl"
                    alt="book">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
