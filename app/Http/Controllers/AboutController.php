<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $researchInterests = [
            'Workplace Dignity',
            'Servant Leadership',
            'Sustainable Healthcare Management',
            'Organizational Sustainability through Innovation',
            'Bibliometrics & Science Mapping',
            'Systematic Literature Reviews & Meta-Analysis',
        ];

        $awardsAndMemberships = [
            [
                'title' => 'Young Scholar Award (2015)',
                'organization' => 'American Society of Public Administration (ASPA)',
                'year' => '2015',
                'description' => 'Honored for outstanding contributions to public administration research and sustainable management frameworks.',
            ],
            [
                'title' => 'Member - American Society of Public Administration',
                'organization' => 'ASPA International Council',
                'year' => 'Active Member',
                'description' => 'Contributing to global dialogues on public sector dignity and organizational governance.',
            ],
            [
                'title' => 'Community of Inquiry Framework Member',
                'organization' => 'University of Calgary',
                'year' => 'Active Member',
                'description' => 'Collaborating on digital pedagogy, online readiness, and cognitive presence in higher education.',
            ],
            [
                'title' => 'Associate Regional Director',
                'organization' => 'International Institute of Marketing Professionals (IIMP, Canada)',
                'year' => 'Regional Director',
                'description' => 'Leading regional marketing education standards and professional development programs.',
            ],
            [
                'title' => 'In-charge, ORIC (Office of Research Innovation & Commercialization)',
                'organization' => 'University Leadership',
                'year' => 'Academic Leadership',
                'description' => 'Steering university-industry linkages, technology transfer, and research grant compliance.',
            ],
        ];

        return view('pages.about', compact('researchInterests', 'awardsAndMemberships'));
    }
}
