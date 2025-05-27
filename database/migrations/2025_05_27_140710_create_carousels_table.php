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
        Schema::create('carousels', function (Blueprint $table) {
            $table->id();
            $table->string('image'); // Path to image
            $table->string('subtitle')->nullable(); // h4 text
            $table->string('title'); // h3 text
            $table->string('button_text')->nullable(); // Button text
            $table->string('button_link')->nullable(); // Button href
            $table->unsignedInteger('order')->default(0); // Slide order
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carousels');
    }
};
