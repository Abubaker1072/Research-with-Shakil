<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Publication;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $featuredCourses = $courses->take(6);
        $services = Service::where('is_active', true)->orderBy('sort_order')->take(4)->get();
        $highlightedPubs = Publication::where('is_highlighted', true)->take(3)->get();
        $testimonials = Testimonial::where('is_featured', true)->get();

        $stats = [
            'learners' => 21550,
            'reviews' => 1865,
            'courses' => Course::count(),
            'grants_count' => 2,
        ];

        return view('pages.home', compact(
            'courses',
            'featuredCourses',
            'services',
            'highlightedPubs',
            'testimonials',
            'stats'
        ));
    }
}
