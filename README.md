<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
</p>

## Laravel Exercises

This repository is intended for students who want to work with Laravel 12. The exercises are linked to a lesson series written to teach the framework step by step. The exercise requirements are described in the documentation, including the commands you can run to verify your work. With a teaching materials license from Stichting Praktijkleren you have access to this lesson series.

The Exercise: Project Management Tool
For the exercise you will build a simple project management tool to track project progress, tasks, and assigned users. The functionality includes:
<ul>
<li><strong>Projects</strong>: Students can create and manage projects.</li>
<li><strong>Tasks</strong>: Projects can have many associated tasks.</li>
<li><strong>Activities / Statuses</strong>: A task has a status (e.g., Todo, Doing, Testing, Verify, Done).</li>
<li><strong>Users</strong>: Tasks can be assigned to different users.</li>
</ul>

## Installation (example using Wampserver)
Follow these steps to get started with the exercises:
<ul>
    <li>Clone the project into a directory.</li>
    <li>Create a virtual host in Wampserver and point the document root to the <code>public</code> folder. Use at least PHP 8.2.</li>
    <li>Ensure you can access phpMyAdmin.</li>
    <li>Create a database named <code>laravelopdr</code>.</li>
    <li>Create a <code>.env</code> file by copying <code>.env.example</code>.</li>
    <li>In the <code>.env</code> file, verify the database name (<code>laravelopdr</code>) and the username (usually <code>root</code>).</li>
    <li>From the project root in a terminal, run: <code>composer install</code></li>
    <li>Then run: <code>php artisan key:generate</code></li>
    <li>Then run: <code>php artisan migrate</code></li>
</ul>

If you use a different environment, apply equivalent steps to prepare the project.

<h1>🛠️ Core Technologies</h1>
<h2>Fundamental Concepts</h2>
<ul>
<li><strong>MVC Design Pattern</strong>: Clean code architecture</li>
<li><strong>ORM (Eloquent)</strong>: Database interaction without writing raw SQL</li>
<li><strong>Laravel Conventions</strong>: Professional naming and structure</li>
</ul>
<h2>Database & Data Modeling</h2>
<ul>
<li><strong>Models</strong>: Eloquent models for each entity</li>
<li><strong>Migrations</strong>: Database schema management in code</li>
<li><strong>Seeders</strong>: Test data generation</li>
<li><strong>Factories</strong>: Automated fake data with relationships</li>
<li><strong>Relationships</strong>: <code>belongsTo</code> and <code>hasMany</code> associations</li>
</ul>
<h2>Frontend Development</h2>
<ul>
<li><strong>Blade Templates</strong>: Laravel's templating engine</li>
<li><strong>Master Pages</strong>: Reusable layouts with <code>@extends</code> and <code>@yield</code></li>
<li><strong>Livewire Starterkit</strong>: Interactive components (replacement for Breeze in Laravel 12)</li>
<li><strong>TailwindCSS</strong>: Modern utility-first styling</li>
<li><strong>Responsive Design</strong>: Mobile-first development</li>
</ul>
<h2>Controllers & Routing</h2>
<ul>
<li><strong>Resource Controllers</strong>: Complete CRUD operations
<ul>
<li><code>index</code> - Listing pages</li>
<li><code>create</code> - Forms for new items</li>
<li><code>store</code> - Persist new data</li>
<li><code>show</code> - Detail pages</li>
<li><code>edit</code> - Edit forms</li>
<li><code>update</code> - Update existing data</li>
<li><code>destroy</code> - Remove items</li>
</ul>
</li>
<li><strong>Named Routes</strong>: Maintainable URL structure</li>
<li><strong>Route Middleware</strong>: Security and access control</li>
</ul>
<h2>Forms & Validation</h2>
<ul>
<li><strong>Form Request Validation</strong>: Separate validation classes</li>
<li><strong>Validation Rules</strong>: <code>required</code>, <code>string</code>, <code>unique</code>, <code>min/max</code>, <code>exists</code></li>
<li><strong>Error Handling</strong>: User-friendly validation messages</li>
<li><strong>Old Input</strong>: Preserve form data on validation errors</li>
<li><strong>Flash Messages</strong>: Success notifications after actions</li>
</ul>
<h2>Authentication & Security</h2>
<ul>
<li><strong>User Authentication</strong>: Full login/logout functionality</li>
<li><strong>Roles & Permissions</strong>: Spatie Laravel-Permission package</li>
<li><strong>Middleware</strong>: Route protection</li>
<li><strong>Authorization</strong>: Controller-level access control</li>
</ul>
<h2>Development Tools</h2>
<ul>
<li><strong>Artisan Commands</strong>:
<ul>
<li><code>make:model --all</code> - Complete CRUD scaffold</li>
<li><code>make:request</code> - Validation classes</li>
<li><code>make:migration</code> - Database changes</li>
<li><code>make:seeder</code> - Test data generators</li>
</ul>
</li>
<li><strong>Composer</strong>: Package management</li>
<li><strong>Git Integration</strong>: Version control for team development</li>
</ul>

<h2> Complete Exercises Overview</h2>
<ul>
<li><strong>Exercise 1</strong>: Model & Migration - Create the projects table</li>
<li><strong>Exercise 2</strong>: Factory & Seeder - Generate project test data</li>
<li><strong>Exercise 3</strong>: Resource Controller - Create ProjectController</li>
<li><strong>Exercise 4</strong>: Index - Build projects listing page</li>
<li><strong>Exercise 5</strong>: Create & Store - Add project creation</li>
<li><strong>Exercise 6</strong>: Validation - Implement ProjectStoreRequest</li>
<li><strong>Exercise 7</strong>: Show - Project detail page</li>
<li><strong>Exercise 8</strong>: Edit & Update - Project editing</li>
<li><strong>Exercise 9</strong>: Delete & Destroy - Project removal</li>
<li><strong>Exercise 10</strong>: Public Pages - Show categories publicly</li>
<li><strong>Exercise 11</strong>: Public Projects - Projects overview for visitors</li>
<li><strong>Exercise 12</strong>: Roles & Permissions - User roles system</li>
<li><strong>Exercise 13</strong>: User Seeder - Create test users</li>
<li><strong>Exercise 14</strong>: Middleware Routes - Protect routes</li>
<li><strong>Exercise 15</strong>: Role-Based Access - Attach permissions to controllers</li>
<li><strong>Exercise 16</strong>: Task & Activity Models - Database structure for tasks</li>
<li><strong>Exercise 17</strong>: Activity & Task Factory - Test data for tasks</li>
<li><strong>Exercise 18</strong>: Activity & Task Seeder - Seed tasks into the database</li>
<li><strong>Exercise 19</strong>: Task Index - Tasks listing page</li>
<li><strong>Exercise 20</strong>: Task Permissions - Permissions for task management</li>
<li><strong>Exercise 21</strong>: Task Create - Create new tasks</li>
<li><strong>Exercise 22</strong>: Task Store & Validation - Persist tasks with validation</li>
<li><strong>Exercise 23</strong>: Task Show - Task detail page</li>
<li><strong>Exercise 24</strong>: Task Edit - Edit tasks</li>
<li><strong>Exercise 25</strong>: Task Update & Validation - Update tasks</li>
<li><strong>Exercise 26</strong>: Task Delete - Delete confirmation page</li>
<li><strong>Exercise 27</strong>: Task Destroy - Permanently remove tasks</li>
</ul>

## Contact
If you'd like to work through these exercises and need the lesson materials and exercise descriptions, please contact:
<a href="https://www.stichtingpraktijkleren.nl/contact/">https://www.stichtingpraktijkleren.nl/contact/</a>
