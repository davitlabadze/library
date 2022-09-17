<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $Books = Book::inRandomOrder()->with('authors');
        $RandomBook = $Books->limit(1)->get();
        $Bestsellers = $Books->latest()->take(3)->get();
        $test = [];
        foreach ($RandomBook as $RandomBook) {
            $test = array_push($RandomBook->authors);
        }
        // $countRandomBook = count($RandomBook);
        // dd($countRandomBook);
        // $randomBook = $book->;
        // $bestsellers = $book->latest()->take(3)->get();
        return view('pages.welcome', ['randombook' => $RandomBook, 'bestsellers' => $Bestsellers, 'test' => $test]);
        // return view('pages.welcome', ['bestsellers' => $Bestsellers]);
        // return view('pages.welcome', ['randomBook' => $randomBook]);
    }
}
