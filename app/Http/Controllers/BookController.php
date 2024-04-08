<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{ 
    public function index()
    {
        $books = Book::all();
        return view('index', ['books' => $books]);
    }
 
    public function create()
    {
        return view('create');
    }
 
    public function store(Request $request)
    {
        $books = Book::all();
        Book::create($request->all());
        return redirect()->route('books.index', ['books' => $books]);
    }
 
    public function search(Request $request)
    {
        // $searchTerm = $request->input('query');

        // // Căutare după titlu și autor
        // $books = Book::where('title', 'like', '%' . $searchTerm . '%')
        //              ->orWhereHas('author', function ($query) use ($searchTerm) {
        //                  $query->where('name', 'like', '%' . $searchTerm . '%');
        //              })
        //              ->get();

        // return view('books.search', compact('books'));
    }
 
    public function edit(Book $book)
    {
        //
    }
 
    public function update(Request $request, Book $book)
    {
        //
    }
 
    public function destroy(Book $book)
    {
        //
    }
}
