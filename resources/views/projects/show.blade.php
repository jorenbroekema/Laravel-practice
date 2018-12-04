@extends('layouts.app')

@section('content')
    <h1 class="title">{{ $project->title }}</h1>
    <div class="content">{{ $project->description }}</div>
    @if ($project->tasks->count())
    <div>
        @foreach ($project->tasks as $task)
        <li>{{ $task->description }}</li>
        @endforeach
    </div>
    @endif
    <small>{{ $project->updated_at }}</small>
    <div>
        <a href="/projects/{{ $project->id }}/edit">
            <button type="submit" class="button is-link">Edit</button>
        </a>
    </div>
@endsection
