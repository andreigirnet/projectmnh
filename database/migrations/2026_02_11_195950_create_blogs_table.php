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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');            // VARCHAR for the title
            $table->mediumText('description');  // For a short summary
            $table->longText('content');        // For the full blog body
            $table->string('image')->nullable(); // Stores the file path
            $table->string('slug')->unique();    // URL-friendly version of title
            $table->timestamps();                // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
