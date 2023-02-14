@extends('layouts.app')
@section('content')
<div class="container py-4">
    
    <h1>Edit Movie</h1>

    <form action="{{ route("movies.update", $movie->id) }}" method="POST">
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
    <div class="mb-3">
      <div>
        Seleziona gli Attori
      </div>
        @foreach ($actors as $actor)
          <div class="form-check form-check-inline @error('actors') is-invalid @enderror">
          
            <input class="form-check-input @error('actors') is-invalid @enderror" type="checkbox"
              id="tagCheckbox_{{ $loop->index }}" value="{{ $actor->id }}" name="actors[]"
              {{ in_array( $actor->id, old('actors', [])) ? 'checked' : '' }}
              >
            <label class="form-check-label" for="tagCheckbox_{{ $loop->index }}">{{ $actor->name . " ". $actor->surname}}</label>
          </div>
        @endforeach

        @error('actors')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

    <button type="submit" class="btn btn-primary btn-block mb-4">Update</button>
    </form>
</div>
@endsection