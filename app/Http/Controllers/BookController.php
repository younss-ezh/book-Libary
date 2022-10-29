<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $books = Book::all() ;
        return view('books.index', compact('books')) ;
    }

    public function new() {
        $authors = Author::all() ;
        return view('books.new', compact('authors')) ;
    }

    public function create(Request $request) {
        $request->validate([
            'title'  => 'required',
            'description'  => 'required',
            'image'  => 'required',
            'pages'  => 'required',
            'author_id'  => 'required',
            'created_at'  => 'required',
        ]) ;

        $input = $request->all() ;
        $image = $request->file('image') ;
        $destination = 'images/' ;
        $ImageName = time() . '.' . $image->getClientOriginalExtension() ;
        $image->move($destination, $ImageName) ;
        $input['image'] = $ImageName ;
        Book::create($input) ;
        return redirect('books') ;
    }

    public function show($id) {
        $book = Book::find($id) ;
        return view('books.show', compact('book')) ;
    }

    public function edit($id) {
        $book = Book::find($id) ;
        $authors = Author::all() ;
        return view('books.edit', compact('book', 'authors')) ;
    }

    public function update(Request $request, $id) {
        $book = Book::find($id) ;
        $input = $request->all() ;
        $image = $request->file('image') ;
        $destination = 'images/' ;
        $ImageName = time() . '.' . $image->getClientOriginalExtension() ;
        $image->move($destination, $ImageName) ;
        $input['image'] = $ImageName ;
        $book->update($input) ;
        return redirect('books') ;
    }

    public function delete($id) {
        Book::destroy($id) ;
        return redirect('books') ;
    }

    public function search() {
        $input_search = $_GET['query'] ;
        $books = Book::where('title', 'LIKE', '%' . $input_search . '%')->get() ;
        return view('books.index', compact('books')) ;
    }
}
