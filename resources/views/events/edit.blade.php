@extends('layout')

@section('content')
    
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Edit Event Information</h1>

            <form action="/events/{{ $event->id }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <label for="title">Title</label><br>
                <input type="text" name="title" placeholder="* Enter Title" class="form-control" value="{{ $event->title }}"> <br>
        
                <label for="description">Description</label><br>
                <textarea name="description" cols="30" rows="10" class="form-control">{{ $event->description }}</textarea> <br>
        
                <button type="submit" class="btn btn-success"> Save </button>
            </form>
        </div>
    </div>

@endsection