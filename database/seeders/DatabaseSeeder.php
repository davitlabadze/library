<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AuthorSeeder::class);
        $this->call(BookSeeder::class);

        DB::table('author_book')->insert([
            ['author_id' => 7, 'book_id' => 1],
            ['author_id' => 2, 'book_id' => 2],
            ['author_id' => 2, 'book_id' => 3],
            ['author_id' => 5, 'book_id' => 4],
            ['author_id' => 6, 'book_id' => 5],
        ]);
    }
}
