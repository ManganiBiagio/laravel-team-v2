@extends('layouts.app')
@section('content')
<div class="container py-4">
    <h1>Edit actor</h1>

    <form action="{{ route("actors.update"),$actor->id }}" method="POST">
        @csrf
    @method('PUT')
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example1">Name</label>
                <input type="text" id="form6Example1" class="form-control" name="name" value="{{$actor->name}}" />
            </div>
        </div>
    
    <div class="form-outline mb-4">
        <label class="form-label" for="form6Example3">Surname</label>
        <input type="text" id="form6Example3" class="form-control"name="surname" value="{{$actor->surname}}" />
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="form6Example3">Date of birth</label>
        <input type="date" id="form6Example3" class="form-control"name="date_of_birth" value="{{$actor->date_of_birth}}" />
    </div>

    <button type="submit" class="btn btn-primary btn-block mb-4">Update</button>
    </form>
</div>
@endsection