@extends('layouts.app')

@section('title', 'Welcome to Research with Shakil | Dr. Muhammad Shakil Ahmad')

@section('content')

<!-- MDi Style Hero Section with Highly Visible Campus Background Image (0.70 Overlay) -->
<section class="mdi-hero-section">
    <div class="container hero-grid">
        <!-- Left Side: Title, Description & Primary Navy CTA -->
        <div>
            <h1 class="hero-title-mdi">
                Welcome to Research with Shakil
            </h1>
            <p class="hero-text-mdi">
                Dr. Muhammad Shakil Ahmad has been offering high-value international academic coaching, literature review mentorship, and dissertation advisory since 2015. Our scholars publish in top-tier journals across Pakistan, Middle East, Europe, UK, USA, Canada, and Australia.
            </p>
            
            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                <a href="#booking-form-section" class="btn-navy" id="hero-get-in-touch">
                    GET IN TOUCH
                </a>
                <a href="#courses-section" class="btn-light-surface" id="hero-explore-courses">
                    Explore 18 Courses
                </a>
            </div>
        </div>

        <!-- Right Side: Blackboard Suit Photo Left + 5 Sub-Photos Right Grid -->
        <div>
            <div class="hero-prominent-collage">
                <div class="hero-profile-collage-layout">
                    <!-- Left Side: Big Blackboard Suit Portrait -->
                    <div>
                        <img src="{{ asset('images/hero_img_1.jpg') }}" alt="Dr. Muhammad Shakil Ahmad Blackboard Suit Portrait" class="hero-big-profile-left">
                    </div>

                    <!-- Right Side: 5 Sub-Photos Grid (Cutout Portrait + Additional Photos) -->
                    <div class="hero-subphotos-right-grid">
                        <img src="{{ asset('images/hero_dr_shakil_cutout_v2.jpg') }}" alt="Dr. Shakil Cutout Portrait" class="hero-subphoto-cell">
                        <img src="{{ asset('images/hero_img_2.jpg') }}" alt="Dr. Shakil Formal Portrait" class="hero-subphoto-cell">
                        <img src="{{ asset('images/hero_img_3.jpg') }}" alt="Computer Lab Workshop" class="hero-subphoto-cell">
                        <img src="{{ asset('images/hero_img_4.jpg') }}" alt="CPD Centre Building" class="hero-subphoto-cell">
                        <img src="{{ asset('images/course_qualitative_thumb.png') }}" alt="Mentorship Workshop" class="hero-subphoto-cell">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Compact Stat Bar with Zero-to-Target Animated Counters -->
<section class="stats-bar-compact" id="stats-bar-trigger">
    <div class="container stats-grid-compact">
        <div class="stat-card-compact">
            <div class="stat-number-compact" data-target="21550">0</div>
            <div class="stat-label-compact">Global Learners</div>
        </div>
        <div class="stat-card-compact">
            <div class="stat-number-compact" data-target="1865">0</div>
            <div class="stat-label-compact">Verified Reviews</div>
        </div>
        <div class="stat-card-compact">
            <div class="stat-number-compact" data-target="18">0</div>
            <div class="stat-label-compact">Udemy Courses</div>
        </div>
        <div class="stat-card-compact">
            <div class="stat-number-compact" data-target="16">0</div>
            <div class="stat-label-compact">Publications & Grants</div>
        </div>
    </div>
</section>

<!-- HIGH-IMPACT 90PX CONTINUOUS ANIMATED MARQUEE TICKER BANNER ("TRUSTED BY:") -->
<section class="marquee-section">
    <div class="container marquee-container">
        <div class="marquee-label">
            Trusted by:
        </div>
        <div class="marquee-wrapper">
            <div class="marquee-track">
                <!-- Track Items (Duplicated for Infinite Seamless Loop) -->
                <img src="{{ asset('images/trusted_by_logos_v3.png') }}" alt="Corporate & Institutional Partners Ticker" class="marquee-item-img">
                <img src="{{ asset('images/trusted_by_logos_v3.png') }}" alt="Corporate & Institutional Partners Ticker" class="marquee-item-img">
                <img src="{{ asset('images/trusted_by_logos_v3.png') }}" alt="Corporate & Institutional Partners Ticker" class="marquee-item-img">
            </div>
        </div>
    </div>
