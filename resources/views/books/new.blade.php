@extends('layouts/layout')
@section('content')

<div class="container text-center">
    
<form action="{{ route('create_book') }}" method="post" class="form mt-5 p-3 bg-dark" enctype="multipart/form-data">
    @csrf
        <div class="row">
            <div class="col-6">
                <input type="text" name="title" placeholder="Book Title" class="form-control">
                <span class="text-danger">@error('title') {{ $message }} @enderror</span>
            </div>
            <div class="col-6">
                <select name="author_id" class="form-control">
                    <option value="-1">Select Author</option>
                    @foreach($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                </select>
                <span class="text-danger">@error('author_id') {{ $message }} @enderror</span>
            </div>
            <br><br><br>
            <div class="col-6">
              <input type="number" name="pages" min="50" placeholder="number of Pages" class="form-control">
              <span class="text-danger">@error('pages') {{ $message }} @enderror</span>
            </div>
            <div class="col-6">
              <textarea name="description" class="form-control" placeholder="Description"></textarea>
              <span class="text-danger">@error('description') {{ $message }} @enderror</span>
            </div>
            <br><br><br>
            <div class="col-6">
              <input type="file" name="image" class="form-control">
              <span class="text-danger">@error('image') {{ $message }} @enderror</span>
            </div>
            <div class="col-6">
              <input type="date" name="created_at" class="form-control">
              <span class="text-danger">@error('created_at') {{ $message }} @enderror</span>
            </div>
        </div>

        <br>
        <a href="/books" class="btn btn-danger">Cancel</a>
        <button class="btn btn-success">Create</button>
    </form>

</div>

@stop