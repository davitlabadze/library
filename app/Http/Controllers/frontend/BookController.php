<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * GET Books
     *
     * @return object
     */
    public function index()
    {
        $books = Book::get();
        return view('pages.books', ['books' => $books]);
    }
}
