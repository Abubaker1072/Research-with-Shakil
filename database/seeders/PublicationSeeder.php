<?php

namespace Database\Seeders;

use App\Models\Publication;
use Illuminate\Database\Seeder;

class PublicationSeeder extends Seeder
{
    public function run(): void
    {
        $publications = [
            [
                'title' => 'Workplace Dignity and Employee Engagement: A Systematic Literature Review',
                'authors' => 'Dr. Muhammad Shakil Ahmad, et al.',
                'journal' => 'Journal of Knowledge Management',
                'year' => 2023,
                'type' => 'Systematic Review',
                'abstract' => 'Comprehensive synthesis of empirical studies examining workplace dignity, psychological safety, and organizational citizenship behaviors.',
                'doi' => '10.1108/JKM-2023-0142',
                'url' => 'https://scholar.google.com/',
                'is_highlighted' => true,
            ],
            [
                'title' => 'Servant Leadership in Healthcare Management: Impact on Organizational Sustainability',
                'authors' => 'Dr. Muhammad Shakil Ahmad, et al.',
                'journal' => 'Leadership & Organization Development Journal',
                'year' => 2022,
                'type' => 'Journal Article',
                'abstract' => 'Investigating how servant leadership dimensions foster resilient healthcare systems and staff retention during institutional transformation.',
                'doi' => '10.1108/LODJ-2022-0098',
                'url' => 'https://scholar.google.com/',
                'is_highlighted' => true,
            ],
            [
                'title' => 'Intellectual Capital and Innovation Capability in Higher Education Institutions',
                'authors' => 'Dr. Muhammad Shakil Ahmad, et al.',
                'journal' => 'Journal of Intellectual Capital',
                'year' => 2021,
                'type' => 'Journal Article',
                'abstract' => 'Empirical evaluation of human, structural, and relational capital contributions to commercialization and research output in emerging economies.',
                'doi' => '10.1108/JIC-2021-0054',
                'url' => 'https://scholar.google.com/',
                'is_highlighted' => true,
            ],
            [
                'title' => 'Sustainable Healthcare Management Systems: Economic Vision & Online Readiness',
                'authors' => 'Dr. Muhammad Shakil Ahmad (Principal Investigator)',
                'journal' => 'Ministry of Higher Education & Scientific Research (Oman Grant)',
                'year' => 2021,
                'type' => 'Grant',
                'abstract' => 'Research grant awarded to evaluate national digital health infrastructure and economic strategic vision implementation.',
                'doi' => 'GRANT-OMAN-2021',
                'url' => 'https://scholar.google.com/',
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
                'url' => 'https://scholar.google.com/',
                'is_highlighted' => true,
            ],
            [
                'title' => 'Quality of Work Life and Employee Retention in Public Sector Organizations',
                'authors' => 'Dr. Muhammad Shakil Ahmad, et al.',
                'journal' => 'Social Indicators Research',
                'year' => 2020,
                'type' => 'Journal Article',
                'abstract' => 'Multivariate investigation into non-monetary determinants of organizational commitment and career longevity.',
                'doi' => '10.1007/s11205-020-02315-1',
                'url' => 'https://scholar.google.com/',
                'is_highlighted' => false,
            ],
            [
                'title' => 'Organizational Dignity and Psychological Well-being among Healthcare Professionals',
                'authors' => 'Dr. Muhammad Shakil Ahmad, et al.',
                'journal' => 'Community Mental Health Journal',
                'year' => 2019,
                'type' => 'Journal Article',
                'abstract' => 'Exploring dignity-at-work initiatives to mitigate burnout and turnover intentions in high-stress medical environments.',
                'doi' => '10.1007/s10597-019-00412-x',
                'url' => 'https://scholar.google.com/',
                'is_highlighted' => false,
            ],
            [
                'title' => 'Sustainable Supply Chain Management and Food Quality Standards',
                'authors' => 'Dr. Muhammad Shakil Ahmad, et al.',
                'journal' => 'British Food Journal',
                'year' => 2018,
                'type' => 'Journal Article',
                'abstract' => 'Assessing green supply chain practices and ISO certifications on consumer trust and enterprise performance.',
                'doi' => '10.1108/BFJ-2018-0211',
                'url' => 'https://scholar.google.com/',
                'is_highlighted' => false,
            ],
        ];

        foreach ($publications as $p) {
            Publication::updateOrCreate(['title' => $p['title']], $p);
        }
    }
}
