<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::factory()->count(100)->create()->each(function ($book) {
            $numBookReviews = random_int(1, 50);
            $book->reviews()->saveMany(Review::factory()->count($numBookReviews)->create());
            $book->categories()->associate(Category::factory()->create());
        });
    }
}
