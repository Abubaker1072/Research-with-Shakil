<?php

namespace Database\Seeders;

use App\Models\Training;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TrainingSeeder extends Seeder
{
    public function run(): void
    {
        Training::truncate();

        $trainings = [
            [
                'title' => 'Research Paper Writing',
                'slug' => Str::slug('Research Paper Writing'),
                'icon' => 'fa-feather-alt',
                'duration_badge' => '2-Day Workshop',
                'type_badge' => 'Academic Writing',
                'badge_color' => '#0369a1',
                'badge_bg' => '#e0f2fe',
                'short_description' => 'Comprehensive guidance on crafting research paper manuscripts, structuring arguments, abstract formulation, and academic style.',
                'modules' => [
                    [
                        'title' => 'Manuscript Architecture',
                        'desc' => 'Structuring IMRAD sections, title formulation, and executive summary writing.'
                    ],
                    [
                        'title' => 'Literature Gap & Rationale',
                        'desc' => 'Framing novelty, problem statements, and clear research hypotheses.'
                    ],
                    [
                        'title' => 'Academic Style & Flow',
                        'desc' => 'Enhancing clarity, academic vocabulary, tone, and citation ethics.'
                    ],
                    [
                        'title' => 'Submission Readiness',
                        'desc' => 'Formatting tables, figures, cover letters, and checklist verification.'
                    ]
                ],
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Dissertation Writing',
                'slug' => Str::slug('Dissertation Writing'),
                'icon' => 'fa-graduation-cap',
                'duration_badge' => '3-Day Bootcamp',
                'type_badge' => 'PhD / Master\'s',
                'badge_color' => '#1e3a8a',
                'badge_bg' => '#e0e7ff',
                'short_description' => 'End-to-end guidance for PhD and Master\'s candidates on thesis proposals, chapter writing, methodology defense, and viva prep.',
                'modules' => [
                    [
                        'title' => 'Proposal Formulation',
                        'desc' => 'Developing robust research questions, scope, and theoretical foundations.'
                    ],
                    [
                        'title' => 'Chapter Structuring',
                        'desc' => 'Writing literature review, methodology, findings, and discussion chapters.'
                    ],
                    [
                        'title' => 'Viva & Defense Prep',
                        'desc' => 'Mock viva defense sessions, slide deck design, and handling examiner Q&A.'
                    ],
                    [
                        'title' => 'Ethics & Compliance',
                        'desc' => 'Navigating IRB approvals, participant consent, and academic integrity.'
                    ]
                ],
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Systematic Literature Review and Protocol Development',
                'slug' => Str::slug('Systematic Literature Review and Protocol Development'),
                'icon' => 'fa-book-open',
                'duration_badge' => '2-Day Masterclass',
                'type_badge' => 'PRISMA 2020',
                'badge_color' => '#0369a1',
                'badge_bg' => '#e0f2fe',
                'short_description' => 'Mastering PRISMA 2020 protocols, search matrix design, quality appraisal (PICO/PEO), and systematic synthesis for high-impact journals.',
                'modules' => [
                    [
                        'title' => 'PRISMA 2020 Protocol',
                        'desc' => 'Protocol formulation, registration, search matrix design, and flowchart generation.'
                    ],
                    [
                        'title' => 'Advanced Search Strings',
                        'desc' => 'Constructing Boolean operators for Scopus, Web of Science, and PubMed.'
                    ],
                    [
                        'title' => 'Quality Appraisal & Bias',
                        'desc' => 'PICO/PEO frameworks, CASP checklists, and evidence scoring.'
                    ],
                    [
                        'title' => 'High-Impact Synthesis',
                        'desc' => 'Structuring systematic literature review manuscripts for publication.'
                    ]
                ],
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'Thematic Analysis',
                'slug' => Str::slug('Thematic Analysis'),
                'icon' => 'fa-list-ol',
                'duration_badge' => '2-Day Workshop',
                'type_badge' => 'Qualitative Research',
                'badge_color' => '#166534',
                'badge_bg' => '#f0fdf4',
                'short_description' => 'Hands-on training in Braun & Clarke thematic analysis, inductive/deductive coding, codebook formulation, and thematic synthesis.',
                'modules' => [
                    [
                        'title' => 'Braun & Clarke Framework',
                        'desc' => '6-stage reflexive thematic analysis process and data familiarization.'
                    ],
                    [
                        'title' => 'Codebook Formulation',
                        'desc' => 'Initial coding, generating themes, defining and naming thematic structures.'
                    ],
                    [
                        'title' => 'Qualitative Rigor & Trustworthiness',
                        'desc' => 'Member checking, reflexivity, audit trails, and inter-coder reliability.'
                    ],
                    [
                        'title' => 'Writing Qualitative Results',
                        'desc' => 'Presenting qualitative quotes, thematic maps, and narrative synthesis.'
                    ]
                ],
                'is_active' => true,
                'sort_order' => 4,
            ],
            [
                'title' => 'Grant Writing',
                'slug' => Str::slug('Grant Writing'),
                'icon' => 'fa-file-signature',
                'duration_badge' => '2-Day Seminar',
                'type_badge' => 'Research Funding',
                'badge_color' => '#6b21a8',
                'badge_bg' => '#faf5ff',
                'short_description' => 'Proposal architecture, work packages, Gantt charts, budget lines, and pitching to national and international research funding bodies.',
                'modules' => [
                    [
                        'title' => 'Proposal Architecture',
                        'desc' => 'Structuring rationale, state-of-the-art literature gaps, and research objectives.'
                    ],
                    [
                        'title' => 'Budget & Work Packages',
                        'desc' => 'Designing project milestones, Gantt charts, risk management, and budget lines.'
                    ],
                    [
                        'title' => 'Funding Agencies',
                        'desc' => 'Targeting HEC NRPU, Oman Research Council, and international agency calls.'
                    ],
                    [
                        'title' => 'Reviewer Defense Strategy',
                        'desc' => 'Anticipating reviewer critiques and pitching proposal value proposition.'
                    ]
                ],
                'is_active' => true,
                'sort_order' => 5,
            ],
            [
                'title' => 'How to write research papers for high ranked journals',
                'slug' => Str::slug('How to write research papers for high ranked journals'),
                'icon' => 'fa-award',
                'duration_badge' => '2-Day Seminar',
                'type_badge' => 'Scopus Q1 / SSCI',
                'badge_color' => '#854d0e',
                'badge_bg' => '#fef9c3',
                'short_description' => 'Strategies for publishing in Scopus Q1 and SSCI indexed journals, handling peer review, and responding to reviewer comments.',
                'modules' => [
                    [
                        'title' => 'Journal Selection & Targeting',
                        'desc' => 'Analyzing aim, scope, impact factor, and desk reject criteria of Q1 journals.'
                    ],
                    [
                        'title' => 'High-Impact Manuscript Writing',
                        'desc' => 'Crafting compelling introduction, theoretical contributions, and discussions.'
                    ],
                    [
                        'title' => 'Navigating Peer Review',
                        'desc' => 'Understanding editor decisions, reviewer expectations, and revisions.'
                    ],
                    [
                        'title' => 'Response to Reviewers Matrix',
                        'desc' => 'Drafting persuasive, point-by-point author responses to reviewer critiques.'
                    ]
                ],
                'is_active' => true,
                'sort_order' => 6,
            ],
        ];

        foreach ($trainings as $training) {
            Training::create($training);
        }
    }
}
