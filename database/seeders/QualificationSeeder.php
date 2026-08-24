<?php

namespace Database\Seeders;

use App\Models\Qualification;
use Illuminate\Database\Seeder;

class QualificationSeeder extends Seeder
{
    public function run(): void
    {
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
                'label' => 'Institution',
                'title' => 'Teesside University UK',
                'institution' => 'Teesside International Business School',
                'icon' => 'fa-university',
                'icon_color' => '#1e3a8a',
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
                'title' => '53+ SSCI Papers',
                'institution' => 'Scopus Q1 Peer-Reviewed',
                'icon' => 'fa-book',
                'icon_color' => '#166534',
                'sort_order' => 4,
            ],
        ];

        foreach ($qualifications as $qual) {
            Qualification::updateOrCreate(['label' => $qual['label']], $qual);
        }
    }
}
