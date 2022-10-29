@extends('layouts/layout')
@section('content')

<div class="container w-50 text-center">
    
<form action="{{ route('update_author', $author->id) }}" method="post">
    @csrf
    @method("PUT")
    <h3>
    <label class="alert">Author Name</label>
    </h3>
    <input type="text" name="name" value="{{ $author->name }}" class="form-control">
    <br>
    <a href="/authors" class="btn btn-danger">Cancel</a>
    <button class="btn btn-primary">Save</button>
</form>   
</div>

@stop