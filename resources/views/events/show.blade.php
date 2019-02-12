@extends('layout')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">{{ $event->title }}</h1>
            <p>{{ $event->description }}</p>

            <h3>Tasks</h3>
            @if ( $event->tasks->count() > 0 )
                <ul style="list-style:none;">
                    @foreach ($event->tasks as $item)
                        {{-- <li>{{ $item->description }}</li> --}}
                        <li> 
                            {{-- <form method="POST" action="/tasks/{{ $item->id }}"> --}}
                                {{-- @method('PATCH') --}}
                            
                            <form method="POST" action="/complete-task/{{ $item->id }}">
                                @if( $item->is_finished )
                                    @method('DELETE')
                                @endif

                                @csrf
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" 
                                     id="customCheck{{  $item->id }}" name="completed" onchange="this.form.submit()"
                                     {{ $item->is_finished ? 'checked' : '' }}
                                    >
                                    <label class="custom-control-label {{ $item->is_finished ? 'is-finished':'' }}" 
                                     for="customCheck{{  $item->id }}">
                                        {{ $item->description }}
                                    </label>
                                </div>
                            </form>   
                        </li>
                    @endforeach
                </ul>    
            @endif
        </div>
    </div>
    
    <br>
    @include('errors')
    <br>
    <div class="card text-left">
      <div class="card-body">
        <h4 class="card-title">Add New Task</h4>
        
        <form action="/events/{{ $event->id }}/store" method="POST">
            @csrf
            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control {{ $errors->has('description') ? 'invalid':'' }}" name="description" id="" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Save Task</button>
        </form>
        

      </div>
    </div>

@endsection