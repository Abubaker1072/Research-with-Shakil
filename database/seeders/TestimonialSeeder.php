<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Andrew',
                'role_or_course' => 'PhD Candidate',
                'feedback' => 'This course was the key to my successful defense.',
                'rating' => 5.0,
                'avatar_initials' => 'A',
                'is_featured' => true,
            ],
            [
                'name' => 'Michael',
                'role_or_course' => 'Master\'s Researcher',
                'feedback' => 'Transformed my research into a strong defense.',
                'rating' => 5.0,
                'avatar_initials' => 'M',
                'is_featured' => true,
            ],
            [
                'name' => 'Erich',
                'role_or_course' => 'DBA Scholar',
                'feedback' => 'Turned my ideas into a polished dissertation.',
                'rating' => 5.0,
                'avatar_initials' => 'E',
                'is_featured' => true,
            ],
            [
                'name' => 'Sarah',
                'role_or_course' => 'University Faculty',
                'feedback' => 'Clear, practical, and highly methodical step-by-step guidance.',
                'rating' => 5.0,
                'avatar_initials' => 'S',
                'is_featured' => true,
            ],
        ];

        foreach ($testimonials as $t) {
            Testimonial::updateOrCreate(['name' => $t['name']], $t);
        }
    }
}