</section>

<!-- COURSES SECTION ("My courses (18)" with Dynamic Scroll Animations Left/Right/Bottom) -->
<section class="section-padding" style="background: var(--surface);" id="courses-section">
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
            <div>
                <h2 style="font-family: var(--font-body); font-size: 2.2rem; font-weight: 800; color: var(--navy);">My courses (18)</h2>
            </div>
            <a href="{{ route('courses.index') }}" class="btn-navy" style="padding: 0.6rem 1.2rem; font-size: 0.8rem;">
                Browse All <i class="fas fa-arrow-right"></i>
            </a>
        </div>

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

                $animationClasses = [
                    'animate-slide-left',
                    'animate-slide-bottom',
                    'animate-slide-right',
                    'animate-slide-left',
                    'animate-slide-bottom',
                    'animate-slide-right'
                ];
            @endphp

            @foreach($featuredCourses as $index => $course)
            <div class="udemy-course-card {{ $animationClasses[$index % 6] }}">
                <div class="udemy-thumbnail-wrapper">
                    @if($index === 0)
                        <span class="udemy-bestseller-badge">Bestseller</span>
                    @endif
                    <img src="{{ asset('images/' . ($thumbnails[$index % 6])) }}" alt="{{ $course->title }}" class="udemy-thumbnail-img">
                </div>

                <h3 class="udemy-course-title">{{ $course->title }}</h3>
                <p class="udemy-course-subtitle">{{ Str::limit($course->description, 90) }}</p>
                <div class="udemy-instructor">Muhammad Shakil Ahmad</div>

                <div class="udemy-tags-row">
                    <span class="udemy-tag-pill">Course</span>
                    <span class="udemy-tag-pill rating"><i class="fas fa-star" style="color: var(--navy);"></i> {{ $course->rating }}</span>
                    <span class="udemy-tag-pill">{{ $course->reviews_count }} ratings</span>
                    <span class="udemy-tag-pill">{{ $course->duration }}</span>
                    <span class="udemy-tag-pill">{{ $course->lectures_count }} lectures</span>
                    <span class="udemy-tag-pill">{{ $course->level }}</span>
                </div>

                <div class="udemy-price-row">
                    <span class="udemy-current-price">${{ number_format($course->price, 2) }}</span>
                    <span class="udemy-old-price">${{ number_format($course->price * 5, 2) }}</span>
                    <a href="{{ $course->udemy_url }}" target="_blank" class="btn-navy" style="margin-left: auto; padding: 0.45rem 0.9rem; font-size: 0.75rem;" id="udemy-course-btn-{{ $course->id }}">
                        View Course
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- COACHING & CONSULTATION PROGRAMS SECTION (Sticky Stacking Scroll Cards) -->
<section id="coaching-section" class="section-padding" style="background: #ffffff; border-y: 1px solid var(--border);">
    <div class="container" style="max-width: 1100px;">
        <div class="section-header">
            <div class="section-subtitle">HOW WE PARTNER WITH YOU</div>
            <h2 class="section-title">Coaching & Consultation Programs</h2>
            <p style="color: var(--muted); font-size: 1rem;">
                Scroll down to explore our specialized 1-on-1 mentorship programs for research scholars and faculty.
            </p>
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
                        <p class="stacked-card-desc">{{ $service->short_description }}</p>

                        @if($service->features)
                        <ul class="stacked-card-features">
                            @foreach($service->features as $f)
                            <li><i class="fas fa-check"></i> {{ $f }}</li>
                            @endforeach
                        </ul>
                        @endif

                        <a href="javascript:void(0)" onclick="openBookingModal('{{ $service->title }}')" class="btn-navy" style="width: 100%;" id="stacked-apply-btn-{{ $service->id }}">
                            APPLY NOW <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- SCHOLAR QUOTE SECTION (Swapped Layout: Photo LEFT, Text RIGHT) -->
