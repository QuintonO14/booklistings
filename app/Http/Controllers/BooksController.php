<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('created_at','desc')->paginate(3);

        return view('books.index',compact('books','titles','authors','published'));
    }

    public function createBook(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:3',
            'author' => 'required',
            'description' => 'required|min:30|max:1800',
            'published' => 'required',
            'cover' => 'mimes:jpeg,bmp,png',
            ]);

        $input = $request->all();

        $input['cover'] = time().'.'.$request->cover->getClientOriginalExtension();
        $request->cover->move(public_path('images'), $input['cover']);

        Book::create($input);

        return redirect('/books');

    }

    public function removeBook($id)
    {

        $book = Book::findOrFail($id);

        $book->delete();

        return redirect()->back();

    }

    public function author()
    {
        $books = Book::orderBy('author','asc')->paginate(3);
        return view('books.author',compact('books'));
    }

    public function title()
    {
        $books = Book::orderBy('title','asc')->paginate(3);
        return view('books.title', compact('books'));
    }

    public function published()
    {
        $books = Book::orderBy('published','desc')->paginate(3);

        return view('books.published',compact('books'));
    }

    public function fullBook($id)
    {
        $book = Book::findOrFail($id);

        return view('books.full', compact('book'));
    }
}
