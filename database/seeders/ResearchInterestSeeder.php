<?php

namespace Database\Seeders;

use App\Models\ResearchInterest;
use Illuminate\Database\Seeder;

class ResearchInterestSeeder extends Seeder
{
    public function run(): void
    {
        $interests = [
            ['title' => 'Workplace Dignity', 'description' => 'Fostering humanized work environments and ethical leadership.', 'sort_order' => 1],
            ['title' => 'Servant Leadership', 'description' => 'Empowerment and follower-centric organizational management.', 'sort_order' => 2],
            ['title' => 'Sustainable Healthcare Management', 'description' => 'Improving public and private healthcare delivery systems.', 'sort_order' => 3],
            ['title' => 'Organizational Sustainability through Innovation', 'description' => 'Transforming corporate practices for long-term impact.', 'sort_order' => 4],
            ['title' => 'Bibliometrics & Science Mapping', 'description' => 'Quantitative mapping of scientific fields using VOSviewer & R.', 'sort_order' => 5],
            ['title' => 'Systematic Literature Reviews & Meta-Analysis', 'description' => 'Rigorous synthesis of healthcare and management evidence.', 'sort_order' => 6],
        ];

        foreach ($interests as $interest) {
            ResearchInterest::updateOrCreate(['title' => $interest['title']], $interest);
        }
    }
}