<section class="scholar-quote-section" id="scholar-quote-trigger">
    <div class="container">
        <div class="scholar-quote-grid-photo-left">
            <!-- Left Frame: Photo sweeps in from Far Left Screen Edge (-100vw) -->
            <div class="scroll-quote-img-left" id="quote-img-element">
                <div class="scholar-photo-frame">
                    <img src="{{ asset('images/hero_dr_shakil_cutout_v2.jpg') }}" alt="Dr. Muhammad Shakil Ahmad" class="scholar-photo-img">
                </div>
            </div>

            <!-- Right Content: Text sweeps in from Far Right Screen Edge (100vw) -->
            <div class="scroll-quote-text-right" id="quote-text-element">
                <blockquote class="scholar-quote-text">
                    “Enrolling in the Research & Mentorship program with Dr. Shakil has been a transformative decision that has sharpened my academic acumen and publication success”
                </blockquote>

                <div class="scholar-author-name">— Dr. Ayesha Rehman</div>
                <div class="scholar-author-tag">SCOPUS Q1 PUBLISHED SCHOLAR 2024</div>
            </div>
        </div>
    </div>
</section>

<!-- NINE DOMAINS. REAL DEPTH. SECTION -->
<section class="domains-section">
    <div class="container">
        <div class="domains-grid">
            <div>
                <div class="domains-subtitle">RESEARCH & TRAINING DOMAINS</div>
                <h2 class="domains-headline">Nine domains.<br>Real depth.</h2>
            </div>

            <div class="domains-list-two-col">
                <div class="domain-item-row">
                    <span class="domain-num">01</span>
                    <span class="domain-text">Systematic Literature Review & Meta-Analysis</span>
                </div>
                <div class="domain-item-row">
                    <span class="domain-num">06</span>
                    <span class="domain-text">Research Methodology & Theoretical Frameworks</span>
                </div>
                <div class="domain-item-row">
                    <span class="domain-num">02</span>
                    <span class="domain-text">Qualitative & Thematic Analysis (NVivo / MAXQDA)</span>
                </div>
                <div class="domain-item-row">
                    <span class="domain-num">07</span>
                    <span class="domain-text">Bibliometrics & Science Mapping (VOSviewer)</span>
                </div>
                <div class="domain-item-row">
                    <span class="domain-num">03</span>
                    <span class="domain-text">High-Impact Q1 Journal Publishing (Scopus/SSCI)</span>
                </div>
                <div class="domain-item-row">
                    <span class="domain-num">08</span>
                    <span class="domain-text">SPSS, AMOS & SmartPLS Quantitative Analysis</span>
                </div>
                <div class="domain-item-row">
                    <span class="domain-num">04</span>
                    <span class="domain-text">Dissertation & Thesis Proposal Mentorship</span>
                </div>
                <div class="domain-item-row">
                    <span class="domain-num">09</span>
                    <span class="domain-text">Faculty Development & Institutional Advisory</span>
                </div>
                <div class="domain-item-row">
                    <span class="domain-num">05</span>
                    <span class="domain-text">Academic Grant Writing & Funding Proposals</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Responsive Booking & Consultation Form Section -->
