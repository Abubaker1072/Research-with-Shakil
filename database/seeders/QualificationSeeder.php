<?php

namespace Database\Seeders;

use App\Models\Qualification;
use Illuminate\Database\Seeder;

class QualificationSeeder extends Seeder
{
    public function run(): void
    {
        Qualification::truncate();

        $qualifications = [
            [
                'label' => 'Degree',
                'title' => 'PhD in Management',
                'institution' => 'Management & Governance Research',
                'icon' => 'fa-graduation-cap',
                'icon_color' => '#1e3a8a',
                'sort_order' => 1,
            ],
            [
                'label' => 'Academic Role',
                'title' => 'Senior Lecturer & Researcher',
                'institution' => '15+ Years Academic Leadership',
                'icon' => 'fa-chalkboard-teacher',
                'icon_color' => '#0284c7',
                'sort_order' => 2,
            ],
            [
                'label' => 'Google Scholar',
                'title' => 'H-Index 39',
                'institution' => '1,800+ Citations',
                'icon' => 'fa-award',
                'icon_color' => '#eab308',
                'sort_order' => 3,
            ],
            [
                'label' => 'Publications',
                'title' => '90+ Research Papers',
                'institution' => 'Scopus Q1 & SSCI Peer-Reviewed',
                'icon' => 'fa-book',
                'icon_color' => '#166534',
                'sort_order' => 4,
            ],
        ];

        foreach ($qualifications as $qual) {
            Qualification::create($qual);
        }
    }
}
