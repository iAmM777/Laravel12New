@extends('layouts.layoutadmin')

@section('content')
<div class="w-full">
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <!-- header -->
        <div class="px-6 py-4 border-b border-gray-200">
            <h2 class="text-2xl font-bold text-gray-800">Create Project</h2>
        </div>
        <!-- end header --> 

        <!-- errors -->

        @if($errors->any())
            <div class="px-6 py-4 border-b border-gray-200">
                <div class="bg-red-100 text-red-700 p-4 rounded">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        <!-- end errors -->

        <div class="p-6">
            <form action="{{ route('projects.store') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2" required>
                    @error('name')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" id="description" rows="5" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2" required>{{ old('description') }}</textarea>
                    @error('description')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}
                    </p>@enderror
                </div>

                <div class="pt-4">
                    <button type="submit" class="px-4 py-2 bg-teal-600 text-white rounded hover:bg-teal-700">Save</button>
                    <a href="{{ route('projects.index') }}" class="ml-3 text-sm text-gray-600">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
