<?php

namespace App\Http\Controllers;

use App\Models\Authors;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function index() {
        $authors = Authors::withCount(['books', 'rating as total_votes' => function ($query) {
            $query->where('rating', '>', 5);
        }])
        ->orderByDesc('total_votes')
        ->paginate(10);
        return view('authors.authors', compact('authors'));
    }
}
