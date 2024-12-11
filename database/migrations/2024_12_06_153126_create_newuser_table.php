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
        Schema::create('newuser', function (Blueprint $table) {
            $table->id();  // Automatically creates an auto-incrementing 'id' column
            $table->string('name');  // For storing the user's name
            $table->string('email')->unique();  // For storing the user's email with a unique constraint
            $table->string('image')->nullable();  // Allow NULL values for the image field
            $table->text('description')->nullable();  // Allow NULL values for the description field
            $table->timestamps();  // Automatically adds 'created_at' and 'updated_at' columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newuser');  // Drop the 'newuser' table if it exists
    }
};
