@extends('layouts.app')

@section('content')
    <h1 class="title">Edit Project</h1>

    <form action="/projects/{{ $project->id }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="field">
            <label for="title" class="label">Title</label>
            <div class="control">
                <input
                    type="text"
                    name="title"
                    class="input {{ $errors->has('title') ? 'is-danger' : '' }}"
                    placeholder="Project title"
                    value="{{ $project->title }}"
                    required
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
                    required
                >{{ $project->description }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update Project</button>
                <!-- Use some JavaScript to switch the method to DELETE when using the DELETE button -->
                <button
                    onclick="(() => { document.querySelector('input[name=\'_method\']').setAttribute('value', 'DELETE') })();"
                    type="submit"
                    class="button is-danger"
                >Delete Project</button>
            </div>
        </div>
    </form>
@endsection
