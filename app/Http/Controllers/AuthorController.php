<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Nette\Schema\Expect;

class AuthorController extends Controller
{
    public function index() {
        $authors = Author::get() ;
        return view('authors.index', compact('authors')) ;
    }

    public function new() {
        return view('authors.new') ;
    }

    public function create(Request $request) {
        $request->validate([
            'name'  => 'required',
        ]) ;

        Author::create($request->all()) ;
        return redirect('authors') ;
    }

    public function show($id) {
        $author = Author::find($id) ;
        $books = Book::where('author_id', '=' , $id)->get() ;
        return view('authors.show', compact('author', 'books')) ;
    }

    public function edit($id) {
        $author = Author::find($id) ;
        return view('authors.edit', compact('author')) ;
    }

    public function update(Request $request, $id) {
        $author = Author::find($id) ;
        $author->update($request->all()) ;
        return redirect('authors') ;
    }

    public function delete($id) {
        $author = Author::destroy($id) ;
        return redirect('books') ;
        if($author) {
            return back()->with('success', 'Author deleting') ;            
        }else {
            return back()->with('fail', 'Author deleting') ;            
        }
    }

    public function search() {
        $search_input = $_GET['query'] ;
        $authors = Author::where('name', 'LIKE', '%' . $search_input . '%')->get() ;
        return view('authors.index', compact('authors')) ;
    }
}
