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

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2.25rem; align-items: stretch;">
            
            <!-- 1. COURSES OVERVIEW SECTION -->
            <div style="background: #ffffff; border-radius: 20px; border: 1px solid #e2e8f0; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); transition: transform 0.3s ease, box-shadow 0.3s ease; height: 100%;" class="overview-card-editorial">
                <div>
                    <!-- Visual Top Header Image -->
                    <div style="height: 170px; position: relative; overflow: hidden; background: #0f172a;">
                        <img src="{{ asset('images/course_slr_thumb.png') }}" alt="Courses Overview" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.9;">
                        <div style="position: absolute; top: 14px; left: 14px; background: rgba(15, 23, 42, 0.85); backdrop-filter: blur(8px); border: 1px solid rgba(255, 255, 255, 0.2); color: #fef08a; font-size: 0.75rem; font-weight: 700; padding: 0.3rem 0.75rem; border-radius: 20px; text-transform: uppercase; letter-spacing: 0.8px;">
                            <i class="fas fa-graduation-cap" style="margin-right: 4px;"></i> 18 Online Bootcamps
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div style="padding: 1.75rem 1.75rem 1rem 1.75rem;">
                        <h3 style="font-family: var(--font-heading); font-size: 1.45rem; font-weight: 700; color: #0f172a; margin-bottom: 0.6rem;">Courses</h3>
                        <p style="color: #475569; font-size: 0.95rem; line-height: 1.65; margin-bottom: 1.25rem;">
                            Comprehensive self-paced video bootcamps covering Systematic Literature Reviews, Qualitative & Thematic Analysis (NVivo/MAXQDA), Meta-Analysis, Bibliometrics, and Scopus Q1 Journal Writing.
                        </p>

                        <!-- Feature Badges Row -->
                        <div style="display: flex; flex-wrap: wrap; gap: 0.45rem; margin-bottom: 1.25rem;">
                            <span style="font-size: 0.78rem; font-weight: 600; padding: 0.25rem 0.65rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">PRISMA 2020</span>
                            <span style="font-size: 0.78rem; font-weight: 600; padding: 0.25rem 0.65rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">NVivo & MAXQDA</span>
                            <span style="font-size: 0.78rem; font-weight: 600; padding: 0.25rem 0.65rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">VOSviewer</span>
                            <span style="font-size: 0.78rem; font-weight: 600; padding: 0.25rem 0.65rem; border-radius: 6px; background: #fef9c3; color: #854d0e; border: 1px solid #fef08a;">Udemy Profile Link</span>
                        </div>
                    </div>
                </div>

                <div style="padding: 0 1.75rem 1.75rem 1.75rem; margin-top: auto;">
                    <a href="{{ route('courses.index') }}" class="btn-navy" style="width: 100%; text-align: center; display: block; padding: 0.85rem 1.5rem; font-weight: 700; border-radius: 12px;" id="overview-view-courses-btn">
                        View All 18 Courses <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                    </a>
                </div>
            </div>

            <!-- 2. TRAININGS OVERVIEW SECTION -->
            <div style="background: #ffffff; border-radius: 20px; border: 1px solid #e2e8f0; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); transition: transform 0.3s ease, box-shadow 0.3s ease; height: 100%;" class="overview-card-editorial">
                <div>
                    <!-- Visual Top Header Image -->
                    <div style="height: 170px; position: relative; overflow: hidden; background: #0f172a;">
                        <img src="{{ asset('images/hero_img_3.jpg') }}" alt="Trainings Overview" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.9;">
                        <div style="position: absolute; top: 14px; left: 14px; background: rgba(15, 23, 42, 0.85); backdrop-filter: blur(8px); border: 1px solid rgba(255, 255, 255, 0.2); color: #fef08a; font-size: 0.75rem; font-weight: 700; padding: 0.3rem 0.75rem; border-radius: 20px; text-transform: uppercase; letter-spacing: 0.8px;">
                            <i class="fas fa-chalkboard-teacher" style="margin-right: 4px;"></i> Institutional Workshops
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div style="padding: 1.75rem 1.75rem 1rem 1.75rem;">
                        <h3 style="font-family: var(--font-heading); font-size: 1.45rem; font-weight: 700; color: #0f172a; margin-bottom: 0.6rem;">Trainings</h3>
                        <p style="color: #475569; font-size: 0.95rem; line-height: 1.65; margin-bottom: 1.25rem;">
                            Interactive university workshops, faculty development seminars, and intensive research capacity-building bootcamps customized for ORIC centers and global academic institutions.
                        </p>

                        <!-- Feature Badges Row -->
                        <div style="display: flex; flex-wrap: wrap; gap: 0.45rem; margin-bottom: 1.25rem;">
                            <span style="font-size: 0.78rem; font-weight: 600; padding: 0.25rem 0.65rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">Faculty Seminars</span>
                            <span style="font-size: 0.78rem; font-weight: 600; padding: 0.25rem 0.65rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">ORIC Building</span>
                            <span style="font-size: 0.78rem; font-weight: 600; padding: 0.25rem 0.65rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">Live / On-Campus</span>
                            <span style="font-size: 0.78rem; font-weight: 600; padding: 0.25rem 0.65rem; border-radius: 6px; background: #e0f2fe; color: #0369a1; border: 1px solid #bae6fd;">Custom Syllabus</span>
                        </div>
                    </div>
                </div>

                <div style="padding: 0 1.75rem 1.75rem 1.75rem; margin-top: auto;">
                    <a href="{{ route('trainings.index') }}" class="btn-navy" style="width: 100%; text-align: center; display: block; padding: 0.85rem 1.5rem; font-weight: 700; border-radius: 12px;" id="overview-explore-trainings-btn">
                        Explore Trainings <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                    </a>
                </div>
            </div>

            <!-- 3. CONSULTATION OVERVIEW SECTION -->
            <div style="background: #ffffff; border-radius: 20px; border: 1px solid #e2e8f0; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); transition: transform 0.3s ease, box-shadow 0.3s ease; height: 100%;" class="overview-card-editorial">
                <div>
                    <!-- Visual Top Header Image -->
                    <div style="height: 170px; position: relative; overflow: hidden; background: #0f172a;">
                        <img src="{{ asset('images/hero_img_1.jpg') }}" alt="Consultation Overview" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.9;">
                        <div style="position: absolute; top: 14px; left: 14px; background: rgba(15, 23, 42, 0.85); backdrop-filter: blur(8px); border: 1px solid rgba(255, 255, 255, 0.2); color: #fef08a; font-size: 0.75rem; font-weight: 700; padding: 0.3rem 0.75rem; border-radius: 20px; text-transform: uppercase; letter-spacing: 0.8px;">
                            <i class="fas fa-user-tie" style="margin-right: 4px;"></i> 1-on-1 Mentorship
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div style="padding: 1.75rem 1.75rem 1rem 1.75rem;">
                        <h3 style="font-family: var(--font-heading); font-size: 1.45rem; font-weight: 700; color: #0f172a; margin-bottom: 0.6rem;">Consultation</h3>
                        <p style="color: #475569; font-size: 0.95rem; line-height: 1.65; margin-bottom: 1.25rem;">
                            Dedicated 1-on-1 personalized academic advisory and mentorship for PhD candidates, Master's thesis defense, Scopus journal revisions, and international grant proposals.
                        </p>

                        <!-- Feature Badges Row -->
                        <div style="display: flex; flex-wrap: wrap; gap: 0.45rem; margin-bottom: 1.25rem;">
                            <span style="font-size: 0.78rem; font-weight: 600; padding: 0.25rem 0.65rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">PhD Dissertation</span>
                            <span style="font-size: 0.78rem; font-weight: 600; padding: 0.25rem 0.65rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">Peer-Review Support</span>
                            <span style="font-size: 0.78rem; font-weight: 600; padding: 0.25rem 0.65rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">Grant Strategy</span>
                            <span style="font-size: 0.78rem; font-weight: 600; padding: 0.25rem 0.65rem; border-radius: 6px; background: #f0fdf4; color: #166534; border: 1px solid #bbf7d0;">Zoom / Teams</span>
                        </div>
                    </div>
                </div>

                <div style="padding: 0 1.75rem 1.75rem 1.75rem; margin-top: auto;">
                    <a href="{{ route('consultation.index') }}" class="btn-navy" style="width: 100%; text-align: center; display: block; padding: 0.85rem 1.5rem; font-weight: 700; border-radius: 12px;" id="overview-book-consultation-btn">
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

