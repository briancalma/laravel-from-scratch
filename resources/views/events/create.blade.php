@extends('layout')

@section('content')
    
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Add New Event</h1>

            <form action="/events" method="post">
                {{ csrf_field() }}
                <label for="title">Title</label><br>
                <input type="text" name="title" placeholder="* Enter Title" class="form-control"> <br>
        
                <label for="description">Description</label><br>
                <textarea name="description" cols="30" rows="10" class="form-control"></textarea> <br>
        
                <button type="submit" class="btn btn-success"> Save </button>
            </form>
        </div>
    </div>

@endsection