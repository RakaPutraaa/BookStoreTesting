<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;

class StoreViewController extends Controller
{
    public function show() {
        $datas = Author::with('books.reviews', 'books.categories')->get();
        return view('store', compact('datas'));
    }
}
