<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->decimal('rating', 3, 1)->default(4.5);
            $table->integer('reviews_count')->default(0);
            $table->string('duration');
            $table->integer('lectures_count')->default(0);
            $table->string('level')->default('All Levels');
            $table->decimal('price', 8, 2)->default(9.99);
            $table->decimal('original_price', 8, 2)->default(39.99);
            $table->string('image')->nullable();
            $table->string('category')->default('Research Methods');
            $table->text('description')->nullable();
            $table->string('udemy_url')->nullable();
            $table->boolean('is_featured')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
