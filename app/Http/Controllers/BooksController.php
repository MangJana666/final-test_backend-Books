<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(Request $request)
    {
        $pageLimit = $request->input('pageLimit', 10);
        $keyword = $request->input('keyword', '');

        // if (!$pageLimit) {
        //     $pageLimit = 10;
        // }

        $books = Books::with(['author', 'category', 'rating'])
            ->where('name', 'like', "%$keyword%")
            ->orWhereHas('author', function ($query) use ($keyword) {
                $query->where('name', 'like', "%$keyword%");
            })
            ->withAvg('rating', 'rating')
            ->withCount('rating', 'rating')
            // ->orderBy('rating_count', 'desc')
            ->orderBy('rating_avg_rating', 'desc')
            ->paginate($pageLimit);

        return view('books.books', compact('books', 'pageLimit', 'keyword'));
    }
}
