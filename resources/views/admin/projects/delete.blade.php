@extends('layouts.layoutadmin')

@section('content')
<div class="w-full">
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <!-- header -->
        <div class="px-6 py-4 border-b border-gray-200">
            <h2 class="text-2xl font-bold text-gray-800">Delete Project</h2>
        </div>
        <!-- end header -->

        <div class="px-6 pt-4 pb-6">
            <div class="mb-6 p-4 bg-red-100 text-red-700 rounded">
                <p class="font-semibold">Are you sure you want to delete this project? This action cannot be undone.</p>
            </div>

            <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="space-y-4">
                @csrf
                @method('DELETE')

                <div>
                    <label for="id" class="block text-sm font-medium text-gray-700">ID</label>
                    <input type="text" id="id" value="{{ $project->id }}" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 bg-gray-100 text-gray-600" disabled>
                </div>

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" id="name" value="{{ htmlspecialchars($project->name, ENT_QUOTES) }}" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 bg-gray-100 text-gray-600" disabled>
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea id="description" rows="5" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 bg-gray-100 text-gray-600" disabled>{{ htmlspecialchars($project->description, ENT_QUOTES) }}</textarea>
                </div>

                <div class="pt-4">
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">Delete Project</button>
                    <a href="{{ route('projects.index') }}" class="ml-3 text-sm text-gray-600">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
