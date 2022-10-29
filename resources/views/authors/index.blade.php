@extends('layouts/layout')
@section('content')

    <div class="container">
        <form action="{{ route('search_author') }}" method="get" class="form">
           <div class="input-group">
                <input type="text" class="form-control" name="query" placeholder="serch for Author">
                <button class="btn btn-primary">Search</button>
           </div>
        </form>

    @foreach($authors as $author)
        <div class="row mt-5 alert alert-success">
            <div class="col-5">
                <h3>{{ $author->name }}</h3>
            </div>
            <div class="col-2"></div>
            <div class="col-5">
                <a href="{{ url('/authors/' . $author->id . '/show') }}" class="btn btn-info">Show</a>
                <a href="{{ url('/authors/' . $author->id . '/edit') }}" class="btn btn-primary">Edit</a>
                <a href="{{ url('/authors/' . $author->id) }}" onclick="return confirm('Are You Sure')" class="btn btn-danger">Delete</a>
            </div>
        </div>
    @endforeach  
    
    @if(Session::has('success'))
        <h3 class="alert alert-suucess">{{ Session::get('success') }}</h3>
    @endif

    @if(Session::has('fail'))
        <h3 class="alert alert-danger">{{ Session::get('fail') }}</h3>
    @endif
    
    </div>

@stop