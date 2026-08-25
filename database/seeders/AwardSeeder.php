<?php

namespace Database\Seeders;

use App\Models\Award;
use Illuminate\Database\Seeder;

class AwardSeeder extends Seeder
{
    public function run(): void
    {
        Award::truncate();

        $awards = [
            [
                'title' => 'Young Scholar Award (2015)',
                'organization' => 'American Society of Public Administration (ASPA)',
                'year' => '2015',
                'description' => 'Honored for outstanding contributions to public administration research and sustainable management frameworks.',
                'sort_order' => 1,
            ],
            [
                'title' => 'Member - American Society of Public Administration',
                'organization' => 'ASPA International Council',
                'year' => 'Active Member',
                'description' => 'Contributing to global dialogues on public sector dignity and organizational governance.',
                'sort_order' => 2,
            ],
            [
                'title' => 'Community of Inquiry Framework Member',
                'organization' => 'University of Calgary',
                'year' => 'Active Member',
                'description' => 'Collaborating on digital pedagogy, online readiness, and cognitive presence in higher education.',
                'sort_order' => 3,
            ],
            [
                'title' => 'Associate Regional Director',
                'organization' => 'International Institute of Marketing Professionals (IIMP, Canada)',
                'year' => 'Regional Director',
                'description' => 'Leading regional marketing education standards and professional development programs.',
                'sort_order' => 4,
            ],
        ];

        foreach ($awards as $award) {
            Award::create($award);
        }
    }
}
