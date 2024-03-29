<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $books = Book::with('authors')->orderBy('id', 'ASC');

        if ($request->name) {
            $books->where('name', 'LIKE', '%' . $request->name . '%');
        }
        if ($request->year) {
            $books->where('year', 'LIKE', '%' . $request->year . '%');
        }
        if ($request->author) {
            $books->whereRelation('authors', 'name', 'LIKE', '%' . $request->author . '%');
        }
        if ($request->status) {
            if ($request->status == "free" || $request->status == "Free" || $request->status == "FREE") {
                $books->where('stock', '>', 0);
            }
            if ($request->status == "busy" || $request->status == "Busy" || $request->status == "BUSY") {
                $books->where('stock', '=', 0);
            }
        }
        $books = $books->get();


        return view('adminPanel.book.index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = Author::all();
        return view('adminPanel.book.add', ['authors' => $authors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name'      => 'required',
            'year'      => 'required|digits:4|integer',
            'thumbnail' => 'required',
            'stock'     => 'required|min:0'
        ]);
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        $book = Book::create($attributes);

        $authors = $request->authors;

        if ($authors) {
            foreach ($authors as $author) {
                $book->authors()->attach($author);
            }
        }

        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $authors = Author::all();
        $book = Book::find($id);
        return view('adminPanel.book.update', ['authors' => $authors, 'book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $attributes = $request->validate([
            'name'      => 'required',
            'year'      => 'required',
            'thumbnail' => 'required',
        ]);
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        $book = Book::findOrFail($id);
        $book->update($attributes);

        $authors = $request->authors;

        if ($authors) {
            $book->authors()->detach();

            foreach ($authors as $author) {
                $book->authors()->attach($author);
            }
        }
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->authors()->detach();
        $book->delete();
        return redirect()->route('books.index');
    }
}
