@extends('layouts.app')

@section('content')

    <h1>New Task</h1>
    
    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('status', 'Done / Undone:') !!}
        {!! Form::text('status') !!}

        {!! Form::label('content', 'Task:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('Add') !!}

    {!! Form::close() !!}

@endsection