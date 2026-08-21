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
                'name' => 'Dr. Ayesha Rehman',
                'role_or_course' => 'PhD Scholar, Management Sciences',
                'feedback' => 'Dr. Shakil\'s Systematic Literature Review course completely transformed my thesis methodology. I successfully published my review paper in a Scopus Q1 journal within 5 months!',
                'rating' => 5.0,
                'avatar_initials' => 'AR',
                'is_featured' => true,
            ],
            [
                'name' => 'Tariq Mehmood',
                'role_or_course' => 'Assistant Professor & Grant Applicant',
                'feedback' => 'The grant writing mentorship provided by Dr. Shakil helped us structure our HEC proposal effectively. His clarity on budget matrices and research impact was invaluable.',
                'rating' => 5.0,
                'avatar_initials' => 'TM',
                'is_featured' => true,
            ],
            [
                'name' => 'Fatima Al-Harthy',
                'role_or_course' => 'Master\'s Student, Healthcare Management',
                'feedback' => 'The thematic analysis bootcamp was step-by-step and incredibly practical. Dr. Shakil makes complex qualitative coding standard and easy to execute.',
                'rating' => 5.0,
                'avatar_initials' => 'FH',
                'is_featured' => true,
            ],
            [
                'name' => 'Usman Khalid',
                'role_or_course' => 'Udemy Learner (Scientific Paper Writing)',
                'feedback' => 'Best $10 I ever spent on research! The section on responding to reviewer comments saved my manuscript from desk rejection. Highly recommended!',
                'rating' => 5.0,
                'avatar_initials' => 'UK',
                'is_featured' => true,
            ],
        ];

        foreach ($testimonials as $t) {
            Testimonial::updateOrCreate(['name' => $t['name']], $t);
        }
    }
}
