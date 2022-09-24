@extends('layouts.frontLayout')
@section('content')
<a href="{{ url('/') }}" class="absolute mt-4 ml-12">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-12 h-12 stroke-orange-400 hover:stroke-orange-500">
        <path stroke-linecap="round" stroke-linejoin="round"
            d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>
</a>
<div class="container p-4 mx-auto text-center ">
    <input type="search" placeholder="Title, author, or topics" name="search" id="search"
        class="w-1/2 p-4 mb-12 text-orange-400 border border-orange-400 outline-none placeholder:text-orange-300 rounded-3xl">
    <div class="gap-4 space-y-3 columns-6">

        @foreach($books as $book)
        <div>
            <a href="{{ route('book',['id'=>$book->id]) }}" class="w-full shadow-lg cursor-pointer rounded-2xl ">
                @if(!File::exists(public_path('storage/'.$book->thumbnail)))
                <img class="w-full shadow-lg cursor-pointer rounded-2xl "
                    src="{{ asset('image/'. $book->thumbnail ) }}" />
                @else
                <img class="w-full shadow-lg cursor-pointer rounded-2xl "
                    src="{{ asset('storage/'. $book->thumbnail ) }}" />
                @endif
            </a>
        </div>
        @endforeach
    </div>

</div>
@endsection
