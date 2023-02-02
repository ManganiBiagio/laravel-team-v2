@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">{{$actor->name}}</div>
                    <div class="card-text">{{$actor->surname}}</div>
                    <div class="card-text">{{$actor->date_of_birth}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection