@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            @foreach ($movies as $movie )
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">{{$movie->name}}</div>
                        <div class="card-text">{{$movie->description}}</div>
                        <form action="{{ route('movies.destroy', $movie->id) }}"  method="POST">
                            @csrf
                            @method("DELETE")
                        <button class="btn btn-danger"> 
                            elimina                          
                            
                        </button>
                    </form>
                        <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-primary">
                            Show
                        </a>
                        <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-success">
                            Edit
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection