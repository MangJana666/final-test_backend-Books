<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Authors;
use App\Models\Ratings;
use Illuminate\Http\Request;

class RatingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(Request $request)
    {
        $authors = Authors::orderBy('name')->get();
        $getAuthor = $request->input('author_id');
        $getBook = $request->input('book_id');
        $books = Books::where('author_id', $request->author_id)->get();

        return view('ratings.ratings', compact('authors', 'books', 'getAuthor', 'getBook'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required',
            'rating' => 'required|numeric|min:1|max:10',
        ]);

        $rating = Ratings::create([
            'book_id' => $request->book_id,
            'rating' => $request->rating
        ]);

        if ($rating) {
            return redirect()->route('index')->with('success', 'Rating created successfully');
        }else{
            return redirect()->back()->with('error', 'Rating not created');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