<!-- 3-COLUMN VALUE PROPOSITION FEATURE SECTION (Custom Dual-Tone Vector Badges & Authentic Icons) -->
<section style="background: #f8fafc; padding: 4.5rem 0; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            
            <!-- Card 1: Academic & Career Impact -->
            <div style="background: #ffffff; padding: 2.25rem 2rem; border-radius: 16px; border: 1px solid #e2e8f0; display: flex; align-items: flex-start; gap: 1.5rem; box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04); transition: transform 0.25s ease;" class="value-prop-card">
                <div style="width: 66px; height: 66px; border-radius: 16px; background: rgba(30, 58, 138, 0.07); border: 1px solid rgba(30, 58, 138, 0.15); color: #1e3a8a; display: flex; align-items: center; justify-content: center; font-size: 1.65rem; flex-shrink: 0; box-shadow: 0 4px 10px rgba(30, 58, 138, 0.06);">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <div>
                    <h3 style="font-family: var(--font-heading); font-size: 1.35rem; font-weight: 700; color: #0f172a; margin-bottom: 0.5rem;">Academic & Career Impact</h3>
                    <p style="color: #475569; font-size: 0.94rem; line-height: 1.65; margin: 0;">
                        Our scholars publish in top Scopus Q1 and SSCI journals worldwide, securing faculty tenure, post-doctoral fellowships, and executive research leadership roles.
                    </p>
                </div>
            </div>

            <!-- Card 2: Institutional Recognition -->
            <div style="background: #ffffff; padding: 2.25rem 2rem; border-radius: 16px; border: 1px solid #e2e8f0; display: flex; align-items: flex-start; gap: 1.5rem; box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04); transition: transform 0.25s ease;" class="value-prop-card">
                <div style="width: 66px; height: 66px; border-radius: 16px; background: rgba(30, 58, 138, 0.07); border: 1px solid rgba(30, 58, 138, 0.15); color: #1e3a8a; display: flex; align-items: center; justify-content: center; font-size: 1.65rem; flex-shrink: 0; box-shadow: 0 4px 10px rgba(30, 58, 138, 0.06);">
                    <i class="fas fa-university"></i>
                </div>
                <div>
                    <h3 style="font-family: var(--font-heading); font-size: 1.35rem; font-weight: 700; color: #0f172a; margin-bottom: 0.5rem;">Institutional Recognition</h3>
                    <p style="color: #475569; font-size: 0.94rem; line-height: 1.65; margin: 0;">
                        Our training modules and advisory frameworks are recognized across HEC Pakistan, Ministry of Higher Education (Oman), and leading university ORIC centers.
                    </p>
                </div>
            </div>

            <!-- Card 3: Methodological Mastery -->
            <div style="background: #ffffff; padding: 2.25rem 2rem; border-radius: 16px; border: 1px solid #e2e8f0; display: flex; align-items: flex-start; gap: 1.5rem; box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04); transition: transform 0.25s ease;" class="value-prop-card">
                <div style="width: 66px; height: 66px; border-radius: 16px; background: rgba(30, 58, 138, 0.07); border: 1px solid rgba(30, 58, 138, 0.15); color: #1e3a8a; display: flex; align-items: center; justify-content: center; font-size: 1.65rem; flex-shrink: 0; box-shadow: 0 4px 10px rgba(30, 58, 138, 0.06);">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <div>
                    <h3 style="font-family: var(--font-heading); font-size: 1.35rem; font-weight: 700; color: #0f172a; margin-bottom: 0.5rem;">Methodological Mastery</h3>
                    <p style="color: #475569; font-size: 0.94rem; line-height: 1.65; margin: 0;">
                        Gain hands-on mastery of PRISMA 2020 literature review matrices, NVivo/MAXQDA qualitative coding, VOSviewer science mapping, and SmartPLS/AMOS SEM.
                    </p>
                </div>
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
