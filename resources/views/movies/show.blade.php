@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">{{$movie->name}}</div>
                    <div class="card-text">{{$movie->description}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection