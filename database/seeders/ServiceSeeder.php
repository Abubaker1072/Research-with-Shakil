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
            // For Researchers & Students
            [
                'title' => 'Assistance in Proposal Writing',
                'slug' => Str::slug('Assistance in Proposal Writing'),
                'icon' => 'fas fa-file-alt',
                'image' => 'consultation_prog_2.jpg',
                'short_description' => 'Building a proposal that clears committee review the first time: a clear problem statement, justified methodology, and objectives answerable within timeline.',
                'full_description' => 'Building a proposal that clears committee review the first time: a clear problem statement, justified methodology, and objectives that are answerable within your timeline.',
                'features' => [
                    'Clear Problem Statement Formulation',
                    'Justified Methodology & Research Design',
                    'Committee-Ready Proposal Structure',
                    'Timeline & Feasibility Alignment'
                ],
                'target_audience' => 'PhD Candidates & Master\'s Researchers',
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Help with the Research Publication Process',
                'slug' => Str::slug('Help with the Research Publication Process'),
                'icon' => 'fas fa-feather-alt',
                'image' => 'consultation_prog_3.jpg',
                'short_description' => 'Guidance through journal selection, positioning your contribution, navigating peer review, and drafting response-to-reviewers letters.',
                'full_description' => 'Guidance through journal selection, positioning your contribution, navigating peer review, and drafting a response-to-reviewers letter that gets you across the finish line.',
                'features' => [
                    'Journal Selection & Impact Matching',
                    'Positioning Research Contribution',
                    'Navigating Peer Review & Revisions',
                    'Response-to-Reviewers Drafting'
                ],
                'target_audience' => 'Academic Researchers & Faculty',
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Dissertation Writing Consultancy',
                'slug' => Str::slug('Dissertation Writing Consultancy'),
                'icon' => 'fas fa-graduation-cap',
                'image' => 'course_lit_review_thumb.png',
                'short_description' => 'Chapter-by-chapter support through problem formulation, literature review, methodology design, data analysis, and defense preparation.',
                'full_description' => 'Chapter-by-chapter support through problem formulation, literature review, methodology design, data analysis, and defense preparation.',
                'features' => [
                    'Chapter-by-Chapter Structural Guidance',
                    'Literature Synthesis & Gap Definition',
                    'Data Analysis Strategy & Interpretation',
                    'Defense Mock Sessions & Q&A Preparation'
                ],
                'target_audience' => 'PhD & DBA Candidates',
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'Systematic Literature Review Support',
                'slug' => Str::slug('Systematic Literature Review Support'),
                'icon' => 'fas fa-book-open',
                'image' => 'consultation_prog_4.jpg',
                'short_description' => 'Defining search strategy, applying inclusion/exclusion criteria (e.g. PRISMA), and synthesizing findings into a credible evidence base.',
                'full_description' => 'Defining your search strategy, applying inclusion/exclusion criteria (e.g., PRISMA), and synthesizing findings into a credible evidence base for your study.',
                'features' => [
                    'Search Strategy & String Design',
                    'PRISMA Inclusion/Exclusion Protocol',
                    'Quality Appraisal & Risk of Bias',
                    'Evidence Base Synthesis for Publication'
                ],
                'target_audience' => 'Scholars & Institutional PIs',
                'is_active' => true,
                'sort_order' => 4,
            ],

            // For Organizations
            [
                'title' => 'Workplace Policy Design & Review',
                'slug' => Str::slug('Workplace Policy Design & Review'),
                'icon' => 'fas fa-balance-scale',
                'image' => 'consultation_prog_5.jpg',
                'short_description' => 'Auditing and rebuilding HR policies so they are consistent, fair, and legally sound — not just copied from a template.',
                'full_description' => 'Auditing and rebuilding HR policies (performance management, grievance handling, employee relations) so they\'re consistent, fair, and legally sound — not just copied from a template.',
                'features' => [
                    'Performance Management Policy Audit',
                    'Grievance Handling & Employee Relations',
                    'Custom Legal & Operational Alignment',
                    'Fairness & Consistency Verification'
                ],
                'target_audience' => 'Organizations & HR Leadership',
                'is_active' => true,
                'sort_order' => 5,
            ],
            [
                'title' => 'Organizational Innovation Consulting',
                'slug' => Str::slug('Organizational Innovation Consulting'),
                'icon' => 'fas fa-lightbulb',
                'image' => 'hero_img_2.jpg',
                'short_description' => 'Helping leadership teams build structures and culture that let innovation happen consistently, rather than depending on individual initiative.',
                'full_description' => 'Helping leadership teams build the structures and culture that let innovation happen consistently, rather than depending on individual initiative.',
                'features' => [
                    'Innovation Infrastructure & Frameworks',
                    'Culture Building & Systematic Ideation',
                    'Cross-Functional Collaboration Systems',
                    'Measurable Innovation Metrics'
                ],
                'target_audience' => 'Executive Teams & Corporate Leadership',
                'is_active' => true,
                'sort_order' => 6,
            ],
            [
                'title' => 'Servant Leadership Practice',
                'slug' => Str::slug('Servant Leadership Practice'),
                'icon' => 'fas fa-hands-helping',
                'image' => 'dr_shakil_presentation_quote.jpg',
                'short_description' => 'Translating servant leadership principles into concrete manager behaviors and evaluation criteria for daily organizational operations.',
                'full_description' => 'Translating servant leadership principles into concrete manager behaviors and evaluation criteria, so it becomes how the organization actually operates, not just a slogan in the handbook.',
                'features' => [
                    'Behavioral Criteria & Competency Maps',
                    'Managerial Evaluation & Feedback Loops',
                    'Operational Servant Leadership Embedding',
                    'Leadership Workshop & Coaching'
                ],
                'target_audience' => 'Managers & HR Leadership',
                'is_active' => true,
                'sort_order' => 7,
            ],
            [
                'title' => 'Sustainable HR Management Systems',
                'slug' => Str::slug('Sustainable HR Management Systems'),
                'icon' => 'fas fa-leaf',
                'image' => 'hero_img_4.jpg',
                'short_description' => 'Designing HR systems built for long-term organizational health: retention, employee wellbeing, and workforce planning beyond single budget cycles.',
                'full_description' => 'Designing HR systems built for long-term organizational health: retention, employee wellbeing, and workforce planning that holds up beyond a single budget cycle.',
                'features' => [
                    'Long-Term Retention Architecture',
                    'Employee Wellbeing Frameworks',
                    'Strategic Workforce Planning',
                    'Sustainable Organizational Health'
                ],
                'target_audience' => 'CHROs & Strategic HR Directors',
                'is_active' => true,
                'sort_order' => 8,
            ],
            [
                'title' => 'Workplace Dignity Assessments',
                'slug' => Str::slug('Workplace Dignity Assessments'),
                'icon' => 'fas fa-shield-alt',
                'image' => 'dr_shakil_symposium_speaker.jpg',
                'short_description' => 'Reviewing treatment of employees across all levels, identifying where policy or culture quietly undermines morale and retention.',
                'full_description' => 'Reviewing how employees are treated across every level of the organization, and identifying where policy or culture is quietly undermining morale and retention.',
                'features' => [
                    'Cross-Level Dignity Audits',
                    'Morale & Retention Bottleneck Identification',
                    'Culture & Behavioral Risk Assessment',
                    'Actionable Dignity Restoration Plan'
                ],
                'target_audience' => 'Leadership Teams & HR Heads',
                'is_active' => true,
                'sort_order' => 9,
            ],
        ];

        Service::truncate();

        foreach ($services as $s) {
            Service::create($s);
        }
    }
}
