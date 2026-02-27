<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('task');
            $table->date('begindate');
            $table->date('enddate');

            // foreign keys
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('activity_id');

            $table->timestamps();

            // constraints
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onUpdate('NO ACTION')
                ->onDelete('NO ACTION');

            $table->foreign('project_id')
                ->references('id')->on('projects')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('activity_id')
                ->references('id')->on('activities')
                ->onUpdate('RESTRICT')
                ->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
