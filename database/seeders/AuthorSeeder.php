<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::truncate();

        Author::create([
            'name' => "Amy Tan",
            'thumbnail' => "AmyTan.jpeg"
        ]);

        Author::create([
            'name' => "Atul Gawande",
            'thumbnail' => "AtulGawande.jpg"
        ]);

        Author::create([
            'name' => "Danzy Senna.",
            'thumbnail' => "DanzySenna.png"
        ]);

        Author::create([
            'name' => "George R.R Martin",
            'thumbnail' => "GeorgeMartin.jpg"
        ]);

        Author::create([
            'name' => "Khaled Hosseini",
            'thumbnail' => "KhaledHosseini.jpg"
        ]);

        Author::create([
            'name' => "Leo Tolstoy",
            'thumbnail' => "LeoTolstoy.jpeg"
        ]);

        Author::create([
            'name' => "J. K. Rowling.",
            'thumbnail' => "Rowling.jpeg"
        ]);
    }
}
