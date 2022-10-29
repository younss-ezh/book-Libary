@extends('layouts/layout')
@section('content')

    <div class="container">
        <form action="{{ route('search_book') }}" method="get" class="form">
           <div class="input-group">
                <input type="text" class="form-control" name="query" placeholder="serch for Author">
                <button class="btn btn-primary">Search</button>
           </div>
        </form>

        <div class="row mt-5">
    @foreach($books as $book)
        <div class="col-4">
            <a href="{{ url('/books/' . $book->id . '/show') }}">
                <img src="/images/{{ $book->image }}" alt="" width="300" height="400" class="m-3">
            </a>
        </div>
    @endforeach
        </div>
       
    </div>

@stop