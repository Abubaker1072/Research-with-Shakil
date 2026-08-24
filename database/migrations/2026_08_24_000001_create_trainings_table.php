<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('icon')->default('fa-book-open');
            $table->string('duration_badge')->default('2-Day Workshop');
            $table->string('type_badge')->default('Scopus / SSCI');
            $table->string('badge_color')->nullable();
            $table->string('badge_bg')->nullable();
            $table->text('short_description')->nullable();
            $table->json('modules')->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trainings');
    }
};
