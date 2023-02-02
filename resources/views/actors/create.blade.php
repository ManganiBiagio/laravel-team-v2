@extends('layouts.app')
@section('content')
<div class="container py-4">
    <h1>Add Movie</h1>

    <form action="{{ route("movies.store") }}" method="POST">
        @csrf
    
    <div class="row mb-4">
      <div class="col">
        <div class="form-outline">
            <label class="form-label" for="form6Example1">Title</label>
            <input type="text" id="form6Example1" class="form-control" name="title" />
        </div>
    </div>
    
    <div class="form-outline mb-4">
        <label class="form-label" for="form6Example3">Description</label>
        <input type="text" id="form6Example3" class="form-control"name="description" />
    </div>

    <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
    </form>
</div>
@endsection