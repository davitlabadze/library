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
            <div class="flex space-x-5">
                <div class="mt-2 text-white">
                    <img src="{{ asset('image/bookmark.svg') }}" class="w-6 h-6 text-white" alt="">
                </div>
                <img src="{{ asset('image/avatar.jpeg') }}" class="w-10 h-10 rounded-full" alt="">
            </div>
        </nav>
    </div>
    <div class="container grid grid-cols-3 mx-auto mt-12 text-center rounded-top-lg bg-orange-50">
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
            <div class="w-56 p-4 bg-orange-300 h-96 rounded-2xl">
                <h1>Leo Tolstoy</h1>
                <h1>Collection</h1>
                <p class="mt-2 text-stone-600">67 book</p>
                <img src="{{ asset('image/LeoTolstoy.jpeg') }}" class=" mt-11" alt="">
            </div>

        </div>

    </div>
    <div class="bg-orange-200  ml-20 h-12 w-11/12

    border-l-[110px] border-l-orange-100
    border-b-[50px] border-b-transparent
    border-r-[110px] border-r-orange-100
    "></div>

    {{-- <div class="mx-auto abslute"> --}}
        {{-- <div class="w-full h-24 bg-red-500

        border-b-[150px] border-b-transparent
        border-l-[100px] border-l-orange-50
        border-r-[100px] border-r-orange-50"></div> --}}
        {{-- </div> --}}
    <div class="w-11/12 h-4 ml-20 bg-white rounded "></div>

</body>

</html>
