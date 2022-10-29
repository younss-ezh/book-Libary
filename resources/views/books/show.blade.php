@extends('layouts/layout')
@section('content')

<h1 class="alert alert-light text-center">Book Details</h1>

<div class="container w-75">
    <div class="flex">
        <img src="/images/{{ $book->image }}" alt="" width="280" height="380" class="m-3">
        <div class="mt-5">
            <h4 class="text-light"><ins class="text-warning">Title:</ins> {{ $book->title }}</h4>
            <h4 class="text-light"><ins class="text-warning">Pages:</ins> {{ $book->pages }}</h4>
            <h4 class="text-light"><ins class="text-warning">Date Created:</ins> {{ $book->created_at }}</h4>
            <h4 class="text-light"><ins class="text-warning">Author:</ins> {{ $book->author_id }}</h4>
            <h5 class="text-light"><ins class="text-warning">Description:</ins> {{ $book->description }}</h5>
        </div>
    </div>

    
    <a href="{{ url('/books/' . $book->id . '/edit') }}" class="btn btn-info">Edit</a>
    <a href="{{ url('/books/' . $book->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure')">Delete</a>

</div>

@stop