<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions for projects CRUD
        Permission::create(['name' => 'index project']);
        Permission::create(['name' => 'show project']);
        Permission::create(['name' => 'create project']);
        Permission::create(['name' => 'edit project']);
        Permission::create(['name' => 'delete project']);

        // Create roles
        $studentRole = Role::create(['name' => 'student']);
        $teacherRole = Role::create(['name' => 'teacher']);
        $adminRole = Role::create(['name' => 'admin']);
        $testrole = Role::create(['name' => 'testrole']);
        $testrole2 = Role::create(['name' => 'testrole2']);

        // Assign permissions to student role
        $studentRole->givePermissionTo(['index project', 'create project', 'show project', 'edit project']);

        // Assign permissions to teacher role
        $teacherRole->givePermissionTo(['index project', 'create project', 'show project', 'edit project', 'delete project']);

        // Assign all permissions to admin role
        $adminRole->givePermissionTo(Permission::all());

        // Assign permissions to testrole
        $testrole->givePermissionTo(['index project', 'create project', 'show project']);

        // Assign permissions to testrole2
        $testrole2->givePermissionTo(['index project', 'create project']);
    }
}
