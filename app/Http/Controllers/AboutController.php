<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\Gallery;
use App\Models\Qualification;
use App\Models\ResearchInterest;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class AboutController extends Controller
{
    public function index()
    {
        $researchInterests = Schema::hasTable('research_interests') 
            ? ResearchInterest::orderBy('sort_order')->pluck('title')->toArray() 
            : [
                'Workplace Dignity',
                'Servant Leadership',
                'Sustainable Healthcare Management',
                'Organizational Sustainability through Innovation',
                'Bibliometrics & Science Mapping',
                'Systematic Literature Reviews & Meta-Analysis',
            ];

        $awardsAndMemberships = Schema::hasTable('awards') 
            ? Award::orderBy('sort_order')->get() 
            : collect([]);

        $qualifications = Schema::hasTable('qualifications') 
            ? Qualification::orderBy('sort_order')->get() 
            : collect([
                (object)['icon' => 'fa-graduation-cap', 'icon_color' => '#1e3a8a', 'label' => 'Degree', 'title' => 'PhD in Management'],
                (object)['icon' => 'fa-university', 'icon_color' => '#1e3a8a', 'label' => 'Institution', 'title' => 'Teesside University UK'],
                (object)['icon' => 'fa-award', 'icon_color' => '#eab308', 'label' => 'Google Scholar', 'title' => 'H-Index 39'],
                (object)['icon' => 'fa-book', 'icon_color' => '#166534', 'label' => 'Publications', 'title' => '53+ SSCI Papers'],
            ]);

        $galleryImages = Schema::hasTable('galleries') 
            ? Gallery::whereIn('page', ['about', 'trainings', 'all'])->where('is_active', true)->orderBy('sort_order')->take(4)->get() 
            : collect([]);
        
        $stats = [
            'learners' => SiteSetting::get('stat_learners', '16,000+'),
            'ssci_papers' => SiteSetting::get('stat_ssci_papers', '53+ Papers'),
            'h_index' => SiteSetting::get('stat_h_index', '39'),
        ];

        return view('pages.about', compact('researchInterests', 'awardsAndMemberships', 'qualifications', 'galleryImages', 'stats'));
    }
}
