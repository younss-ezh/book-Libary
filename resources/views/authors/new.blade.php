@extends('layouts/layout')
@section('content')

<div class="container w-50 text-center">
    
<form action="{{ route('create_author') }}" method="post">
    @csrf
    <h3>
    <label class="alert">Author Name</label>
    </h3>
    <input type="text" name="name" class="form-control">
    <span class="text-light">@error('name') {{$message}} @enderror</span>
    <br>
    <a href="/authors" class="btn btn-danger">Cancel</a>
    <button class="btn btn-success">Create</button>
</form>   
</div>

@stop