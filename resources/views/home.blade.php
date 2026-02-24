@extends('layouts.layoutpublic')

@section('content')
<div class="container mx-auto max-w-4xl py-12">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Welkom bij Laravel Lessenserie</h1>
        @auth
            <p class="text-lg text-gray-600 mb-8">Hallo, {{ auth()->user()->name }}!</p>
            <a href="{{ route('logout') }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Uitloggen</a>
        @else
            <p class="text-lg text-gray-600 mb-8">Login of registreer om toegang te krijgen tot de applicatie.</p>
            <div class="mt-8">
                <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-4">Inloggen</a>
                <a href="{{ route('register') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Registreren</a>
            </div>
        @endauth
    </div>
</div>
@endsection