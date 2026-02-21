<?php

use App\Http\Controllers\Admin\ProjectController as Admin;
use App\Http\Controllers\Open\ProjectController as Open;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/admin', function () {
    return view('layouts.layoutadmin');
})->name('admin');

Route::prefix('admin')->middleware(['role:admin|teacher|student'])->group(function () {
    Route::resource('projects', Admin::class);
    Route::get('projects/{project}/delete', [Admin::class, 'delete'])->name('projects.delete');
});

// Public projects listing (open)
Route::get('/projects', [Open::class, 'index'])->name('open.projects.index');

// Admin project resource routes


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
