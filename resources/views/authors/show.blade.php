@extends('layouts/layout')
@section('content')

<h1 class="alert alert-light text-center">Author: <i>{{ $author->name }}</i></h1>

<div class="row mt-5">
    @foreach($books as $book)
     
        <div class="col-4">
            <a href="{{ url('/books/' . $book->id . '/show') }}">
                <img src="/images/{{ $book->image }}" alt="" width="300" height="400" class="m-3">
            </a>
        </div>
    
    @endforeach
        </div>

@stop