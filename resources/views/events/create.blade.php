@extends('layout')

@section('content')
    
    @include('errors')

    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Add New Event</h1>

            <form action="/events" method="post">
                @csrf
                <label for="title">Title</label><br>
                <input type="text" name="title" placeholder="* Enter Title" class="form-control {{ $errors->has('title') ? 'invalid' : ''}}" value="{{ old('title') }}"> <br>
        
                <label for="description">Description</label><br>
                <textarea name="description" cols="30" rows="10" class="form-control {{ $errors->has('description') ? 'invalid' : '' }}">{{ old('description') }}</textarea> <br>
        
                <button type="submit" class="btn btn-success"> Save </button>
            </form>
        </div>
    </div>

@endsection