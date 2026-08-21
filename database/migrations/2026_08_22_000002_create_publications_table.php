<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('authors')->default('Dr. Muhammad Shakil Ahmad');
            $table->string('journal');
            $table->integer('year')->default(2023);
            $table->string('type')->default('Journal Article'); // Journal Article, Systematic Review, Grant
            $table->text('abstract')->nullable();
            $table->string('url')->nullable();
            $table->string('doi')->nullable();
            $table->boolean('is_highlighted')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
