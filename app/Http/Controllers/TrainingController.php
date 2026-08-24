<?php

namespace App\Http\Controllers;

use App\Models\Training;
use App\Models\Gallery;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index()
    {
        $trainings = Training::where('is_active', true)->orderBy('sort_order')->get();
        $galleryImages = Gallery::where('page', 'trainings')->orWhere('page', 'all')->where('is_active', true)->orderBy('sort_order')->take(4)->get();
        
        $stats = [
            'workshops' => SiteSetting::get('stat_workshops', '50+'),
            'scholars' => SiteSetting::get('stat_scholars_trained', '12,000+'),
            'partners' => '15+',
            'customized' => '100%',
        ];

        return view('pages.trainings', compact('trainings', 'galleryImages', 'stats'));
    }
}
