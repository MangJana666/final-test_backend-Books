<?php

namespace App\Models;

use App\Models\Authors;
use App\Models\Ratings;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Books extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $fillable = [
        'name',
        'author_id',
        'category_id',
    ];

    public function author() {
        return $this->belongsTo(Authors::class, 'author_id');
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function rating() {
        return $this->hasMany(Ratings::class, 'book_id');
    }
    
}
