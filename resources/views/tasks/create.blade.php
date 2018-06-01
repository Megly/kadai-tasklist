@extends('layouts.app')

@section('content')

    <h1>New Task</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'Task:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('Add') !!}

    {!! Form::close() !!}

@endsection