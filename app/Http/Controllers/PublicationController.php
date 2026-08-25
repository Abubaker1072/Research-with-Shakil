<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index(Request $request)
    {
        $allPublications = Publication::orderBy('year', 'desc')->get();
        $journalArticles = Publication::where('type', 'Journal Article')->orderBy('year', 'desc')->get();
        $systematicReviews = Publication::where('type', 'Systematic Review')->orderBy('year', 'desc')->get();
        $grants = Publication::where('type', 'Grant')->orderBy('year', 'desc')->get();
        $years = Publication::select('year')->distinct()->orderBy('year', 'desc')->pluck('year');

        return view('pages.publications', compact('allPublications', 'journalArticles', 'systematicReviews', 'grants', 'years'));
    }
}
