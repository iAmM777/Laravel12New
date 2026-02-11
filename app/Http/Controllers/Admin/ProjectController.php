<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use App\Http\Requests\ProjectStoreRequest;
use App\Http\Requests\ProjectUpdateRequest;
use Pest\Support\View;

class ProjectController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectStoreRequest $request): \Illuminate\Http\RedirectResponse
    {
        $validated = $request->validated();

        $project = new Project();
        $project->name = $validated['name'];
        $project->description = $validated['description'];
        $project->save();

        return redirect()->route('projects.index')->with('status', "Project {$validated['name']} is aangemaakt");
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', ['project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectUpdateRequest $request, Project $project)
    {
        $validated = $request->validated();

        $project->name = $validated['name'];
        $project->description = $validated['description'];
        $project->save();

        return redirect()->route('projects.index')->with('status', "Project {$validated['name']} is gewijzigd");
    }

    /**
     * Show the form for deleting the specified resource.
     */
    public function delete(Project $project)
    {
        return view('admin.projects.delete', compact('project'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $projectName = $project->name;
        $project->delete();
        return redirect()->route('projects.index')->with('status', "Project {$projectName} is verwijderd");
    }
}
