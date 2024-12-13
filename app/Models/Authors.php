<?php

namespace App\Models;

use App\Models\Books;
use App\Models\Ratings;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Authors extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];


    public function books() {
        return $this->hasMany(Books::class, 'author_id');
    }

    public function totalVotes() {
        return $this->rating()->sum('total_votes');
    }

    public function rating() {
        return $this->hasManyThrough(Ratings::class, Books::class, 'author_id', 'book_id', 'id', 'id');
    }
}
