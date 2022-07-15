@extends('layouts.adminPanelLayout')
@section('content')
<div class="grid grid-cols-1 gap-4 sm:grid-cols-4">
    <div class="relative flex items-center px-6 py-5 space-x-3 bg-red-500 border rounded-lg shadow-sm hover:bg-red-600">
      <div class="flex-shrink-0">
        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 mr-3 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
          </svg>
      </div>
      <div class="flex-1 min-w-0">
        <a href="{{ route('authors.index') }}" class="focus:outline-none">
          <p class="text-sm font-medium text-white">
            All Authors
          </p>
          <p class="text-sm text-white truncate">
              total: {{  $authorCount }}
          </p>
        </a>
      </div>
    </div>
    <div class="relative flex items-center px-6 py-5 space-x-3 bg-blue-500 border rounded-lg shadow-sm hover:bg-blue-600">
        <div class="flex-shrink-0">
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 mr-3 text-white " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
        </div>
        <div class="flex-1 min-w-0">
          <a href="{{ route('books.index') }}" class="focus:outline-none">
            <p class="text-sm font-medium text-white">
              All Books
            </p>
            <p class="text-sm text-white truncate">
                total:{{ $bookCount }}
            </p>
          </a>
        </div>
    </div>
</div>
<div class="flex py-3 mt-10 ">
    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 mr-3 text-black "fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
    </svg>Recent Books
</div>
<table class="min-w-full divide-y divide-gray-200 ">
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
        </tr>
    </thead>
    <tbody class="flex flex-col items-center w-full overflow-x-hidden overflow-y-scroll text-center bg-white dark:bg-slate-800 rounded-b-md h-96">
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
                        <img src="{{ asset('image/' . $book->thumbnail) }}" width="64" height="64" alt="book image" class="ml-20 rounded-xl">
                    @else
                        <img src="{{ asset('storage/' . $book->thumbnail) }}" width="64" height="64" alt="book image" class="ml-20 rounded-xl">
                    @endif
                </td>

            </tr>
        @endforeach
    </tbody>
    </table>
</table>

@endsection
