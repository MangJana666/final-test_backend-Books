<?php

namespace App\Models;

use App\Models\Books;
use App\Models\Authors;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ratings extends Model
{
    use HasFactory;

    protected $table = 'ratings';
    protected $fillable = [
        'rating',
        'book_id',
    ];

    public function books(){
        return $this->belongsTo(Books::class, 'book_id');
    }
}
