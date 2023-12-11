<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function reviews() {
        return $this->hasMany(Review::class);
    }
    public function author() {
        return $this->belongsTo(Author::class);
    }
    public function categories() {
        return $this->belongsTo(Category::class);
    }
}
