@extends('layouts.app')

@section('content')
    <h1 class="title">Projects</h1>
    <ul>
        @foreach ($projects as $project)
            <li>
                <a href="/projects/{{ $project->id }}">
                    {{ $project->title }}
                </a>
            </li>
        @endforeach
    </ul>
    <div>
        <a href="/projects/create">
            <button type="submit" class="button is-primary">Create New</button>
        </a>
    </div>
@endsection
