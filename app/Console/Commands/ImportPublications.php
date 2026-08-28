<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Publication;

class ImportPublications extends Command
{
    protected $signature = 'publications:import {--file= : Optional path to json file}';
    protected $description = 'Import and sync all peer-reviewed research publications for Dr. Muhammad Shakil Ahmad';

    public function handle()
    {
        $this->info('Starting Google Scholar & OpenAlex publications import...');

        $jsonFile = $this->option('file') ?: base_path('valid_scholar_pubs.json');

        if (!file_exists($jsonFile)) {
            $this->error("Dataset file not found at: {$jsonFile}");
            return 1;
        }

        $content = file_get_contents($jsonFile);
        $publications = json_decode($content, true);

        if (!is_array($publications)) {
            $this->error('Failed to parse JSON content.');
            return 1;
        }

        $count = 0;
        foreach ($publications as $p) {
            Publication::updateOrCreate(
                ['title' => $p['title']],
                [
                    'authors' => $p['authors'] ?? 'Dr. Muhammad Shakil Ahmad',
                    'journal' => $p['journal'] ?? 'Academic Publication',
                    'year' => (int)($p['year'] ?? 2023),
                    'type' => $p['type'] ?? 'Journal Article',
                    'abstract' => $p['abstract'] ?? null,
                    'url' => $p['url'] ?? 'https://scholar.google.com/citations?user=Kr6MOa0AAAAJ&hl=en&oi=ao',
                    'doi' => $p['doi'] ?? null,
                    'is_highlighted' => (bool)($p['is_highlighted'] ?? false),
                ]
            );
            $count++;
        }

        $this->info("Successfully imported and synced {$count} publications!");
        return 0;
    }
}
