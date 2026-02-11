@extends('layouts.layoutadmin')

@section('content')
<div class="w-full">
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200">
            <h2 class="text-2xl font-bold text-gray-800">Project Details</h2>
        </div>

        <div class="p-6 space-y-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Project ID</label>
                <p class="text-lg text-gray-900">{{ $project->id }}</p>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                <p class="text-lg text-gray-900">{{ htmlspecialchars($project->name, ENT_QUOTES) }}</p>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                <p class="text-lg text-gray-900 whitespace-pre-wrap">{{ htmlspecialchars($project->description, ENT_QUOTES) }}</p>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Created At</label>
                <p class="text-lg text-gray-900">{{ $project->created_at }}</p>
            </div>

            <div class="pt-4">
                <a href="{{ route('projects.edit', $project->id) }}" class="inline-flex px-4 py-2 bg-teal-600 text-white rounded hover:bg-teal-700">Edit</a>
                <a href="{{ route('projects.index') }}" class="ml-3 text-sm text-gray-600">Back to Projects</a>
            </div>
        </div>
    </div>
</div>
@endsection
