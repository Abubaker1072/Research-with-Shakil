<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title' => 'Dissertation & Thesis Coaching',
                'slug' => Str::slug('Dissertation & Thesis Coaching'),
                'icon' => 'fas fa-graduation-cap',
                'image' => 'course_lit_review_thumb.png',
                'short_description' => '1-on-1 personalized guidance for thesis proposal drafting, research methodology design, and defense preparation.',
                'full_description' => 'Comprehensive mentorship tailored for Master\'s and PhD candidates. Detailed guidance is provided for literature gap identification, research question formulation, methodology selection, data collection strategy, and defense slide deck optimization.',
                'features' => [
                    'Proposal Structuring & Review',
                    'Theoretical Framework Alignment',
                    'Defense Mock Sessions & Q&A Prep',
                    'IRB / Ethics Committee Guidance'
                ],
                'target_audience' => 'PhD Candidates & Master\'s Researchers',
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Systematic Literature Review & Meta-Analysis Consulting',
                'slug' => Str::slug('Systematic Literature Review & Meta-Analysis Consulting'),
                'icon' => 'fas fa-book-open',
                'image' => 'course_slr_thumb.png',
                'short_description' => 'End-to-end guidance on PRISMA guidelines, protocol registration, search matrix, data extraction & meta-analytic modeling.',
                'full_description' => 'Transform scattered literature into high-impact systematic reviews. Structured advisory covers PRISMA 2020 compliance, database search strings (Scopus, Web of Science, PubMed), quality appraisal tools, and effect size synthesis.',
                'features' => [
                    'PRISMA 2020 Compliant Protocol',
                    'Search String & Database Strategy',
                    'Risk of Bias & Quality Appraisal',
                    'Bibliometric & Meta-Analysis Setup'
                ],
                'target_audience' => 'Academic Researchers & Faculty',
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Scientific Paper Writing & Journal Submission Support',
                'slug' => Str::slug('Scientific Paper Writing & Journal Submission Support'),
                'icon' => 'fas fa-feather-alt',
                'image' => 'course_qualitative_thumb.png',
                'short_description' => 'Expert editing, journal targeting, response to reviewers, and structural polishing for Scopus & WOS indexed journals.',
                'full_description' => 'Maximize your publication success rate in top-tier journals (SSCI, SCI, Scopus Q1/Q2). Receive detailed review of your manuscript structure, Academic English flow, reviewer response letter drafting, and journal matching.',
                'features' => [
                    'Journal Selection & Impact Matching',
                    'Pre-submission Peer Review',
                    'Response to Reviewers Drafting',
                    'Academic English & Style Refinement'
                ],
                'target_audience' => 'Early & Mid-career Researchers',
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'Grant Writing & Research Advisory',
                'slug' => Str::slug('Grant Writing & Research Advisory'),
                'icon' => 'fas fa-award',
                'image' => 'course_bibliometrics_thumb.png',
                'short_description' => 'Consultancy for national and international research grant applications (HEC, Ministry grants, international funds).',
                'full_description' => 'Securing competitive research funding requires a compelling narrative, realistic budget breakdown, clear milestone matrix, and demonstrated societal impact. Leverage Dr. Shakil\'s track record in securing grants from Oman MoHESR and HEC Pakistan.',
                'features' => [
                    'Grant Proposal Concept Notes',
                    'Budget & Milestones Planning',
                    'Societal & Economic Impact Framing',
                    'ORIC / Institutional Alignment'
                ],
                'target_audience' => 'Universities & Institutional PIs',
                'is_active' => true,
                'sort_order' => 4,
            ],
            [
                'title' => '1-on-1 Academic & Career Life Coaching',
                'slug' => Str::slug('1-on-1 Academic & Career Life Coaching'),
                'icon' => 'fas fa-user-tie',
                'image' => 'course_meta_thumb.png',
                'short_description' => 'Personalized executive coaching to overcome academic burnout, establish career direction, and build academic brand.',
                'full_description' => 'Tailored coaching sessions focusing on productivity systems, research career roadmap, managing academic stress, building ORCID / Google Scholar visibility, and achieving work-life balance in higher education.',
                'features' => [
                    'Academic Career Roadmap',
                    'Burnout & Productivity Coaching',
                    'Personal Academic Branding',
                    'Time Management & Focus Frameworks'
                ],
                'target_audience' => 'Academicians & Corporate Executives',
                'is_active' => true,
                'sort_order' => 5,
            ],
        ];

        foreach ($services as $s) {
            Service::updateOrCreate(['slug' => $s['slug']], $s);
        }
    }
}
