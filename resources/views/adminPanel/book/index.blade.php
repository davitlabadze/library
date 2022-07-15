@extends('layouts.adminPanelLayout')
@section('content')
<div class="flex p-2 mb-10 -mt-12">
    <p class="flex p-2"><svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
    </svg>All books</p>
    <button class="flex p-2 text-white bg-green-500 hover:bg-green-600 rounded-xl">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
          </svg> <a href="{{ route('books.create') }}">Add Book</a>
    </button>
</div>
<div class="mb-4 ml-48">
    <form action="">
        <tr>
            <th><input  type="text" name="name" value="{{ request('name') }}" placeholder="Enter Book Name" class="px-3 py-2 mt-1 bg-white border rounded-md shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 sm:text-sm focus:ring-1"></th>
            <th><input  type="text" name="year" value="{{ request('year') }}" placeholder="Enter Year" class="px-3 py-2 mt-1 bg-white border rounded-md shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 sm:text-sm focus:ring-1"></th>
            <th><input  type="text" name="author" value="{{ request('author') }}" placeholder="Enter Author" class="px-3 py-2 mt-1 bg-white border rounded-md shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 sm:text-sm focus:ring-1"></th>
            <th><input  type="text" name="status" value="{{ request('status') }}" placeholder="Enter Status(free or busy)" class="px-3 py-2 mt-1 bg-white border rounded-md shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 sm:text-sm focus:ring-1"></th>
            <th><button class="p-2 text-white bg-blue-500 border rounded hover:bg-blue-600">Filter</button></th>
            <th colspan = "2"><a href="{{ route('books.index') }}" type="reset" class="p-2 text-white bg-red-500 border rounded hover:bg-red-600">Clear</a></th>
        </tr>
    </form>
</div>
<table class="min-w-full divide-y divide-gray-200">
<thead class="bg-gray-50">
    <tr class='flex w-full mb-2'>
        <th class="w-1/4 p-2 text-xs text-gray-500 uppercase dark:text-slate-600">
            Id
        </th>
        <th class="w-1/4 p-2 text-xs text-gray-500 uppercase dark:text-slate-600">
            Name
        </th>
        <th class="w-1/4 p-2 text-xs text-gray-500 uppercase dark:text-slate-600">
            Year
        </th>
        <th class="w-1/4 p-2 text-xs text-gray-500 uppercase dark:text-slate-600">
            Author
        </th>
        <th class="w-1/4 p-2 text-xs text-gray-500 uppercase dark:text-slate-600">
            Status
        </th>
        <th class="w-1/4 p-2 text-xs text-gray-500 uppercase dark:text-slate-600">
            Image
        </th>
        <th class="w-1/4 p-2 text-xs text-gray-500 uppercase dark:text-slate-600">
            <span class="">Action</span>
        </th>
    </tr>
</thead>
<tbody class="flex flex-col items-center justify-center w-full overflow-x-hidden overflow-y-scroll text-center bg-white dark:bg-slate-800 rounded-b-md h-96">
    @foreach($books as $book)
        <tr class='flex w-full bg-white dark:bg-slate-800'>
            <td class='w-1/4 p-4 px-6 text-gray-500 dark:text-slate-600'>
                {{ $book->id }}
            </td>
            <td class='w-1/4 p-4 px-6 text-gray-500 dark:text-slate-600'>
                {{ $book->name }}
            </td>
            <td class='w-1/4 p-4 px-6 text-gray-500 dark:text-slate-600'>
                {{ $book->year }}
            </td>
            <td class='w-1/4 p-4 px-6 text-gray-500 dark:text-slate-600'>
                @foreach ($book->authors as $authors)
                    <span class="p-1 text-white border rounded bg-sky-500">{{ $authors->name }}</span>
                @endforeach
            </td>
            <td class='w-1/4 p-4 px-6 text-gray-500 dark:text-slate-600'>
                @if($book->status == 0)
                    <span class="p-1 text-white bg-green-400 rounded ">Free</span>
                @else
                    <span class="p-1 text-white bg-red-400 rounded ">Busy</span>
                @endif


            </td>
            <td class='w-1/4 p-4 px-6 text-gray-500 dark:text-slate-600'>
                @if(!File::exists(public_path('storage/'.$book->thumbnail)))
                    <img src="{{ asset('image/' . $book->thumbnail) }}" width="64" height="64" alt="book image" class="ml-16 rounded-xl">
                @else
                    <img src="{{ asset('storage/' . $book->thumbnail) }}" width="64" height="64" alt="book image" class="ml-16 rounded-xl">
                @endif
            </td>
            <td class='flex items-center justify-center w-1/4 p-4 px-6 text-center'>
                <form action="{{ route('books.edit',['book'=>$book->id])}}">
                    <button class="ml-2"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-slate-300 hover:text-blue-600 dark:text-slate-700 hover:dark:text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                    </svg></button>
                </form>
                <form action = "{{ route('books.destroy', ['book' => $book->id]) }}" method = "POST">
                    @csrf
                    @method('DELETE')
                    <button class="ml-2"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-slate-300 hover:text-red-600 dark:text-slate-700 hover:dark:text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg></button>
                </form>
            </td>
        </tr>
    @endforeach
</tbody>
</table>
@endsection
