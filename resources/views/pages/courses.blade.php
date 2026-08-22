@extends('layouts.app')

@section('title', 'My courses (18) | Dr. Muhammad Shakil Ahmad')

@section('content')

@include('partials.under-development-banner')

<!-- Navy & Gold Header Banner -->
<section style="padding: 5.5rem 0 3rem 0; background: var(--navy-deep); color: #ffffff; border-bottom: 3px solid var(--gold);">
    <div class="container text-center">
        <h1 style="font-family: var(--font-heading); font-size: 2.75rem; color: #ffffff; margin-bottom: 0.5rem;">My courses (18)</h1>
        <div class="gold-divider"></div>
        <p style="color: #cbd5e1; max-width: 650px; margin: 0 auto;">
            Step-by-step practical bootcamps on Systematic Literature Review, Thematic Analysis, Meta-Analysis, Bibliometrics, and Journal Writing.
        </p>
    </div>
</section>

<!-- Courses Grid Section -->
<section class="section-padding" style="background: var(--surface);">
    <div class="container">
        
        <!-- Filter Tabs -->
        <div style="display: flex; justify-content: center; gap: 0.75rem; flex-wrap: wrap; margin-bottom: 3rem;">
            <button class="btn-gold course-filter-btn" data-category="all">All Courses</button>
            @foreach($categories as $cat)
            <button class="btn-outline course-filter-btn" data-category="{{ $cat }}">{{ $cat }}</button>
            @endforeach
        </div>

        <!-- Course Cards with Generated AI Thumbnails -->
        <div class="cards-grid">
            @php
                $thumbnails = [
                    'course_slr_thumb.png',
                    'course_thematic_thumb.png',
                    'course_meta_thumb.png',
                    'course_lit_review_thumb.png',
                    'course_bibliometrics_thumb.png',
                    'course_qualitative_thumb.png',
                ];
            @endphp

            @foreach($courses as $index => $course)
            <div class="udemy-course-card course-card-item" data-category="{{ $course->category }}">
                <div class="udemy-thumbnail-wrapper">
                    @if($index === 0)
                        <span class="udemy-bestseller-badge">Bestseller</span>
                    @endif
                    <img src="{{ asset('images/' . ($thumbnails[$index % 6])) }}" alt="{{ $course->title }}" class="udemy-thumbnail-img">
                </div>

                <h3 class="udemy-course-title">{{ $course->title }}</h3>
                <p class="udemy-course-subtitle">{{ $course->description }}</p>
                <div class="udemy-instructor">Muhammad Shakil Ahmad</div>

                <div class="udemy-tags-row">
                    <span class="udemy-tag-pill">Course</span>
                    <span class="udemy-tag-pill rating"><i class="fas fa-star" style="color: var(--gold);"></i> {{ $course->rating }}</span>
                    <span class="udemy-tag-pill">{{ $course->reviews_count }} ratings</span>
                    <span class="udemy-tag-pill">{{ $course->duration }}</span>
                    <span class="udemy-tag-pill">{{ $course->lectures_count }} lectures</span>
                    <span class="udemy-tag-pill">{{ $course->level }}</span>
                </div>

                <div class="udemy-price-row">
                    <span class="udemy-current-price">${{ number_format($course->price, 2) }}</span>
                    <span class="udemy-old-price">${{ number_format($course->price * 5, 2) }}</span>
                    <a href="{{ $course->udemy_url }}" target="_blank" class="btn-gold" style="margin-left: auto; padding: 0.45rem 1rem; font-size: 0.78rem;" id="courses-page-enroll-{{ $course->id }}">
                        View Course
                    </a>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll(".course-filter-btn");
    const courseCards = document.querySelectorAll(".course-card-item");

    filterButtons.forEach(function (btn) {
        btn.addEventListener("click", function () {
            filterButtons.forEach(b => {
                b.classList.remove("btn-gold");
                b.classList.add("btn-outline");
            });
            this.classList.remove("btn-outline");
            this.classList.add("btn-gold");

            const category = this.getAttribute("data-category");

            courseCards.forEach(function (card) {
                if (category === "all" || card.getAttribute("data-category") === category) {
                    card.style.display = "block";
                } else {
                    card.style.display = "none";
                }
            });
        });
    });
});
</script>

@endsection
