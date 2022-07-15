<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::truncate();

        Book::create([
            'name' => "Harry Potter and the Chamber of Secrets",
            'year' => "1998",
            'status' => 0,
            'thumbnail' => "1.jpeg"
        ]);
        Book::create([
            'name' => "The opposite of fate",
            'year' => "2001",
            'status' => 0,
            'thumbnail' => "2.jpeg"
        ]);
        Book::create([
            'name' => "Goodreads Being Mortal: Medicine and What Matters in the End",
            'year' => "2014",
            'status' => 1,
            'thumbnail' => "3.jpg"
        ]);
        Book::create([
            'name' => "A Game of Thrones",
            'year' => "1996",
            'status' => 0,
            'thumbnail' => "4.jpeg"
        ]);

        Book::create([
            'name' => "Anna Karenina",
            'year' => "1878",
            'status' => 1,
            'thumbnail' => "5.jpeg"
        ]);
    }
}
