@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            @foreach ($actors as $actor )
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">{{$actor->name}}</div>
                        <div class="card-text">{{$actor->surname}}</div>
                        <div class="card-text">{{$actor->date_of_birth}}</div>
                        <a method='delete' href="{{ route('actors.destroy', $actor->id) }}" class="btn btn-danger">
                            Delete
                        </a>
                        <a href="{{ route('actors.show', $actor->id) }}" class="btn btn-primary">
                            Show
                        </a>
                        <a href="{{ route('actors.edit', $actor->id) }}" class="btn btn-success">
                            Edit
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection