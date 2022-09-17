<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Welcome
     *
     * @return object
     */

    public function index(): object
    {
        $Books = Book::inRandomOrder()->with('authors');
        $RandomBook = $Books->limit(1)->get();
        $Bestsellers = $Books->latest()->take(3)->get();


        $test = 0;
        foreach ($RandomBook as $key) {
            $test = count($key->authors);
        }




        return view('pages.welcome', ['randombook' => $RandomBook, 'bestsellers' => $Bestsellers, 'test' => $test]);
    }
}
