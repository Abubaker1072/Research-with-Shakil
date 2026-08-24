<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        $this->call([
            CourseSeeder::class,
            PublicationSeeder::class,
            ServiceSeeder::class,
            TestimonialSeeder::class,
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
