<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{
    public function update(Task $task)
    {
        request()->has('completed') ? $task->complete() : $task->incomplete();

        return redirect('/projects/'.$task->project_id);
    }

    public function store(Project $project)
    {
        $attributes = request()->validate(['description' => 'required']);
        $project->addTask($attributes);

        return back();
    }
}
