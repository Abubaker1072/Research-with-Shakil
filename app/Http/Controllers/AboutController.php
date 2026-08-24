<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\Gallery;
use App\Models\Qualification;
use App\Models\ResearchInterest;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $researchInterests = ResearchInterest::orderBy('sort_order')->pluck('title')->toArray();
        $awardsAndMemberships = Award::orderBy('sort_order')->get();
        $qualifications = Qualification::orderBy('sort_order')->get();
        $galleryImages = Gallery::whereIn('page', ['about', 'trainings', 'all'])->where('is_active', true)->orderBy('sort_order')->take(4)->get();
        
        $stats = [
            'learners' => SiteSetting::get('stat_learners', '16,000+'),
            'ssci_papers' => SiteSetting::get('stat_ssci_papers', '53+ Papers'),
            'h_index' => SiteSetting::get('stat_h_index', '39'),
        ];

        return view('pages.about', compact('researchInterests', 'awardsAndMemberships', 'qualifications', 'galleryImages', 'stats'));
    }
}
