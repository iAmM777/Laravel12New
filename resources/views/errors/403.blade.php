@extends('layouts.layoutpublic')

@section('content')
<div class="container mx-auto max-w-4xl py-12">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">403 - Toegang Geweigerd</h1>
        <!--<p class="text-lg text-gray-600 mb-8">User is not logged in.</p>-->
        <p class="text-gray-500">Je hebt geen toestemming om deze pagina te bekijken.</p>
        <p class="text-gray-500">Neem contact op met de beheerder.</p>
        <!--
        <div class="mt-8">
            <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-4">Inloggen</a>
            <a href="{{ route('register') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Registreren</a>
        </div>
        -->
    </div>
</div>
@endsection