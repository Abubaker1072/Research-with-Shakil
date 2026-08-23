@extends('layouts.app')

@section('title', 'Services & Mentorship | Dr. Muhammad Shakil Ahmad')

@section('content')

<!-- Navy & Gold Header Banner -->
<section style="padding: 5.5rem 0 3rem 0; background: var(--navy-deep); color: #ffffff; border-bottom: 3px solid var(--gold);">
    <div class="container text-center">
        <h1 style="font-family: var(--font-heading); font-size: 2.75rem; color: #ffffff; margin-bottom: 0.5rem;">Coaching & Mentorship Programs</h1>
        <div class="gold-divider"></div>
        <p style="color: #cbd5e1; max-width: 650px; margin: 0 auto;">
            Personalized, high-touch advisory programs designed to elevate your thesis, literature review, grant proposal, and academic career.
        </p>
    </div>
</section>

<!-- STICKY STACKING CARDS SCROLL SECTION (Navy & Gold Palette) -->
<section class="section-padding" style="background: var(--surface);">
    <div class="container" style="max-width: 1100px;">
        <div class="section-header">
            <div class="section-subtitle">HOW WE PARTNER WITH YOU</div>
            <h2 class="section-title">Coaching & Consultation Programs</h2>
            <div class="gold-divider"></div>
        </div>

        @php
            $programPreviews = [
                'course_lit_review_thumb.png',
                'course_slr_thumb.png',
                'course_qualitative_thumb.png',
                'course_bibliometrics_thumb.png',
                'course_meta_thumb.png',
            ];
        @endphp

        <div class="stacked-cards-container">
            @foreach($services as $index => $service)
            <div class="stacked-card">
                <div class="stacked-card-grid">
                    <!-- Left: Program Visual Preview -->
                    <div>
                        <img src="{{ asset('images/' . ($programPreviews[$index % 5])) }}" alt="{{ $service->title }}" class="stacked-card-preview-img">
                    </div>

                    <!-- Right: Details & Features List -->
                    <div>
                        <div class="stacked-card-category">1-ON-1 ADVISORY PROGRAM {{ $index + 1 }}</div>
                        <h3 class="stacked-card-title">{{ $service->title }}</h3>
                        <p class="stacked-card-desc">{{ $service->full_description }}</p>

                        @if($service->features)
                        <ul class="stacked-card-features">
                            @foreach($service->features as $f)
                            <li><i class="fas fa-check" style="color: var(--navy);"></i> {{ $f }}</li>
                            @endforeach
                        </ul>
                        @endif

                        <a href="{{ route('contact.index') }}?service={{ urlencode($service->title) }}" class="btn-gold" style="width: 100%;" id="services-page-apply-{{ $service->id }}">
                            APPLY NOW <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
