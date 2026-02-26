<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // student
        $student = User::create([
            'name' => 'student',
            'email' => 'student@school.nl',
            'password' => Hash::make('student'),
        ]);
        $student->assignRole('student');

        // teacher
        $teacher = User::create([
            'name' => 'teacher',
            'email' => 'teacher@school.nl',
            'password' => Hash::make('teacher'),
        ]);
        $teacher->assignRole('teacher');

        // admin
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@school.nl',
            'password' => Hash::make('admin'),
        ]);
        $admin->assignRole('admin');

        //testrole
        $testUser = User::create([
            'name' => 'Test User',
            'email' => 'testuser@school.nl',
            'password' => Hash::make('testuser'),
        ]);
        $testUser->assignRole('testrole');


        //testrole2
        $testUser2 = User::create([
            'name' => 'Test User2',
            'email' => 'testuser2@school.nl',
            'password' => Hash::make('testuser2'),

        ]);
        $testUser2->assignRole('testrole2');
    }
}