<section id="booking-form-section" class="section-padding" style="background: var(--surface);">
    <div class="container" style="max-width: 850px;">
        <div style="background: #ffffff; padding: 2.75rem; border-radius: 16px; border: 1px solid var(--border); box-shadow: var(--shadow-md);">
            <div class="section-header" style="margin-bottom: 2rem;">
                <div class="section-subtitle">Get In Touch</div>
                <h2 class="section-title" style="font-size: 2rem;">Book a Consultation</h2>
            </div>

            <form action="{{ route('contact.store') }}" method="POST" id="consultationForm">
                @csrf
                <div class="form-grid-responsive">
                    <div class="form-group">
                        <label class="form-label">Full Name *</label>
                        <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email Address *</label>
                        <input type="email" name="email" class="form-control" placeholder="your.name@university.edu" required>
                    </div>
                </div>

                <div class="form-grid-responsive">
                    <div class="form-group">
                        <label class="form-label">WhatsApp Number *</label>
                        <input type="text" name="whatsapp" class="form-control" placeholder="+92 300 0000000" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Academic Role *</label>
                        <select name="academic_level" class="form-control" required>
                            <option value="PhD Candidate">PhD Candidate</option>
                            <option value="Master's Researcher">Master's Student</option>
                            <option value="University Faculty">University Faculty</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Program / Service Requested *</label>
                    <select name="service_type" id="service_type" class="form-control" required>
                        <option value="Dissertation & Thesis Coaching">Dissertation & Thesis Coaching</option>
                        <option value="Systematic Literature Review & Meta-Analysis Consulting">Systematic Literature Review & Meta-Analysis Consulting</option>
                        <option value="Scientific Paper Writing & Journal Submission Support">Scientific Paper Writing & Journal Submission Support</option>
                        <option value="Grant Writing & Research Advisory">Grant Writing & Research Advisory</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">Message & Project Overview *</label>
                    <textarea name="message" class="form-control" placeholder="Tell us about your research topic or defense target..." required></textarea>
                </div>

                <div style="text-align: center; margin-top: 1.5rem;">
                    <button type="submit" class="btn-navy" style="padding: 0.9rem 2.5rem;" id="home-submit-btn">
                        Submit Application
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Intersection Observer Script for Scroll Animations & Zero-to-Target Counter Animation -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    // 1. Course Cards Scroll Entrance Animation (Slide Left, Right & Bottom with staggered delays)
    const courseCards = document.querySelectorAll(".udemy-course-card");
    if (courseCards.length > 0) {
        const cardsObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add("in-view");
                }
            });
        }, { threshold: 0.15 });

        courseCards.forEach(function (card, idx) {
            card.style.transitionDelay = ((idx % 3) * 0.15) + "s";
            cardsObserver.observe(card);
        });
    }

    // 2. Scholar Quote Section Scroll Trigger (Photo LEFT, Text RIGHT)
    const triggerElement = document.getElementById("scholar-quote-trigger");
    const textElement = document.getElementById("quote-text-element");
    const imgElement = document.getElementById("quote-img-element");

    if (triggerElement && textElement && imgElement) {
        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    textElement.classList.add("in-view");
                    imgElement.classList.add("in-view");
                }
            });
        }, { threshold: 0.2 });

        observer.observe(triggerElement);
    }

    // 3. Zero-to-Target Stat Counter Animation (Starts at 0 and counts up when visible)
    const statsTrigger = document.getElementById("stats-bar-trigger");
    let animated = false;

    if (statsTrigger) {
        const statsObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting && !animated) {
                    animated = true;
                    const counters = document.querySelectorAll(".stat-number-compact");
                    
                    counters.forEach(function (counter) {
                        const target = parseInt(counter.getAttribute("data-target"), 10);
                        let current = 0;
                        const duration = 1800; // 1.8s duration
                        const stepTime = 20;
                        const steps = duration / stepTime;
                        const increment = target / steps;

                        const timer = setInterval(function () {
                            current += increment;
                            if (current >= target) {
                                counter.innerText = target.toLocaleString() + "+";
                                clearInterval(timer);
                            } else {
                                counter.innerText = Math.floor(current).toLocaleString() + "+";
                            }
                        }, stepTime);
                    });
                }
            });
        }, { threshold: 0.3 });

        statsObserver.observe(statsTrigger);
    }
});
</script>

@endsection
