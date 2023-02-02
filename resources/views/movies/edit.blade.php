@extends('layouts.app')
@section('content')
<div class="container py-4">
    <h1>Edit Movie</h1>

    <form action="{{ route("movies.update"),$movie->id }}" method="POST">
        @csrf
    @method('PUT')
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example1">Title</label>
                <input type="text" id="form6Example1" class="form-control" name="title" value="{{$movie->title}}" />
            </div>
        </div>
    
    <div class="form-outline mb-4">
        <label class="form-label" for="form6Example3">Description</label>
        <input type="text" id="form6Example3" class="form-control"name="description" value="{{$movie->description}}" />
    </div>

    <button type="submit" class="btn btn-primary btn-block mb-4">Update</button>
    </form>
</div>
@endsection