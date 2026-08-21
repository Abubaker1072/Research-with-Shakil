<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $query = Course::query();

        if ($request->has('category') && $request->category !== 'all') {
            $query->where('category', $request->category);
        }

        if ($request->has('search') && !empty($request->search)) {
            $query->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('description', 'like', '%' . $request->search . '%');
        }

        $courses = $query->get();
        $categories = Course::select('category')->distinct()->pluck('category');

        return view('pages.courses', compact('courses', 'categories'));
    }

    public function show($slug)
    {
        $course = Course::where('slug', $slug)->firstOrFail();
        $relatedCourses = Course::where('category', $course->category)
                                ->where('id', '!=', $course->id)
                                ->take(3)
                                ->get();

        return view('pages.course-detail', compact('course', 'relatedCourses'));
    }
}
