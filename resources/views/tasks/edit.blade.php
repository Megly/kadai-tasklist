@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} >>> Edit Page</h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('status', 'Done / Undone:') !!}
        {!! Form::text('status') !!}

        {!! Form::label('content', 'Task:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('Update') !!}

    {!! Form::close() !!}

@endsection