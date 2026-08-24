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
            'learners' => (int) SiteSetting::get('stat_learners', 21550),
            'reviews' => (int) SiteSetting::get('stat_reviews', 1865),
            'courses' => Schema::hasTable('courses') ? Course::count() : 18,
            'grants_count' => Schema::hasTable('publications') ? Publication::where('type', 'Grant')->count() : 2,
        ];

        return view('pages.home', compact(
            'courses',
            'featuredCourses',
            'services',
            'highlightedPubs',
            'testimonials',
            'heroGallery',
            'stats'
        ));
    }
}
