@extends('layouts.app')

@section('title', '1-on-1 Academic Advisory & Consultation | Dr. Muhammad Shakil Ahmad')

@section('content')

<!-- Navy & Gold Header Banner -->
<section style="padding: 5.5rem 0 3.5rem 0; background: var(--navy-deep); color: #ffffff; border-bottom: 3px solid var(--gold); overflow: hidden;">
    <div class="container text-center reveal-scroll-up">
        <h1 style="font-family: var(--font-heading); font-size: 2.75rem; color: #ffffff; margin-bottom: 0.5rem;">1-on-1 Consultation & Academic Advisory</h1>
        <div class="gold-divider"></div>
        <p style="color: #cbd5e1; max-width: 750px; margin: 0 auto; font-size: 1.05rem; line-height: 1.7;">
            Personalized academic advisory and mentorship for PhD candidates, Master's thesis defense, Scopus journal revisions, and international grant proposals led by Dr. Muhammad Shakil Ahmad.
        </p>
    </div>
</section>

<!-- STICKY STACKING CARDS SCROLL SECTION -->
<section class="section-padding" style="background: var(--surface);">
    <div class="container" style="max-width: 1100px;">
        <div class="section-header text-center reveal-scroll-up" style="margin-bottom: 3rem;">
            <div class="section-subtitle">ADVISORY PARTNERSHIPS</div>
            <h2 class="section-title">Coaching & Consultation Programs</h2>
            <p style="color: var(--muted); font-size: 1rem;">
                Explore specialized 1-on-1 mentorship programs tailored for research scholars, PhD candidates, and university faculty.
            </p>
        </div>

        <div class="stacked-cards-container" style="margin-bottom: 4rem;">
            @foreach($services as $index => $service)
            @php
                $fallbackImages = [
                    0 => 'course_lit_review_thumb.png',
                    1 => 'consultation_prog_2.jpg',
                    2 => 'consultation_prog_3.jpg',
                    3 => 'consultation_prog_4.jpg',
                    4 => 'consultation_prog_5.jpg',
                ];

                $img = $service->image;
                if (!$img || str_contains($img, 'course_') || str_contains($img, 'thumb')) {
                    $img = $fallbackImages[$index] ?? 'consultation_prog_2.jpg';
                }
            @endphp
            <div class="stacked-card stacked-card-clickable reveal-card-box" data-delay="{{ $index }}">
                <div class="stacked-card-grid">
                    <!-- Left: Program Visual Preview -->
                    <div>
                        <img src="{{ asset('images/' . $img) }}" alt="{{ $service->title }}" class="stacked-card-preview-img">
                    </div>

                    <!-- Right: Details & Features List -->
                    <div>
                        <div class="stacked-card-category">1-ON-1 ADVISORY PROGRAM {{ $index + 1 }}</div>
                        <h3 class="stacked-card-title">{{ $service->title }}</h3>
                        <p class="stacked-card-desc">{{ $service->full_description ?? $service->short_description }}</p>

                        @if($service->features)
                        <ul class="stacked-card-features">
                            @foreach($service->features as $f)
                            <li><i class="fas fa-check" style="color: var(--navy);"></i> {{ $f }}</li>
                            @endforeach
                        </ul>
                        @endif

                        <a href="#consultation-booking-form" onclick="selectServiceOption('{{ $service->title }}')" class="btn-navy" style="width: 100%; text-align: center; display: inline-block;" id="consultation-apply-btn-{{ $service->id }}">
                            BOOK THIS PROGRAM <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

