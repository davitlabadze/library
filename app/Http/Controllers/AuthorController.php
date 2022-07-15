<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthorRequest;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $authors = Author::where('name', 'LIKE', '%' . $request->name . '%')->orderBy('id', 'ASC')->get();

        return view('adminPanel.author.index', ['authors' => $authors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPanel.author.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAuthorRequest $attributes)
    {
        $attributes = $attributes->validated();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        Author::create($attributes);
        return redirect()->route('authors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $authorToEdit = Author::where('id', $id)->firstOrfail();
        return view('adminPanel.author.update', ['author' => $authorToEdit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAuthorRequest $attributes, $id)
    {
        $attributes = $attributes->validated();
        if (isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }
        Author::where('id', $id)->update($attributes);

        return redirect()->route('authors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Author = Author::findOrFail($id);
        $Author->books()->detach();
        $Author->delete();
        return redirect()->route('authors.index');
    }
}
