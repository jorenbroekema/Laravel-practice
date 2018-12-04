@extends('layouts.app')

@section('content')
    <h1 class="title">Create a New Project</h1>
    <form action="/projects" method="POST">
        {{ csrf_field() }}
        <div class="field">
            <label for="title" class="label">Title</label>
            <div class="control">
                <input
                    type="text"
                    name="title"
                    class="input {{ $errors->has('title') ? 'is-danger' : '' }}"
                    placeholder="Project title"
                    value="{{ old('title') }}"
                >
            </div>
        </div>

        <div class="field">
            <label for="description" class="label">Description</label>
            <div class="control">
                <textarea
                    name="description"
                    class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}"
                    placeholder="Project Description"
                >{{ old('title') }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
            </div>
        </div>
    </form>
    <pre>{{ json_encode(json_decode($errors, true), JSON_PRETTY_PRINT) }}</pre>
@endsection