<!-- Responsive Booking & Consultation Form Section -->
<section id="consultation-booking-form" class="section-padding" style="background: #ffffff; border-top: 1px solid var(--border); overflow: hidden;">
    <div class="container" style="max-width: 680px;">
        <div class="reveal-scroll-up" style="background: var(--surface); padding: 2.25rem 2rem; border-radius: 18px; border: 1px solid var(--border); box-shadow: 0 10px 30px rgba(0,0,0,0.06);">
            <div class="section-header" style="margin-bottom: 1.5rem;">
                <div class="section-subtitle">APPLY FOR ADVISORY</div>
                <h2 class="section-title" style="font-size: 1.75rem; margin-bottom: 0.3rem;">Book a 1-on-1 Consultation Session</h2>
                <p style="color: var(--muted); font-size: 0.95rem; margin-top: 0.3rem;">
                    Submit project details below to schedule an academic advisory strategy call.
                </p>
            </div>

            <form action="{{ route('contact.store') }}" method="POST" id="consultationFormPage">
                @csrf
                <div class="form-row-grid" style="margin-bottom: 1.25rem;">
                    <div class="form-group" style="margin-bottom: 0;">
                        <label class="form-label" style="font-weight: 700; color: #0f172a; font-size: 0.88rem; margin-bottom: 0.4rem; display: block;">Full Name *</label>
                        <input type="text" name="name" class="form-control" style="width: 100%; height: 46px; border-radius: 10px; border: 1px solid #cbd5e1; padding: 0 1rem; font-size: 0.92rem;" placeholder="Your Full Name" required>
                    </div>
                    <div class="form-group" style="margin-bottom: 0;">
                        <label class="form-label" style="font-weight: 700; color: #0f172a; font-size: 0.88rem; margin-bottom: 0.4rem; display: block;">Email Address *</label>
                        <input type="email" name="email" class="form-control" style="width: 100%; height: 46px; border-radius: 10px; border: 1px solid #cbd5e1; padding: 0 1rem; font-size: 0.92rem;" placeholder="your.email@university.edu" required>
                    </div>
                </div>

                <div class="form-row-grid" style="margin-bottom: 1.25rem;">
                    <div class="form-group" style="margin-bottom: 0;">
                        <label class="form-label" style="font-weight: 700; color: #0f172a; font-size: 0.88rem; margin-bottom: 0.4rem; display: block;">WhatsApp Number *</label>
                        <input type="text" name="whatsapp" class="form-control" style="width: 100%; height: 46px; border-radius: 10px; border: 1px solid #cbd5e1; padding: 0 1rem; font-size: 0.92rem;" placeholder="+92 300 0000000" required>
                    </div>
                    <div class="form-group" style="margin-bottom: 0;">
                        <label class="form-label" style="font-weight: 700; color: #0f172a; font-size: 0.88rem; margin-bottom: 0.4rem; display: block;">Academic Role *</label>
                        <select name="academic_level" class="form-control" style="width: 100%; height: 46px; border-radius: 10px; border: 1px solid #cbd5e1; padding: 0 1rem; font-size: 0.92rem;" required>
                            <option value="PhD Candidate">PhD Candidate</option>
                            <option value="Master's Researcher">Master's Student</option>
                            <option value="University Faculty">University Faculty</option>
                            <option value="Independent Scholar">Independent Scholar</option>
                        </select>
                    </div>
                </div>

                <div class="form-group" style="margin-bottom: 1.25rem;">
                    <label class="form-label" style="font-weight: 700; color: #0f172a; font-size: 0.88rem; margin-bottom: 0.4rem; display: block;">Program / Consultation Requested *</label>
                    <select name="service_type" id="consultation_service_select" class="form-control" style="width: 100%; height: 46px; border-radius: 10px; border: 1px solid #cbd5e1; padding: 0 1rem; font-size: 0.92rem;" required>
                        <option value="Dissertation & Thesis Coaching">Dissertation & Thesis Coaching</option>
                        <option value="Systematic Literature Review & Meta-Analysis Consulting">Systematic Literature Review & Meta-Analysis Consulting</option>
                        <option value="Scientific Paper Writing & Journal Submission Support">Scientific Paper Writing & Journal Submission Support</option>
                        <option value="Grant Writing & Research Advisory">Grant Writing & Research Advisory</option>
                    </select>
                </div>

                <div class="form-group" style="margin-bottom: 1.5rem;">
                    <label class="form-label" style="font-weight: 700; color: #0f172a; font-size: 0.88rem; margin-bottom: 0.4rem; display: block;">Message & Project Overview *</label>
                    <textarea name="message" class="form-control" style="width: 100%; border-radius: 10px; border: 1px solid #cbd5e1; padding: 0.75rem 1rem; font-size: 0.92rem;" placeholder="Describe research topic, current progress, or defense timeline..." rows="4" required></textarea>
                </div>

                <div style="text-align: center;">
                    <button type="submit" class="btn-navy" style="padding: 0.85rem 2.4rem; font-size: 0.95rem; border-radius: 10px; font-weight: 800; cursor: pointer;" id="consultation-submit-btn">
                        Submit Consultation Request <i class="fas fa-paper-plane" style="margin-left: 6px;"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {
    // Scroll Reveal Observer for Consultation Cards & Booking Form
    const revealObserver = new IntersectionObserver(function (entries, observer) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                const delay = parseInt(entry.target.getAttribute("data-delay") || "0", 10);
                entry.target.style.transitionDelay = (delay * 0.12) + "s";
                entry.target.classList.add("in-view");
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });

    document.querySelectorAll(".reveal-scroll-up, .reveal-card-box").forEach(function (el) {
        revealObserver.observe(el);
    });
});

function selectServiceOption(serviceName) {
    const selectElem = document.getElementById("consultation_service_select");
    if (selectElem) {
        for (let i = 0; i < selectElem.options.length; i++) {
            if (selectElem.options[i].value.toLowerCase().includes(serviceName.toLowerCase()) || 
                serviceName.toLowerCase().includes(selectElem.options[i].value.toLowerCase())) {
                selectElem.selectedIndex = i;
                break;
            }
        }
    }
}
</script>

@endsection
