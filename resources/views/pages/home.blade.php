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

<!-- THREE HOMEPAGE OVERVIEW SECTIONS (Courses, Trainings, Consultation) -->
<section class="section-padding" style="background: var(--surface);" id="overview-section">
    <div class="container">
        <div class="section-header text-center" style="margin-bottom: 3rem;">
            <div class="section-subtitle">WHAT WE OFFER</div>
            <h2 class="section-title">Academic Programs & Advisory Overview</h2>
            <p style="color: var(--muted); max-width: 650px; margin: 0 auto; font-size: 1rem;">
                Explore our high-impact online courses, institutional training workshops, and personalized 1-on-1 consultation services below.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            
            <!-- 1. COURSES OVERVIEW SECTION -->
            <div style="background: #ffffff; border-radius: 16px; border: 1px solid var(--border); padding: 2.25rem; display: flex; flex-direction: column; justify-content: space-between; box-shadow: var(--shadow-sm);" class="overview-card">
                <div>
                    <div style="width: 56px; height: 56px; border-radius: 12px; background: rgba(30, 58, 138, 0.08); color: var(--navy); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 1.25rem;">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 style="font-family: var(--font-heading); font-size: 1.4rem; color: var(--navy); margin-bottom: 0.75rem;">Courses</h3>
                    <p style="color: var(--muted); font-size: 0.95rem; line-height: 1.65; margin-bottom: 1.5rem;">
                        Comprehensive online bootcamps covering Systematic Literature Reviews, Qualitative & Thematic Analysis (NVivo/MAXQDA), Meta-Analysis, Bibliometrics, and Scopus/SSCI Journal Writing.
                    </p>
                    <ul style="list-style: none; padding: 0; margin: 0 0 1.75rem 0; color: #475569; font-size: 0.88rem; display: flex; flex-direction: column; gap: 0.5rem;">
                        <li><i class="fas fa-check-circle" style="color: var(--gold); margin-right: 8px;"></i> 18 Self-Paced Video Bootcamps</li>
                        <li><i class="fas fa-check-circle" style="color: var(--gold); margin-right: 8px;"></i> Practical Methodologies & Templates</li>
                        <li><i class="fas fa-check-circle" style="color: var(--gold); margin-right: 8px;"></i> Global Scholar Community</li>
                    </ul>
                </div>
                <div>
                    <a href="{{ route('courses.index') }}" class="btn-navy" style="width: 100%; text-align: center; display: inline-block;" id="overview-view-courses-btn">
                        View Courses <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                    </a>
                </div>
            </div>

            <!-- 2. TRAININGS OVERVIEW SECTION -->
            <div style="background: #ffffff; border-radius: 16px; border: 1px solid var(--border); padding: 2.25rem; display: flex; flex-direction: column; justify-content: space-between; box-shadow: var(--shadow-sm);" class="overview-card">
                <div>
                    <div style="width: 56px; height: 56px; border-radius: 12px; background: rgba(30, 58, 138, 0.08); color: var(--navy); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 1.25rem;">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <h3 style="font-family: var(--font-heading); font-size: 1.4rem; color: var(--navy); margin-bottom: 0.75rem;">Trainings</h3>
                    <p style="color: var(--muted); font-size: 0.95rem; line-height: 1.65; margin-bottom: 1.5rem;">
                        Interactive institutional workshops, university faculty development seminars, and hands-on intensive research capacity-building bootcamps customized for academic institutions.
                    </p>
                    <ul style="list-style: none; padding: 0; margin: 0 0 1.75rem 0; color: #475569; font-size: 0.88rem; display: flex; flex-direction: column; gap: 0.5rem;">
                        <li><i class="fas fa-check-circle" style="color: var(--gold); margin-right: 8px;"></i> Live Workshop & Seminar Sessions</li>
                        <li><i class="fas fa-check-circle" style="color: var(--gold); margin-right: 8px;"></i> University & ORIC Faculty Training</li>
                        <li><i class="fas fa-check-circle" style="color: var(--gold); margin-right: 8px;"></i> Customized Research Toolkits</li>
                    </ul>
                </div>
                <div>
                    <a href="{{ route('trainings.index') }}" class="btn-navy" style="width: 100%; text-align: center; display: inline-block;" id="overview-explore-trainings-btn">
                        Explore Trainings <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                    </a>
                </div>
            </div>

            <!-- 3. CONSULTATION OVERVIEW SECTION -->
            <div style="background: #ffffff; border-radius: 16px; border: 1px solid var(--border); padding: 2.25rem; display: flex; flex-direction: column; justify-space-between; box-shadow: var(--shadow-sm);" class="overview-card">
                <div>
                    <div style="width: 56px; height: 56px; border-radius: 12px; background: rgba(30, 58, 138, 0.08); color: var(--navy); display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 1.25rem;">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 style="font-family: var(--font-heading); font-size: 1.4rem; color: var(--navy); margin-bottom: 0.75rem;">Consultation</h3>
                    <p style="color: var(--muted); font-size: 0.95rem; line-height: 1.65; margin-bottom: 1.5rem;">
                        Dedicated 1-on-1 personalized academic advisory and mentorship for PhD candidates, Master's thesis scholars, journal paper revision, and academic grant applications.
                    </p>
                    <ul style="list-style: none; padding: 0; margin: 0 0 1.75rem 0; color: #475569; font-size: 0.88rem; display: flex; flex-direction: column; gap: 0.5rem;">
                        <li><i class="fas fa-check-circle" style="color: var(--gold); margin-right: 8px;"></i> 1-on-1 Dissertation Mentorship</li>
                        <li><i class="fas fa-check-circle" style="color: var(--gold); margin-right: 8px;"></i> Journal Peer-Review Advisory</li>
                        <li><i class="fas fa-check-circle" style="color: var(--gold); margin-right: 8px;"></i> Grant Proposal Strategy</li>
                    </ul>
                </div>
                <div>
                    <a href="{{ route('consultation.index') }}" class="btn-navy" style="width: 100%; text-align: center; display: inline-block;" id="overview-book-consultation-btn">
                        Book Consultation <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                    </a>
                </div>
            </div>

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
