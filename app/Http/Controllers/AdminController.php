<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $authorCount = Author::count();
        $bookCount = Book::count();
        $books = Book::with('authors')->orderBy('id', 'desc')->get();
        return view('adminPanel.dashboard', ['books' => $books, 'bookCount' => $bookCount, 'authorCount' => $authorCount]);
    }
}
