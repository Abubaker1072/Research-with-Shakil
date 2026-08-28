<?php

namespace Database\Seeders;

use App\Models\Publication;
use Illuminate\Database\Seeder;

class PublicationSeeder extends Seeder
{
    public function run(): void
    {
        $scholarUrl = 'https://scholar.google.com/citations?user=Kr6MOa0AAAAJ&hl=en&oi=ao';

        $jsonFile = base_path('valid_scholar_pubs.json');

        if (file_exists($jsonFile)) {
            $jsonContent = file_get_contents($jsonFile);
            $publications = json_decode($jsonContent, true) ?: [];

            foreach ($publications as $p) {
                Publication::updateOrCreate(
                    ['title' => $p['title']],
                    [
                        'authors' => $p['authors'] ?? 'Dr. Muhammad Shakil Ahmad',
                        'journal' => $p['journal'] ?? 'Academic Publication',
                        'year' => (int)($p['year'] ?? 2023),
                        'type' => $p['type'] ?? 'Journal Article',
                        'abstract' => $p['abstract'] ?? null,
                        'url' => $p['url'] ?? $scholarUrl,
                        'doi' => $p['doi'] ?? null,
                        'is_highlighted' => (bool)($p['is_highlighted'] ?? false),
                    ]
                );
            }
        }

        // Ensure key Grants & Featured Reviews are present
        $grantsAndHighlights = [
            [
                'title' => 'Sustainable Healthcare Management Systems: Economic Vision & Online Readiness',
                'authors' => 'Dr. Muhammad Shakil Ahmad (Principal Investigator)',
                'journal' => 'Ministry of Higher Education & Scientific Research (Oman Grant)',
                'year' => 2021,
                'type' => 'Grant',
                'abstract' => 'Research grant awarded to evaluate national digital health infrastructure and economic strategic vision implementation.',
                'doi' => 'GRANT-OMAN-2021',
                'url' => $scholarUrl,
                'is_highlighted' => true,
            ],
            [
                'title' => 'Higher Education Quality & Digital Transformation Assessment',
                'authors' => 'Dr. Muhammad Shakil Ahmad (Lead Researcher)',
                'journal' => 'Higher Education Commission (HEC), Pakistan Grant',
                'year' => 2020,
                'type' => 'Grant',
                'abstract' => 'Nationwide grant project assessing institutional readiness and faculty development for online higher education delivery.',
                'doi' => 'GRANT-HEC-2020',
                'url' => $scholarUrl,
                'is_highlighted' => true,
            ],
        ];

        foreach ($grantsAndHighlights as $gh) {
            Publication::updateOrCreate(['title' => $gh['title']], $gh);
        }
    }
}
