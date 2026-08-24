<?php

namespace Database\Seeders;

use App\Models\Training;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TrainingSeeder extends Seeder
{
    public function run(): void
    {
        $trainings = [
            [
                'title' => 'Systematic Literature Review (SLR) Masterclass',
                'slug' => Str::slug('Systematic Literature Review (SLR) Masterclass'),
                'icon' => 'fa-book-open',
                'duration_badge' => '2-Day Workshop',
                'type_badge' => 'Scopus / SSCI',
                'badge_color' => '#0369a1',
                'badge_bg' => '#e0f2fe',
                'short_description' => 'Comprehensive masterclass on PRISMA 2020 protocols, search matrix design, quality appraisal, and publishing in Q1 peer-reviewed journals.',
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
                        'desc' => 'PICO/PEO frameworks, CASP checklists, and GRADE evidence scoring.'
                    ],
                    [
                        'title' => 'Q1 Journal Publishing',
                        'desc' => 'Structuring systematic synthesis for top-tier peer-reviewed journals.'
                    ]
                ],
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Qualitative Data Analysis (NVivo & MAXQDA)',
                'slug' => Str::slug('Qualitative Data Analysis (NVivo & MAXQDA)'),
                'icon' => 'fa-laptop-code',
                'duration_badge' => '3-Day Bootcamp',
                'type_badge' => 'NVivo & MAXQDA',
                'badge_color' => '#854d0e',
                'badge_bg' => '#fcf6e5',
                'short_description' => 'Hands-on coding, thematic frameworks, matrix queries, and inter-coder reliability for qualitative research.',
                'modules' => [
                    [
                        'title' => 'Transcript Coding & Nodes',
                        'desc' => 'Importing interview transcriptions, audio, and documents to build node hierarchies.'
                    ],
                    [
                        'title' => 'Thematic Frameworks',
                        'desc' => 'Applying Braun & Clarke 6-stage thematic analysis and grounded theory coding.'
                    ],
                    [
                        'title' => 'Advanced Software Queries',
                        'desc' => 'Running matrix coding, word trees, sentiment analysis, and cross-tabulations.'
                    ],
                    [
                        'title' => 'Rigor & Trustworthiness',
                        'desc' => 'Inter-coder reliability testing and audit trails for thesis defense.'
                    ]
                ],
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Bibliometrics & Science Mapping (VOSviewer)',
                'slug' => Str::slug('Bibliometrics & Science Mapping (VOSviewer)'),
                'icon' => 'fa-project-diagram',
                'duration_badge' => '2-Day Workshop',
                'type_badge' => 'VOSviewer & R',
                'badge_color' => '#166534',
                'badge_bg' => '#f0fdf4',
                'short_description' => 'Harvesting Scopus & Web of Science data, co-citation mapping, keyword clustering, and Bibliometrix integration.',
                'modules' => [
                    [
                        'title' => 'Database Data Harvesting',
                        'desc' => 'Exporting formatted RIS and BibTeX records from Scopus and Web of Science.'
                    ],
                    [
                        'title' => 'Co-Citation & Network Maps',
                        'desc' => 'Constructing author networks, journal co-citations, and keyword clusters.'
                    ],
                    [
                        'title' => 'Software Visualizations',
                        'desc' => 'Overlay visualization, density maps, and Bibliometrix R-package integration.'
                    ],
                    [
                        'title' => 'High-Impact Reporting',
                        'desc' => 'Translating science mapping outputs into publication-ready bibliometric manuscripts.'
                    ]
                ],
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'Quantitative Modeling (PLS-SEM & AMOS)',
                'slug' => Str::slug('Quantitative Modeling (PLS-SEM & AMOS)'),
                'icon' => 'fa-chart-line',
                'duration_badge' => '3-Day Bootcamp',
                'type_badge' => 'SmartPLS 4 & AMOS',
                'badge_color' => '#991b1b',
                'badge_bg' => '#fef2f2',
                'short_description' => 'Structural equation modeling, reflective/formative measurement, mediation/moderation bootstrapping, and scale validation.',
                'modules' => [
                    [
                        'title' => 'Structural Equation Modeling',
                        'desc' => 'Evaluating reflective and formative measurement and structural models.'
                    ],
                    [
                        'title' => 'Mediation & Moderation',
                        'desc' => 'Bootstrapping mediation effects, slope analysis, and multi-group moderation (MGA).'
                    ],
                    [
                        'title' => 'Scale Construct Validation',
                        'desc' => 'Confirmatory Factor Analysis (CFA), convergent & discriminant validity (HTMT).'
                    ],
                    [
                        'title' => 'Statistical Reporting',
                        'desc' => 'APA table formatting and SmartPLS 4 / AMOS report generation.'
                    ]
                ],
                'is_active' => true,
                'sort_order' => 4,
            ],
            [
                'title' => 'Academic Grant Writing & Funding Proposals',
                'slug' => Str::slug('Academic Grant Writing & Funding Proposals'),
                'icon' => 'fa-file-signature',
                'duration_badge' => '2-Day Seminar',
                'type_badge' => 'HEC & International',
                'badge_color' => '#6b21a8',
                'badge_bg' => '#faf5ff',
                'short_description' => 'Proposal architecture, work packages, Gantt charts, budget lines, and pitching to international research funding bodies.',
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
                        'desc' => 'Targeting HEC NRPU, TRC Oman, Horizon Europe, and international agency calls.'
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
                'title' => 'Faculty Development & ORIC Advisory',
                'slug' => Str::slug('Faculty Development & ORIC Advisory'),
                'icon' => 'fa-users-cog',
                'duration_badge' => '1-Day Executive',
                'type_badge' => 'ORIC Leadership',
                'badge_color' => '#334155',
                'badge_bg' => '#f8fafc',
                'short_description' => 'ORIC strategic roadmaps, commercialization policy, faculty citation growth, and effective PhD/DBA supervision frameworks.',
                'modules' => [
                    [
                        'title' => 'ORIC Strategic Roadmaps',
                        'desc' => 'Institutional commercialization policies and industry collaboration.'
                    ],
                    [
                        'title' => 'Faculty Output Productivity',
                        'desc' => 'Mentorship frameworks to multiply Scopus Q1 and SSCI publications.'
                    ],
                    [
                        'title' => 'Citation & H-Index Growth',
                        'desc' => 'Building research visibility, Google Scholar profiles, and institutional rankings.'
                    ],
                    [
                        'title' => 'Thesis Supervision Best Practices',
                        'desc' => 'Frameworks for effective PhD/DBA mentorship and viva defense.'
                    ]
                ],
                'is_active' => true,
                'sort_order' => 6,
            ],
        ];

        foreach ($trainings as $training) {
            Training::updateOrCreate(['slug' => $training['slug']], $training);
        }
    }
}
