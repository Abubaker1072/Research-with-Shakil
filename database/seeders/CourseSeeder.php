<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            [
                'title' => 'Systematic Literature Review : A Practical Guide',
                'slug' => Str::slug('Systematic Literature Review : A Practical Guide'),
                'rating' => 4.4,
                'reviews_count' => 680,
                'duration' => '2 total hours',
                'lectures_count' => 32,
                'level' => 'All Levels',
                'price' => 9.99,
                'category' => 'Literature Review',
                'description' => 'Systematic Literature Review, PRISMA, PICO, PEO, GRADE framework for high ranked journals.',
                'udemy_url' => 'https://www.udemy.com/user/dr-muhammad-shakil-ahmad/',
                'is_featured' => true,
            ],
            [
                'title' => 'Master Thematic Analysis: A Comprehensive Step-by-Step Guide',
                'slug' => Str::slug('Master Thematic Analysis: A Comprehensive Step-by-Step Guide'),
                'rating' => 4.3,
                'reviews_count' => 51,
                'duration' => '3.5 total hours',
                'lectures_count' => 25,
                'level' => 'All Levels',
                'price' => 9.99,
                'category' => 'Qualitative Research',
                'description' => 'Transform your research skills by learning thematic analysis with Braun & Clarke coding framework.',
                'udemy_url' => 'https://www.udemy.com/user/dr-muhammad-shakil-ahmad/',
                'is_featured' => true,
            ],
            [
                'title' => 'How to Conduct a Meta-analysis: A Practical Guide',
                'slug' => Str::slug('How to Conduct a Meta-analysis: A Practical Guide'),
                'rating' => 4.1,
                'reviews_count' => 183,
                'duration' => '2.5 total hours',
                'lectures_count' => 34,
                'level' => 'All Levels',
                'price' => 9.99,
                'category' => 'Quantitative Research',
                'description' => '#1 Meta-Analysis Course for Researchers: A Practical guide to effect sizes, forest plots & bias.',
                'udemy_url' => 'https://www.udemy.com/user/dr-muhammad-shakil-ahmad/',
                'is_featured' => true,
            ],
            [
                'title' => 'The Literature Review : A Comprehensive Six Step Guide',
                'slug' => Str::slug('The Literature Review : A Comprehensive Six Step Guide'),
                'rating' => 4.3,
                'reviews_count' => 78,
                'duration' => '2 total hours',
                'lectures_count' => 28,
                'level' => 'All Levels',
                'price' => 9.99,
                'category' => 'Literature Review',
                'description' => 'The step-by-step process using an applied critical-thinking framework to synthesize literature.',
                'udemy_url' => 'https://www.udemy.com/user/dr-muhammad-shakil-ahmad/',
                'is_featured' => true,
            ],
            [
                'title' => 'Bibliometric Analysis: A Theoretical Stepwise Guide',
                'slug' => Str::slug('Bibliometric Analysis: A Theoretical Stepwise Guide'),
                'rating' => 4.2,
                'reviews_count' => 138,
                'duration' => '2.5 total hours',
                'lectures_count' => 18,
                'level' => 'All Levels',
                'price' => 9.99,
                'category' => 'Bibliometrics',
                'description' => 'Mastering Bibliometrics; Step-by-Step Guide; Co-Citation networks & VOSviewer science mapping.',
                'udemy_url' => 'https://www.udemy.com/user/dr-muhammad-shakil-ahmad/',
                'is_featured' => true,
            ],
            [
                'title' => 'How to Conduct Qualitative Research - Researchers Guide',
                'slug' => Str::slug('How to Conduct Qualitative Research - Researchers Guide'),
                'rating' => 4.3,
                'reviews_count' => 75,
                'duration' => '2.5 total hours',
                'lectures_count' => 25,
                'level' => 'Expert',
                'price' => 9.99,
                'category' => 'Qualitative Research',
                'description' => 'Fundamentals of Qualitative Research design, phenomenology, grounded theory & interview coding.',
                'udemy_url' => 'https://www.udemy.com/user/dr-muhammad-shakil-ahmad/',
                'is_featured' => true,
            ],
            [
                'title' => 'Qualitative Dissertation Proposal: Step-by-Step Guide',
                'slug' => Str::slug('Qualitative Dissertation Proposal: Step-by-Step Guide'),
                'rating' => 4.8,
                'reviews_count' => 43,
                'duration' => '4.5 total hours',
                'lectures_count' => 25,
                'level' => 'All Levels',
                'price' => 9.99,
                'category' => 'Dissertation Help',
                'description' => 'Write a winning dissertation proposal that satisfies defense committees and IRB ethical clearance.',
                'udemy_url' => 'https://www.udemy.com/user/dr-muhammad-shakil-ahmad/',
                'is_featured' => false,
            ],
            [
                'title' => 'How to Write a Scientific Paper for High Ranked Journals',
                'slug' => Str::slug('How to Write a Scientific Paper for High Ranked Journals'),
                'rating' => 4.6,
                'reviews_count' => 255,
                'duration' => '2.5 total hours',
                'lectures_count' => 37,
                'level' => 'All Levels',
                'price' => 9.99,
                'category' => 'Journal Publishing',
                'description' => 'Insider secrets from a journal reviewer and editor on structuring papers for top SSCI and Scopus Q1/Q2 journals.',
                'udemy_url' => 'https://www.udemy.com/user/dr-muhammad-shakil-ahmad/',
                'is_featured' => false,
            ],
            [
                'title' => 'Dissertation Writing Bootcamp: Defend with Distinction',
                'slug' => Str::slug('Dissertation Writing Bootcamp: Defend with Distinction'),
                'rating' => 4.5,
                'reviews_count' => 29,
                'duration' => '6.5 total hours',
                'lectures_count' => 41,
                'level' => 'All Levels',
                'price' => 9.99,
                'category' => 'Dissertation Help',
                'description' => 'Complete end-to-end guide to writing, revising, formatting, and defending your PhD or Master\'s thesis.',
                'udemy_url' => 'https://www.udemy.com/user/dr-muhammad-shakil-ahmad/',
                'is_featured' => false,
            ],
        ];

        foreach ($courses as $c) {
            Course::updateOrCreate(['slug' => $c['slug']], $c);
        }
    }
}
