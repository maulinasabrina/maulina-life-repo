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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');                   // "Minimal Notes"
            $table->text('description')->nullable();   // "A tiny notes app..."
            $table->string('tech_stack')->nullable();  // "Vanilla JS · Monaco · LocalStorage"
            $table->string('github_url')->nullable();  // "https://github.com/username/minimal-notes"
            $table->string('live_url')->nullable();    // optional, kalau mau link ke demo
            $table->string('image')->nullable();       // optional, bisa untuk thumbnail
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
