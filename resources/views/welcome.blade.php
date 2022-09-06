<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
    @vite('resources/css/app.css')

    <title>Library</title>
</head>

<body class="bg-orange-100">
    <div class="mt-12">
        <nav class="flex justify-between px-24">
            <h1 class="text-3xl font-black">E-Library</h1>
            @auth
            <div class="flex space-x-5">
                <div class="mt-2 text-white">
                    <img src="{{ asset('image/bookmark.svg') }}" class="w-6 h-6 text-white" alt="">
                </div>
                <img src="{{ asset('image/avatar.jpeg') }}" class="w-10 h-10 text-center rounded-full" alt="">
            </div>
            @endauth
            @guest
            <div>
                <button
                    class="p-3 text-orange-500 border border-orange-500 rounded-3xl hover:text-white hover:bg-orange-500">Authorization</button>
            </div>
            @endguest
        </nav>
    </div>
    <div class="container grid grid-cols-3 mx-auto mt-12 text-center rounded-t-3xl bg-orange-50">
        <div class="mt-40">
            <h1 class="text-7xl">New & Trending</h1>
            <p class="mt-4 text-gray-400">Explorer new worlds from authors</p>
            <input type="search" name="search" id="search" placeholder="Title, author, or topics"
                class="p-4 px-12 mt-6 bg-no-repeat shadow-md outline-none bg-left-1 bg-search rounded-3xl" />
        </div>
        <div>
            <img src="{{ asset('image/5.jpeg') }}"
                class="translate-y-10 ml-20 w-96 mt-12 shadow-[20px_0px_20px_rgba(0,0,0,0.3)]" alt="">
        </div>
        <div class="p-36">
            <div class="w-56 p-4 bg-orange-300 shadow-xl h-96 rounded-2xl">
                <h1>Leo Tolstoy</h1>
                <h1>Collection</h1>
                <p class="mt-2 text-stone-600">67 book</p>
                <img src="{{ asset('image/LeoTolstoy.jpeg') }}" class=" mt-11" alt="">
            </div>

        </div>

    </div>
    <div class="bg-stone-200  ml-20 h-12 w-11/12
    border-l-[110px] border-l-orange-100
    border-b-[50px] border-b-transparent
    border-r-[110px] border-r-orange-100
    "></div>
    <div class="z-50 w-11/12 h-4 ml-20 bg-white rounded "></div>

    <div class="container mx-auto mb-12 bg-orange-50 rounded-b-3xl">
        <div class="w-full h-12 opacity-90 -z-20 bg-gradient-to-b from-gray-400 blur-sm"></div>

        <div class="grid grid-cols-3 mt-12 mb-12 text-center ">

            <div class="grid grid-cols-2 mb-12 ">
                <img src="{{ asset('image/4.jpeg') }}" class="h-auto ml-28 w-36 " alt="image">
                <div>
                    <h1>A Game of THRONES</h1>
                    <p class="mt-2 text-gray-400">GEORGE R.R MARTIN</p>
                    <p class="w-16 mt-2 ml-24 text-white bg-green-500 rounded-md">Free</p>
                    <button
                        class="p-2 mt-12 text-xl text-orange-400 border border-orange-400 rounded-3xl">Subscribe</button>
                </div>
            </div>
            <div class="grid grid-cols-2 mb-12 ">
                <img src="{{ asset('image/1.jpeg') }}" class="h-auto ml-28 w-36 " alt="image">
                <div>
                    <h1>Harry Potter: and the Chamber of secrets</h1>
                    <p class="mt-2 text-gray-400">J.K ROWLING</p>
                    <p class="w-16 mt-2 ml-24 text-white bg-red-500 rounded-md">Busy</p>
                    <button
                        class="p-2 mt-12 text-xl text-orange-400 border border-orange-400 rounded-3xl">Bookmark</button>
                </div>
            </div>
            <div class="grid grid-cols-2 mb-12 ">
                <img src="{{ asset('image/2.jpeg') }}" class="h-auto ml-28 w-36 " alt="image">
                <div>
                    <h1>The OPPOSITE of Fate hardcover</h1>
                    <p class="mt-2 text-gray-400">AMY TAN</p>
                    <p class="w-16 mt-2 ml-24 text-white bg-green-500 rounded-md">Free</p>
                    <button
                        class="p-2 mt-12 text-xl text-orange-400 border border-orange-400 rounded-3xl">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
