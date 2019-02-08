@extends('layout')

@section('content')
    
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Events List</h1>
    
            <table class="table">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>TITLE</th>
                        <th>DESCRIPTION</th>
                        <th>USER</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach ($events as $event)
                        <tr>
                            <td>#EVT_{{ $event->id }}</td>
                            <td>{{ $event->title }}</td>
                            <td>{{ $event->description }}</td>
                            <td>{{ $event->user_id }}</td>
                            <td>
                                <a class="btn btn-warning" href="/events/{{ $event->id }}/edit" role="button">Edit</a>
                                <form action="/events/{{ $event->id }}" method="post" style="display:inline;">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <input class="btn btn-danger" type="submit" value="DELETE">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection