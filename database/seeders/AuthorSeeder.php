<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numAuth = random_int(3, 25);
        Author::factory()->count($numAuth)->create()->each(function ($author) {
            $numBookAuth = random_int(1, 10);
            $author->books()->saveMany(Book::factory()->count($numBookAuth)->create());
        });
    }
}
