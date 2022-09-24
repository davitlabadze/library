@extends('layouts.frontLayout')
@section('content')
<div class="mt-12">
    <nav class="flex justify-between px-24">
        <h1 class="text-3xl font-black">E-Library</h1>
        @auth
        <div class="flex space-x-5" x-data="{ open: false }">
            <div class="mt-2 text-white">
                <img src="{{ asset('image/bookmark.svg') }}" class="w-6 h-6 text-white" alt="">
            </div>
            <img @click="open = !open" src="{{ asset('image/avatar.jpg') }}"
                class="w-10 h-10 text-center rounded-full cursor-pointer" alt="avatar">

            <span class="absolute items-center p-3 mt-12 text-sm font-medium text-center bg-white rounded-xl"
                x-show="open">
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

        @endauth
        @guest
        <div>
            <a href="{{ route('login') }}"
                class="p-3 text-orange-500 border border-orange-500 rounded-3xl hover:text-white hover:bg-orange-500">
                Log In
            </a>
        </div>
        @endguest
    </nav>
</div>


<div class="container mx-auto mt-10 text-center rounded-t-3xl bg-orange-50">
    <div class="flex justify-center text-center ">
        <button class="flex px-10 py-3 mt-6 border border-orange-400 border-1 hover:bg-orange-400 rounded-3xl">
            <img src="{{ asset('image/book.png') }}" class="w-6 h-6" alt="">
            <a href="{{ url('/books') }}" class="ml-2">Books</a>
        </button>
    </div>
    <div class="grid grid-cols-3">
        <div class="mt-40">
            <h1 class="text-7xl">New & Trending</h1>
            <p class="mt-4 text-gray-400">Explorer new worlds from authors</p>
            <input type="search" name="search" id="search" placeholder="Title, author, or topics"
                class="p-4 px-12 mt-6 bg-no-repeat shadow-md outline-none bg-left-1 bg-search rounded-3xl" />
        </div>
        @foreach($randombook as $randombook )

        <div>
            @if(!File::exists(public_path('storage/'.$randombook->thumbnail)))
            <img src="{{ asset('image/'.$randombook->thumbnail) }}"
                class="translate-y-10 ml-20 w-96 mt-12 shadow-[20px_0px_20px_rgba(0,0,0,0.3)]" alt="">
            @else
            <img src="{{ asset('storage/'.$randombook->thumbnail) }}"
                class="translate-y-10 ml-20 w-96 mt-12 shadow-[20px_0px_20px_rgba(0,0,0,0.3)]" alt="">
            @endif
        </div>
        @if($test > 1)
        <div class="py-36">
            <div class="grid grid-cols-4">
                @foreach ($randombook->authors as $authors)
                <div class="w-56 p-4 bg-orange-300 shadow-xl h-96 rounded-2xl hover:z-10">
                    <div>
                        <h1>
                            {{ $authors->name }}
                        </h1>
                        @if(!File::exists(public_path('storage/'.$authors->thumbnail)))
                        <img src="{{ asset('image/'.$authors->thumbnail) }}" class="mt-6" alt="">
                        @else
                        <img src="{{ asset('storage/'.$authors->thumbnail) }}" class="mt-6" alt="">
                        @endif
                    </div>

                </div>
                @endforeach
            </div>

        </div>
        @else
        @foreach ($randombook->authors as $key => $authors)
        <div class="p-36">
            <div class="w-56 p-4 bg-orange-300 shadow-xl h-96 rounded-2xl">
                <div>
                    <h1>
                        {{ $authors->name }}
                    </h1>
                    @if(!File::exists(public_path('storage/'.$authors->thumbnail)))
                    <img src="{{ asset('image/'.$authors->thumbnail) }}" class="mt-6" alt="">
                    @else
                    <img src="{{ asset('storage/'.$authors->thumbnail) }}" class="mt-6" alt="">
                    @endif
                </div>
            </div>
        </div>
        @endforeach
        @endif

        @endforeach
    </div>

</div>
<div class="bg-stone-200  ml-20 h-12 w-11/12
    border-l-[110px] border-l-orange-100
    border-b-[50px] border-b-transparent
    border-r-[110px] border-r-orange-100
    "></div>
<div class="z-50 w-11/12 h-4 ml-20 bg-white rounded"></div>
<div class="container mx-auto mb-12 bg-orange-50 rounded-b-3xl">

    <div class="w-full h-12 opacity-90 -z-20 bg-gradient-to-b from-gray-400 blur-sm"></div>

    <div class="absolute flex text-xl -rotate-90 mt-36">Recent Bestsellers</div>
    <div class="grid grid-cols-3 mt-12 mb-12 text-center ">

        @foreach ($bestsellers as $bestseller)
        <div class="grid grid-cols-2 mb-12 ">
            @if(!File::exists(public_path('storage/'.$bestseller->thumbnail)))
            <img src="{{ asset('image/'.$bestseller->thumbnail) }}" class="h-auto ml-28 w-36" alt="image">

            @else
            <img src="{{ asset('storage/'.$bestseller->thumbnail) }}" class="h-auto ml-28 w-36" alt="image">
            @endif
            <div class="relative">
                <h1> {{ $bestseller->name }}</h1>
                <p class="mt-2 text-gray-400">
                    @foreach ($bestseller->authors as $authors)
                    {{ $authors->name }}
                    @endforeach
                </p>
                @if($bestseller->stock > 0)
                <p class="w-16 mt-2 ml-24 text-white bg-green-500 rounded-md">Free</p>
                @else
                <p class="w-16 mt-2 ml-24 text-white bg-red-500 rounded-md">Busy</p>
                @endif
                <button
                    class="absolute p-2 text-xl text-orange-400 border border-orange-400 left-20 bottom-2 rounded-3xl">Subscribe</button>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
