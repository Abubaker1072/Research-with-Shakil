<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Gallery;
use App\Models\Publication;
use App\Models\Service;
use App\Models\SiteSetting;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class HomeController extends Controller
{
    public function index()
    {
        $courses = Schema::hasTable('courses') ? Course::all() : collect([]);
        $featuredCourses = $courses->take(6);
        $services = Schema::hasTable('services') ? Service::where('is_active', true)->orderBy('sort_order')->take(4)->get() : collect([]);
        $highlightedPubs = Schema::hasTable('publications') ? Publication::where('is_highlighted', true)->take(3)->get() : collect([]);
        $testimonials = Schema::hasTable('testimonials') ? Testimonial::where('is_featured', true)->get() : collect([]);
        $heroGallery = Schema::hasTable('galleries') ? Gallery::whereIn('page', ['home', 'all'])->where('is_active', true)->orderBy('sort_order')->get() : collect([]);

        $stats = [
            'learners' => (int) SiteSetting::get('stat_learners', 16000),
            'reviews' => (int) SiteSetting::get('stat_reviews', 1800),
            'courses' => Schema::hasTable('courses') && Course::count() > 0 ? Course::count() : 18,
            'ssci_papers' => 90,
            'grants_count' => Schema::hasTable('publications') ? Publication::where('type', 'Grant')->count() : 2,
        ];

        $bioImage = SiteSetting::get('home_bio_image', 'images/dr_shakil_presentation_quote.jpg');
        $heroBgImage = SiteSetting::get('home_hero_bg_image', 'images/junaid_zaida_library_bg.jpg');
        $heroPortraitImage = SiteSetting::get('hero_portrait_image', 'images/dr_shakil_hero.jpg');

        return view('pages.home', compact(
            'courses',
            'featuredCourses',
            'services',
            'highlightedPubs',
            'testimonials',
            'heroGallery',
            'stats',
            'bioImage',
            'heroBgImage',
            'heroPortraitImage'
        ));
    }
}
