@extends('layouts.layoutpublic')

@section('content')
<div class="container mx-auto max-w-4xl py-12 px-6">
    <h1 class="text-4xl font-bold text-gray-800 mb-8">Projects</h1>

    <div class="grid grid-cols-1 gap-6 mb-8">
        @forelse($projects as $project)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                <div class="p-6">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <p class="text-sm text-gray-500 mb-2">ID: {{ $project->id }}</p>
                            <h2 class="text-2xl font-bold text-gray-800">{{ htmlspecialchars($project->name, ENT_QUOTES) }}</h2>
                        </div>
                    </div>
                    
                    <p class="text-gray-700 leading-relaxed">
                        {{ \Illuminate\Support\Str::limit(htmlspecialchars($project->description, ENT_QUOTES), 350) }}
                    </p>
                </div>
            </div>
        @empty
            <div class="bg-white rounded-lg shadow-md p-8 text-center">
                <p class="text-gray-600">No projects found.</p>
            </div>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="mt-8">
        {{ $projects->links() }}
    </div>
</div>
@endsection
