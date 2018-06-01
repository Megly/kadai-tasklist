@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} >>> Detail Page</h1>

    <p>{{ $task->content }}</p>

    {!! link_to_route('tasks.edit', '>>> Edit Page', ['id' => $task->id]) !!}

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('Delete') !!}
    {!! Form::close() !!}

@endsection