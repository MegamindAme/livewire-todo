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
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('status');
            $table->string('file');
            $table->dateTime('duedate');
            $table->integer('list');
            $table->boolean('remindme');
            $table->boolean('repeat');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('todos_lists', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::create('todos_history', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::create('todos_notes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::create('todos_statuses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todos');
        Schema::dropIfExists('todos_lists');
        Schema::dropIfExists('todos_history');
        Schema::dropIfExists('todos_notes');
        Schema::dropIfExists('todos_statuses');
    }
};
