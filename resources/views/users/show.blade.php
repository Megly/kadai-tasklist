@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->name }}</h3>
                </div>
                <div class="panel-body">
                    <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->email, 500) }}" alt="">
                </div>
            </div>
        </aside>
        <div class="col-xs-8">
                <p role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><h3>TimeLine<span class="badge">✎{{ $count_tasks }}</span></h3></a></p>
            @if (Auth::user()->id == $user->id)
                  {!! Form::open(['route' => 'tasks.store']) !!}
                  
                      <div class="form-group">
                          <h4>status</h4>
                          {!! Form::textarea('status', old('status'), ['class' => 'form-control', 'placeholder="How is it going ?"', 'rows' => '1']) !!}
                          <h4>task</h4>
                          {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'placeholder="What do you do ?"', 'rows' => '2']) !!}
                          <br>
                          {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}<br><br><br>
                      </div>
                  {!! Form::close() !!}
            @endif
            @if (count($tasks) > 0)
                @include('tasks.tasks', ['tasks' => $tasks])
            @endif
        </div>
    </div>
@endsection