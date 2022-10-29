@extends('layouts/layout')
@section('content')

<div class="container text-center">
    
<form action="{{ route('update_book', $book->id) }}" method="post" class="form mt-5 p-3 bg-dark" enctype="multipart/form-data">
    @csrf
    @method("PUT")
        <div class="row">
            <div class="col-6">
                <input type="text" name="title" value="{{ $book->title }}" placeholder="Book Title" class="form-control">
            </div>
            <div class="col-6">
                <select name="author_id" class="form-control">
                    @foreach($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                </select>
            </div>
            <br><br><br>
            <div class="col-6">
              <input type="number" name="pages" value="{{ $book->pages }}" placeholder="number of Pages" class="form-control">
            </div>
            <div class="col-6">
              <textarea name="description" class="form-control" placeholder="Description">{{ $book->description }}</textarea>
            </div>
            <br><br><br>
            <div class="col-6">
              <input type="file" name="image" class="form-control">
            </div>
            <div class="col-6">
              <input type="date" name="created_at" value="{{ $book->created_at }}" class="form-control">
            </div>
        </div>

        <br>
        <a href="/books" class="btn btn-danger">Cancel</a>
        <button class="btn btn-success">Create</button>
    </form>

</div>

@stop