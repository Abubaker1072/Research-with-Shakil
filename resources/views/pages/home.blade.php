@extends('layouts.app')

@section('title', 'Dr. Muhammad Shakil Ahmad | Senior Lecturer & Academic Researcher')

@section('content')

<!-- Hero Section with Campus Background Image -->
<section class="mdi-hero-section">
    <div class="container hero-grid">
        <!-- Left Side: Title, Description & Primary CTA -->
        <div>
            <div style="font-size: 0.85rem; font-weight: 800; color: #fef08a; letter-spacing: 1.5px; text-transform: uppercase; margin-bottom: 0.5rem;">TEESSIDE INTERNATIONAL BUSINESS SCHOOL (UK)</div>
            <h1 class="hero-title-mdi">
                Research with Shakil
            </h1>
            <p class="hero-text-mdi" style="font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.25rem;">
                Dr. Muhammad Shakil Ahmad is a Senior Lecturer at Teesside International Business School, Teesside University (UK), and a research methodology, project management, and HR expert who has trained over 16,000 learners worldwide through online courses, live training programs, and one-on-one consultations. He holds a PhD in Management, has published 53+ papers in SSCI-indexed journals (H-index 39), and has 15+ years of academic experience across the UK, Oman, Pakistan, and South Korea.
            </p>
            <p style="color: #cbd5e1; font-size: 0.95rem; margin-bottom: 2rem; line-height: 1.6;">
                Several publications feature in Scopus Q1 and SSCI indexed journals across leading global publishers in the UK, USA, Europe, Middle East, and Asia.
            </p>
            
            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                <a href="#booking-form-section" class="btn-navy" id="hero-get-in-touch" style="padding: 0.9rem 2.2rem; font-weight: 800;">
                    BOOK CONSULTATION <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                </a>
                <a href="/courses" class="btn-light-surface" style="padding: 0.9rem 1.8rem; font-weight: 700;">
                    Explore Online Courses
                </a>
            </div>
        </div>

        <!-- Right Side: Official Hero Portrait Photo -->
        <div>
            <div style="border-radius: 24px; overflow: hidden; border: 4px solid rgba(255,255,255,0.15); box-shadow: 0 20px 45px rgba(0,0,0,0.3); max-width: 440px; margin: 0 auto; background: #0f172a;">
                <img src="{{ asset('images/dr_shakil_hero.jpg') }}" alt="Dr. Muhammad Shakil Ahmad - Senior Lecturer at Teesside University UK" style="width: 100%; height: 500px; object-fit: cover; display: block;">
            </div>
        </div>
    </div>
</section>

<!-- Compact Stat Bar with Zero-to-Target Animated Counters -->
<section class="stats-bar-compact" id="stats-bar-trigger">
    <div class="container stats-grid-compact">
        <div class="stat-card-compact">
            <div class="stat-number-compact" data-target="16000">0</div>
            <div class="stat-label-compact">Global Learners</div>
        </div>
        <div class="stat-card-compact">
            <div class="stat-number-compact" data-target="53">0</div>
            <div class="stat-label-compact">SSCI / Scopus Papers</div>
        </div>
        <div class="stat-card-compact">
            <div class="stat-number-compact" data-target="39">0</div>
            <div class="stat-label-compact">Google Scholar H-Index</div>
        </div>
        <div class="stat-card-compact">
            <div class="stat-number-compact" data-target="{{ $stats['courses'] }}">0</div>
            <div class="stat-label-compact">Udemy Courses</div>
        </div>
    </div>
</section>







<!-- THREE HOMEPAGE OVERVIEW SECTIONS (Courses, Trainings, Consultation) -->
<section class="section-padding" style="background: var(--surface);" id="overview-section">
    <div class="container">
        <div class="section-header text-center" style="margin-bottom: 3rem;">
            <div class="section-subtitle">ACADEMIC OFFERINGS</div>
            <h2 class="section-title">Academic Programs & Advisory Overview</h2>
            <p style="color: var(--muted); max-width: 650px; margin: 0 auto; font-size: 1rem;">
                Explore high-impact online courses, institutional training workshops, and personalized 1-on-1 consultation services below.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem; align-items: stretch;">
            
            <!-- 1. COURSES OVERVIEW SECTION -->
            <div style="background: #ffffff; border-radius: 18px; border: 1px solid #e2e8f0; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); transition: transform 0.3s ease, box-shadow 0.3s ease; height: 100%; cursor: pointer;" class="overview-card-editorial" onclick="window.location.href='/courses'">
                <div>
                    <div style="height: 160px; position: relative; overflow: hidden; background: #0f172a;">
                        <img src="{{ asset('images/courses_overview_banner.png') }}" alt="Courses Overview" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.95;">
                        <div style="position: absolute; top: 12px; left: 12px; background: rgba(15, 23, 42, 0.85); backdrop-filter: blur(8px); border: 1px solid rgba(255, 255, 255, 0.2); color: #fef08a; font-size: 0.75rem; font-weight: 700; padding: 0.28rem 0.7rem; border-radius: 20px; text-transform: uppercase; letter-spacing: 0.8px;">
                            <i class="fas fa-graduation-cap" style="margin-right: 4px;"></i> Online Bootcamps
                        </div>
                    </div>

                    <div style="padding: 1.4rem 1.4rem 0.85rem 1.4rem;">
                        <div style="min-height: 2.8rem; display: flex; align-items: center; margin-bottom: 0.4rem;">
                            <h3 style="font-family: var(--font-heading); font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0;">Courses</h3>
                        </div>
                        <p style="color: #475569; font-size: 0.9rem; line-height: 1.6; margin-bottom: 1rem; min-height: 4.8rem;">
                            Comprehensive self-paced video bootcamps covering Systematic Literature Reviews, Qualitative & Thematic Analysis (NVivo/MAXQDA), Meta-Analysis, Bibliometrics, and Scopus Q1 Journal Writing.
                        </p>

                        <div style="display: flex; flex-wrap: wrap; gap: 0.4rem; margin-bottom: 1rem; min-height: 52px; align-content: flex-start;">
                            <span style="font-size: 0.76rem; font-weight: 600; padding: 0.22rem 0.6rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">PRISMA 2020</span>
                            <span style="font-size: 0.76rem; font-weight: 600; padding: 0.22rem 0.6rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">NVivo & MAXQDA</span>
                            <span style="font-size: 0.76rem; font-weight: 600; padding: 0.22rem 0.6rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">VOSviewer</span>
                            <span style="font-size: 0.76rem; font-weight: 600; padding: 0.22rem 0.6rem; border-radius: 6px; background: #fef9c3; color: #854d0e; border: 1px solid #fef08a;">Direct Udemy Links</span>
                        </div>
                    </div>
                </div>

                <div style="padding: 0 1.4rem 1.4rem 1.4rem; margin-top: auto;">
                    <a href="/courses" class="btn-navy" style="width: 100%; text-align: center; display: block; padding: 0.75rem 1.25rem; font-size: 0.88rem; font-weight: 700; border-radius: 10px;" id="overview-view-courses-btn" onclick="event.stopPropagation();">
                        View All Courses <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                    </a>
                </div>
            </div>

            <!-- 2. TRAININGS OVERVIEW SECTION -->
            <div style="background: #ffffff; border-radius: 18px; border: 1px solid #e2e8f0; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); transition: transform 0.3s ease, box-shadow 0.3s ease; height: 100%; cursor: pointer;" class="overview-card-editorial" onclick="window.location.href='/trainings'">
                <div>
                    <div style="height: 160px; position: relative; overflow: hidden; background: #0f172a;">
                        <img src="{{ asset('images/trainings_overview_banner.jpg') }}" alt="Trainings Overview" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.95;">
                        <div style="position: absolute; top: 12px; left: 12px; background: rgba(15, 23, 42, 0.85); backdrop-filter: blur(8px); border: 1px solid rgba(255, 255, 255, 0.2); color: #fef08a; font-size: 0.75rem; font-weight: 700; padding: 0.28rem 0.7rem; border-radius: 20px; text-transform: uppercase; letter-spacing: 0.8px;">
                            <i class="fas fa-chalkboard-teacher" style="margin-right: 4px;"></i> Institutional Workshops
                        </div>
                    </div>

                    <div style="padding: 1.4rem 1.4rem 0.85rem 1.4rem;">
                        <div style="min-height: 2.8rem; display: flex; align-items: center; margin-bottom: 0.4rem;">
                            <h3 style="font-family: var(--font-heading); font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0; line-height: 1.25;">Live Trainings & Workshops</h3>
                        </div>
                        <p style="color: #475569; font-size: 0.9rem; line-height: 1.6; margin-bottom: 1rem; min-height: 4.8rem;">
                            Cohort-based programs tailored to your goals built for universities, HR teams, and organizations that want practical skill development. Delivered online or in person.
                        </p>

                        <div style="display: flex; flex-wrap: wrap; gap: 0.4rem; margin-bottom: 1rem; min-height: 52px; align-content: flex-start;">
                            <span style="font-size: 0.76rem; font-weight: 600; padding: 0.22rem 0.6rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">Faculty Seminars</span>
                            <span style="font-size: 0.76rem; font-weight: 600; padding: 0.22rem 0.6rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">ORIC Building</span>
                            <span style="font-size: 0.76rem; font-weight: 600; padding: 0.22rem 0.6rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">Live / On-Campus</span>
                            <span style="font-size: 0.76rem; font-weight: 600; padding: 0.22rem 0.6rem; border-radius: 6px; background: #e0f2fe; color: #0369a1; border: 1px solid #bae6fd;">Custom Syllabus</span>
                        </div>
                    </div>
                </div>

                <div style="padding: 0 1.4rem 1.4rem 1.4rem; margin-top: auto;">
                    <a href="/trainings" class="btn-navy" style="width: 100%; text-align: center; display: block; padding: 0.75rem 1.25rem; font-size: 0.88rem; font-weight: 700; border-radius: 10px;" id="overview-explore-trainings-btn" onclick="event.stopPropagation();">
                        Explore Trainings <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                    </a>
                </div>
            </div>

            <!-- 3. CONSULTATION OVERVIEW SECTION -->
            <div style="background: #ffffff; border-radius: 18px; border: 1px solid #e2e8f0; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); transition: transform 0.3s ease, box-shadow 0.3s ease; height: 100%; cursor: pointer;" class="overview-card-editorial" onclick="window.location.href='/consultation'">
                <div>
                    <div style="height: 160px; position: relative; overflow: hidden; background: #0f172a;">
                        <img src="{{ asset('images/consultation_overview_banner.jpg') }}" alt="Consultation Overview" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.95;">
                        <div style="position: absolute; top: 12px; left: 12px; background: rgba(15, 23, 42, 0.85); backdrop-filter: blur(8px); border: 1px solid rgba(255, 255, 255, 0.2); color: #fef08a; font-size: 0.75rem; font-weight: 700; padding: 0.28rem 0.7rem; border-radius: 20px; text-transform: uppercase; letter-spacing: 0.8px;">
                            <i class="fas fa-user-tie" style="margin-right: 4px;"></i> 1-on-1 Mentorship
                        </div>
                    </div>

                    <div style="padding: 1.4rem 1.4rem 0.85rem 1.4rem;">
                        <div style="min-height: 2.8rem; display: flex; align-items: center; margin-bottom: 0.4rem;">
                            <h3 style="font-family: var(--font-heading); font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0;">Consultation</h3>
                        </div>
                        <p style="color: #475569; font-size: 0.9rem; line-height: 1.6; margin-bottom: 1rem; min-height: 4.8rem;">
                            Dedicated 1-on-1 personalized academic advisory and mentorship for PhD candidates, Master's thesis defense, Scopus journal revisions, and international grant proposals.
                        </p>

                        <div style="display: flex; flex-wrap: wrap; gap: 0.4rem; margin-bottom: 1rem; min-height: 52px; align-content: flex-start;">
                            <span style="font-size: 0.76rem; font-weight: 600; padding: 0.22rem 0.6rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">PhD Dissertation</span>
                            <span style="font-size: 0.76rem; font-weight: 600; padding: 0.22rem 0.6rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">Peer-Review Support</span>
                            <span style="font-size: 0.76rem; font-weight: 600; padding: 0.22rem 0.6rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">Grant Strategy</span>
                            <span style="font-size: 0.76rem; font-weight: 600; padding: 0.22rem 0.6rem; border-radius: 6px; background: #f0fdf4; color: #166534; border: 1px solid #bbf7d0;">Zoom / Teams</span>
                        </div>
                    </div>
                </div>

                <div style="padding: 0 1.4rem 1.4rem 1.4rem; margin-top: auto;">
                    <a href="/consultation" class="btn-navy" style="width: 100%; text-align: center; display: block; padding: 0.75rem 1.25rem; font-size: 0.88rem; font-weight: 700; border-radius: 10px;" id="overview-book-consultation-btn" onclick="event.stopPropagation();">
                        Book Consultation <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SCHOLAR QUOTE SECTION -->
<section class="scholar-quote-section" id="scholar-quote-trigger">
    <div class="container">
        <div class="scholar-quote-grid-photo-left">
            <div class="scroll-quote-img-left" id="quote-img-element">
                <div class="scholar-photo-frame">
                    <img src="{{ asset('images/hero_dr_shakil_cutout_v2.jpg') }}" alt="Dr. Muhammad Shakil Ahmad" class="scholar-photo-img">
                </div>
            </div>

            <div class="scroll-quote-text-right" id="quote-text-element">
                <blockquote class="scholar-quote-text">
                    “Enrolling in the Research & Mentorship program with Dr. Shakil has been a transformative decision that has sharpened academic acumen and publication success”
                </blockquote>

                <div class="scholar-author-name">— Dr. Ayesha Rehman</div>
                <div class="scholar-author-tag">SCOPUS Q1 PUBLISHED SCHOLAR 2024</div>
            </div>
        </div>
    </div>
</section>

<!-- 3-COLUMN VALUE PROPOSITION FEATURE SECTION (VN2, Item 5 & 6 Light Blue Accent Contrast) -->
<section style="background: #f0f7ff; padding: 4.5rem 0; border-top: 1px solid #bae6fd; border-bottom: 1px solid #bae6fd;">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            
            <!-- Card 1: Academic & Career Impact (VN2, Item 5) -->
            <div style="background: #ffffff; padding: 2.25rem 2rem; border-radius: 16px; border: 1px solid #cbd5e1; display: flex; align-items: flex-start; gap: 1.5rem; box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04); transition: transform 0.25s ease;" class="value-prop-card">
                <div style="width: 66px; height: 66px; border-radius: 16px; background: rgba(30, 58, 138, 0.08); border: 1px solid rgba(30, 58, 138, 0.18); color: #1e3a8a; display: flex; align-items: center; justify-content: center; font-size: 1.65rem; flex-shrink: 0; box-shadow: 0 4px 10px rgba(30, 58, 138, 0.06);">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <div>
                    <h3 style="font-family: var(--font-heading); font-size: 1.35rem; font-weight: 700; color: #0f172a; margin-bottom: 0.5rem;">Live Trainings & Workshops</h3>
                    <p style="color: #475569; font-size: 0.94rem; line-height: 1.65; margin: 0;">
                        I design cohort-based programs tailored to your goals built for universities, HR teams, and organizations that want practical, lasting skill development. Delivered online or in person, wherever your people are.
                    </p>
                </div>
            </div>

            <!-- Card 2: Institutional Recognition -->
            <div style="background: #ffffff; padding: 2.25rem 2rem; border-radius: 16px; border: 1px solid #cbd5e1; display: flex; align-items: flex-start; gap: 1.5rem; box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04); transition: transform 0.25s ease;" class="value-prop-card">
                <div style="width: 66px; height: 66px; border-radius: 16px; background: rgba(30, 58, 138, 0.08); border: 1px solid rgba(30, 58, 138, 0.18); color: #1e3a8a; display: flex; align-items: center; justify-content: center; font-size: 1.65rem; flex-shrink: 0; box-shadow: 0 4px 10px rgba(30, 58, 138, 0.06);">
                    <i class="fas fa-university"></i>
                </div>
                <div>
                    <h3 style="font-family: var(--font-heading); font-size: 1.35rem; font-weight: 700; color: #0f172a; margin-bottom: 0.5rem;">Institutional Recognition</h3>
                    <p style="color: #475569; font-size: 0.94rem; line-height: 1.65; margin: 0;">
                        Training modules and advisory frameworks are recognized across HEC Pakistan, Ministry of Higher Education (Oman), and leading university ORIC centers.
                    </p>
                </div>
            </div>

            <!-- Card 3: Methodological Mastery -->
            <div style="background: #ffffff; padding: 2.25rem 2rem; border-radius: 16px; border: 1px solid #cbd5e1; display: flex; align-items: flex-start; gap: 1.5rem; box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04); transition: transform 0.25s ease;" class="value-prop-card">
                <div style="width: 66px; height: 66px; border-radius: 16px; background: rgba(30, 58, 138, 0.08); border: 1px solid rgba(30, 58, 138, 0.18); color: #1e3a8a; display: flex; align-items: center; justify-content: center; font-size: 1.65rem; flex-shrink: 0; box-shadow: 0 4px 10px rgba(30, 58, 138, 0.06);">
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

<!-- NINE DOMAINS. REAL DEPTH. SECTION WITH RESEARCH IMAGERY GRID (VN4, Item 9) -->
<section class="domains-section">
    <div class="container">
        
        <div class="domains-grid">
            <div>
                <div class="domains-subtitle">RESEARCH & TRAINING DOMAINS</div>
                <h2 class="domains-headline">Nine domains.<br>Real depth.</h2>
                <p style="color: #475569; font-size: 1rem; line-height: 1.65; margin-top: 1rem;">
                    Comprehensive methodological expertise spanning systematic reviews, qualitative software coding, quantitative structural modeling, and journal publishing.
                </p>
                <div style="margin-top: 1.75rem; border-radius: 16px; overflow: hidden; border: 1px solid #cbd5e1; box-shadow: 0 12px 28px rgba(0, 0, 0, 0.1);">
                    <img src="{{ asset('images/dr_shakil_teaching_symposium.jpg') }}" alt="Dr. Muhammad Shakil Ahmad presenting at Global Reach Symposium" style="width: 100%; height: 310px; object-fit: cover; object-position: center 20%; display: block;">
                </div>
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
    <div class="container" style="max-width: 660px;">
        <div style="background: #ffffff; padding: 1.75rem 2rem; border-radius: 16px; border: 1px solid var(--border); box-shadow: 0 10px 30px rgba(0,0,0,0.06);">
            <div class="section-header" style="margin-bottom: 1.25rem;">
                <div class="section-subtitle">GET IN TOUCH</div>
                <h2 class="section-title" style="font-size: 1.65rem; margin-bottom: 0.2rem;">Book a Consultation</h2>
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
                    <textarea name="message" class="form-control" placeholder="Provide details regarding research topic or defense target..." required></textarea>
                </div>

                <div style="text-align: center; margin-top: 1.25rem;">
                    <button type="submit" class="btn-navy" style="padding: 0.7rem 2.2rem; font-size: 0.9rem; border-radius: 10px;" id="home-submit-btn">
                        Submit Application
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- WHAT LEARNERS ARE SAYING SECTION -->
<section class="section-padding" style="background: #ffffff; border-top: 1px solid #e2e8f0;">
    <div class="container">
        
        <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 2.25rem; flex-wrap: wrap; gap: 1.25rem;">
            <div>
                <div class="section-subtitle">STUDENT REVIEWS & ACADEMIC IMPACT</div>
                <h2 class="section-title" style="margin-bottom: 0.4rem;">What Scholars & Learners Say</h2>
                <p style="color: var(--muted); max-width: 650px; margin: 0; font-size: 0.95rem;">
                    Feedback from Pakistani & International PhD candidates, Master's scholars, and university faculty mentored by Dr. Muhammad Shakil Ahmad.
                </p>
            </div>
            
            <!-- Slider Arrow Controls -->
            <div style="display: flex; gap: 0.75rem; align-items: center;">
                <button id="testimonial-prev-btn" style="width: 44px; height: 44px; border-radius: 50%; border: 1px solid #cbd5e1; background: #ffffff; color: #0f172a; font-size: 1rem; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.2s ease; box-shadow: 0 2px 8px rgba(0,0,0,0.04);" aria-label="Previous Testimonials" onmouseover="this.style.background='#0f172a'; this.style.color='#ffffff'; this.style.borderColor='#0f172a';" onmouseout="this.style.background='#ffffff'; this.style.color='#0f172a'; this.style.borderColor='#cbd5e1';">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button id="testimonial-next-btn" style="width: 44px; height: 44px; border-radius: 50%; border: 1px solid #cbd5e1; background: #ffffff; color: #0f172a; font-size: 1rem; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.2s ease; box-shadow: 0 2px 8px rgba(0,0,0,0.04);" aria-label="Next Testimonials" onmouseover="this.style.background='#0f172a'; this.style.color='#ffffff'; this.style.borderColor='#0f172a';" onmouseout="this.style.background='#ffffff'; this.style.color='#0f172a'; this.style.borderColor='#cbd5e1';">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>

        <!-- 2-Card Horizontal Scroll Track -->
        <div id="testimonialTrack" style="display: flex; gap: 1.5rem; overflow-x: auto; scroll-behavior: smooth; scrollbar-width: none; -ms-overflow-style: none; padding: 0.5rem 0.25rem 1.5rem 0.25rem;">
            
            <!-- Review Card 1 (Pakistani PhD Scholar) -->
            <div style="flex: 0 0 calc(50% - 0.75rem); box-sizing: border-box; background: #f8fafc; border: 1px solid #cbd5e1; border-radius: 16px; padding: 1.75rem; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 4px 12px rgba(0,0,0,0.03);" class="testimonial-slide-card">
                <div>
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.75rem;">
                        <div style="color: #eab308;">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <span style="font-size: 0.75rem; font-weight: 700; background: #e0f2fe; color: #0369a1; padding: 0.2rem 0.6rem; border-radius: 6px;">Scopus Q1 Accepted</span>
                    </div>
                    <blockquote style="font-size: 0.95rem; color: #334155; line-height: 1.65; margin: 0 0 1.25rem 0; font-style: italic;">
                        “Dr. Shakil's PRISMA 2020 systematic literature review framework was instrumental in getting my PhD paper accepted in a Scopus Q1 journal. His step-by-step matrix eliminated months of confusion during my data synthesis phase.”
                    </blockquote>
                </div>
                <div style="border-top: 1px solid #e2e8f0; padding-top: 0.85rem; display: flex; align-items: center; gap: 0.75rem;">
                    <div style="width: 42px; height: 42px; border-radius: 50%; background: #0f172a; color: #fef08a; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.9rem;">TM</div>
                    <div>
                        <div style="font-weight: 800; color: #0f172a; font-size: 0.92rem;">Dr. Tariq Mahmood</div>
                        <div style="font-weight: 500; color: #64748b; font-size: 0.8rem;">Assistant Professor & PhD Scholar (Pakistan)</div>
                    </div>
                </div>
            </div>

            <!-- Review Card 2 (International UK Scholar) -->
            <div style="flex: 0 0 calc(50% - 0.75rem); box-sizing: border-box; background: #f8fafc; border: 1px solid #cbd5e1; border-radius: 16px; padding: 1.75rem; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 4px 12px rgba(0,0,0,0.03);" class="testimonial-slide-card">
                <div>
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.75rem;">
                        <div style="color: #eab308;">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <span style="font-size: 0.75rem; font-weight: 700; background: #fef9c3; color: #854d0e; padding: 0.2rem 0.6rem; border-radius: 6px;">Master's Distinction</span>
                    </div>
                    <blockquote style="font-size: 0.95rem; color: #334155; line-height: 1.65; margin: 0 0 1.25rem 0; font-style: italic;">
                        “Taking Dr. Shakil's NVivo qualitative coding bootcamp transformed my dissertation. His practical thematic analysis framework helped me structure complex interview data seamlessly and pass my defense with distinction.”
                    </blockquote>
                </div>
                <div style="border-top: 1px solid #e2e8f0; padding-top: 0.85rem; display: flex; align-items: center; gap: 0.75rem;">
                    <div style="width: 42px; height: 42px; border-radius: 50%; background: #1e3a8a; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.9rem;">EV</div>
                    <div>
                        <div style="font-weight: 800; color: #0f172a; font-size: 0.92rem;">Eleanor Vance</div>
                        <div style="font-weight: 500; color: #64748b; font-size: 0.8rem;">Master's Graduate (Teesside University, UK)</div>
                    </div>
                </div>
            </div>

            <!-- Review Card 3 (Pakistani University Faculty) -->
            <div style="flex: 0 0 calc(50% - 0.75rem); box-sizing: border-box; background: #f8fafc; border: 1px solid #cbd5e1; border-radius: 16px; padding: 1.75rem; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 4px 12px rgba(0,0,0,0.03);" class="testimonial-slide-card">
                <div>
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.75rem;">
                        <div style="color: #eab308;">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <span style="font-size: 0.75rem; font-weight: 700; background: #f0fdf4; color: #166534; padding: 0.2rem 0.6rem; border-radius: 6px;">Faculty Workshop</span>
                    </div>
                    <blockquote style="font-size: 0.95rem; color: #334155; line-height: 1.65; margin: 0 0 1.25rem 0; font-style: italic;">
                        “We invited Dr. Shakil for an institutional research workshop. His hands-on training on VOSviewer science mapping and academic grant proposals directly boosted our faculty publication output in SSCI journals.”
                    </blockquote>
                </div>
                <div style="border-top: 1px solid #e2e8f0; padding-top: 0.85rem; display: flex; align-items: center; gap: 0.75rem;">
                    <div style="width: 42px; height: 42px; border-radius: 50%; background: #065f46; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.9rem;">AK</div>
                    <div>
                        <div style="font-weight: 800; color: #0f172a; font-size: 0.92rem;">Dr. Aisha Khan</div>
                        <div style="font-weight: 500; color: #64748b; font-size: 0.8rem;">Head of Department & ORIC Member (Lahore, Pakistan)</div>
                    </div>
                </div>
            </div>

            <!-- Review Card 4 (Middle East / Oman Scholar) -->
            <div style="flex: 0 0 calc(50% - 0.75rem); box-sizing: border-box; background: #f8fafc; border: 1px solid #cbd5e1; border-radius: 16px; padding: 1.75rem; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 4px 12px rgba(0,0,0,0.03);" class="testimonial-slide-card">
                <div>
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.75rem;">
                        <div style="color: #eab308;">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <span style="font-size: 0.75rem; font-weight: 700; background: #fef08a; color: #854d0e; padding: 0.2rem 0.6rem; border-radius: 6px;">DBA Dissertation</span>
                    </div>
                    <blockquote style="font-size: 0.95rem; color: #334155; line-height: 1.65; margin: 0 0 1.25rem 0; font-style: italic;">
                        “1-on-1 mentorship with Dr. Shakil gave me the exact blueprint needed for my DBA dissertation defense. His guidance on organizational innovation and project management literature saved me over a year of revision.”
                    </blockquote>
                </div>
                <div style="border-top: 1px solid #e2e8f0; padding-top: 0.85rem; display: flex; align-items: center; gap: 0.75rem;">
                    <div style="width: 42px; height: 42px; border-radius: 50%; background: #0369a1; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.9rem;">AS</div>
                    <div>
                        <div style="font-weight: 800; color: #0f172a; font-size: 0.92rem;">Al-Mughairi Salim</div>
                        <div style="font-weight: 500; color: #64748b; font-size: 0.8rem;">DBA Executive Candidate (Sultanate of Oman)</div>
                    </div>
                </div>
            </div>

            <!-- Review Card 5 (Pakistani Master's Scholar) -->
            <div style="flex: 0 0 calc(50% - 0.75rem); box-sizing: border-box; background: #f8fafc; border: 1px solid #cbd5e1; border-radius: 16px; padding: 1.75rem; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 4px 12px rgba(0,0,0,0.03);" class="testimonial-slide-card">
                <div>
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.75rem;">
                        <div style="color: #eab308;">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <span style="font-size: 0.75rem; font-weight: 700; background: #e0f2fe; color: #0369a1; padding: 0.2rem 0.6rem; border-radius: 6px;">Udemy Bootcamp</span>
                    </div>
                    <blockquote style="font-size: 0.95rem; color: #334155; line-height: 1.65; margin: 0 0 1.25rem 0; font-style: italic;">
                        “Enrolling in Dr. Shakil's Udemy meta-analysis course made quantitative data synthesis effortless. The practical Excel calculation templates were crystal clear and directly applicable to my research paper.”
                    </blockquote>
                </div>
                <div style="border-top: 1px solid #e2e8f0; padding-top: 0.85rem; display: flex; align-items: center; gap: 0.75rem;">
                    <div style="width: 42px; height: 42px; border-radius: 50%; background: #1e3a8a; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.9rem;">HS</div>
                    <div>
                        <div style="font-weight: 800; color: #0f172a; font-size: 0.92rem;">Muhammad Hamza Siddiqui</div>
                        <div style="font-weight: 500; color: #64748b; font-size: 0.8rem;">Postgraduate Scholar (Karachi, Pakistan)</div>
                    </div>
                </div>
            </div>

            <!-- Review Card 6 (International South Korea Researcher) -->
            <div style="flex: 0 0 calc(50% - 0.75rem); box-sizing: border-box; background: #f8fafc; border: 1px solid #cbd5e1; border-radius: 16px; padding: 1.75rem; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 4px 12px rgba(0,0,0,0.03);" class="testimonial-slide-card">
                <div>
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.75rem;">
                        <div style="color: #eab308;">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <span style="font-size: 0.75rem; font-weight: 700; background: #f0fdf4; color: #166534; padding: 0.2rem 0.6rem; border-radius: 6px;">Journal Revision</span>
                    </div>
                    <blockquote style="font-size: 0.95rem; color: #334155; line-height: 1.65; margin: 0 0 1.25rem 0; font-style: italic;">
                        “Dr. Shakil is a master research educator. His guidance on SmartPLS 4 structural equation modeling and peer-review response letters helped our team achieve final acceptance in a top SSCI journal.”
                    </blockquote>
                </div>
                <div style="border-top: 1px solid #e2e8f0; padding-top: 0.85rem; display: flex; align-items: center; gap: 0.75rem;">
                    <div style="width: 42px; height: 42px; border-radius: 50%; background: #0f172a; color: #fef08a; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.9rem;">MC</div>
                    <div>
                        <div style="font-weight: 800; color: #0f172a; font-size: 0.92rem;">Min-jun Choi</div>
                        <div style="font-weight: 500; color: #64748b; font-size: 0.8rem;">Post-Doctoral Researcher (Seoul, South Korea)</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@push('scripts')
<style>
    #testimonialTrack::-webkit-scrollbar {
        display: none;
    }
    @media (max-width: 768px) {
        .testimonial-slide-card {
            flex: 0 0 100% !important;
        }
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const track = document.getElementById('testimonialTrack');
        const prevBtn = document.getElementById('testimonial-prev-btn');
        const nextBtn = document.getElementById('testimonial-next-btn');

        if (track && prevBtn && nextBtn) {
            prevBtn.addEventListener('click', function() {
                const cardWidth = track.firstElementChild ? track.firstElementChild.offsetWidth + 24 : 400;
                track.scrollBy({ left: -cardWidth, behavior: 'smooth' });
            });

            nextBtn.addEventListener('click', function() {
                const cardWidth = track.firstElementChild ? track.firstElementChild.offsetWidth + 24 : 400;
                track.scrollBy({ left: cardWidth, behavior: 'smooth' });
            });
        }
    });
</script>
@endpush

<!-- Review & AggregateRating JSON-LD Schema -->
<script type="application/ld+json">
{
  "{{ '@context' }}": "https://schema.org",
  "@type": "Product",
  "name": "Research Methodology & Academic Writing Courses by Dr. Shakil Ahmad",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.6",
    "reviewCount": "1800"
  },
  "review": [
    {
      "@type": "Review",
      "author": { "@type": "Person", "name": "Dr. Tariq Mahmood" },
      "reviewRating": { "@type": "Rating", "ratingValue": "5" },
      "reviewBody": "Dr. Shakil's PRISMA 2020 systematic literature review framework was instrumental in getting my PhD paper accepted in a Scopus Q1 journal."
    },
    {
      "@type": "Review",
      "author": { "@type": "Person", "name": "Eleanor Vance" },
      "reviewRating": { "@type": "Rating", "ratingValue": "5" },
      "reviewBody": "Taking Dr. Shakil's NVivo qualitative coding bootcamp transformed my dissertation and helped me pass my defense with distinction."
    },
    {
      "@type": "Review",
      "author": { "@type": "Person", "name": "Dr. Aisha Khan" },
      "reviewRating": { "@type": "Rating", "ratingValue": "5" },
      "reviewBody": "His hands-on training on VOSviewer science mapping and academic grant proposals directly boosted our faculty publication output."
    }
  ]
}
</script>

<!-- FAQ SECTION (With FAQPage Schema for AEO / GEO) -->
<section class="section-padding" style="background: #f8fafc; border-top: 1px solid #e2e8f0;">
    <div class="container" style="max-width: 900px;">
        <div class="section-header text-center" style="margin-bottom: 3rem;">
            <div class="section-subtitle">FREQUENTLY ASKED QUESTIONS</div>
            <h2 class="section-title">Answers to Common Questions</h2>
            <p style="color: var(--muted); font-size: 1rem;">
                Quotable answers regarding Dr. Shakil's courses, institutional workshops, and consulting.
            </p>
        </div>

        <div style="display: flex; flex-direction: column; gap: 1rem;">
            
            <details style="background: #ffffff; border: 1px solid #cbd5e1; border-radius: 12px; padding: 1.25rem 1.5rem; cursor: pointer;">
                <summary style="font-weight: 800; font-size: 1.05rem; color: #0f172a;">
                    Who is Dr. Muhammad Shakil Ahmad?
                </summary>
                <p style="color: #475569; font-size: 0.96rem; line-height: 1.65; margin-top: 0.85rem;">
                    Dr. Muhammad Shakil Ahmad is a Senior Lecturer at Teesside International Business School, Teesside University (UK), specializing in Human Resource Management, Project Management, and Organizational Innovation, with 15+ years of academic experience and 53+ published papers in SSCI-indexed journals.
                </p>
            </details>

            <details style="background: #ffffff; border: 1px solid #cbd5e1; border-radius: 12px; padding: 1.25rem 1.5rem; cursor: pointer;">
                <summary style="font-weight: 800; font-size: 1.05rem; color: #0f172a;">
                    What courses does Dr. Shakil Ahmad offer?
                </summary>
                <p style="color: #475569; font-size: 0.96rem; line-height: 1.65; margin-top: 0.85rem;">
                    He offers on-demand courses covering research methodology, literature review writing, quantitative and qualitative data analysis, dissertation structuring, and academic publishing, available on Udemy with lifetime access.
                </p>
            </details>

            <details style="background: #ffffff; border: 1px solid #cbd5e1; border-radius: 12px; padding: 1.25rem 1.5rem; cursor: pointer;">
                <summary style="font-weight: 800; font-size: 1.05rem; color: #0f172a;">
                    Does Dr. Shakil Ahmad offer HR consulting?
                </summary>
                <p style="color: #475569; font-size: 0.96rem; line-height: 1.65; margin-top: 0.85rem;">
                    Yes. He provides one-on-one consultations and organizational training in HR policy design, talent strategy, and organizational innovation, drawing on his published research in the field.
                </p>
            </details>

            <details style="background: #ffffff; border: 1px solid #cbd5e1; border-radius: 12px; padding: 1.25rem 1.5rem; cursor: pointer;">
                <summary style="font-weight: 800; font-size: 1.05rem; color: #0f172a;">
                    Can universities book training with Dr. Shakil Ahmad?
                </summary>
                <p style="color: #475569; font-size: 0.96rem; line-height: 1.65; margin-top: 0.85rem;">
                    Yes. He delivers live, customized training programs for university research offices, PhD/DBA cohorts, and HR departments, available online or in person.
                </p>
            </details>

            <details style="background: #ffffff; border: 1px solid #cbd5e1; border-radius: 12px; padding: 1.25rem 1.5rem; cursor: pointer;">
                <summary style="font-weight: 800; font-size: 1.05rem; color: #0f172a;">
                    How many students has Dr. Shakil Ahmad trained?
                </summary>
                <p style="color: #475569; font-size: 0.96rem; line-height: 1.65; margin-top: 0.85rem;">
                    Over 16,000 learners worldwide, with 20,000+ students enrolled across his Udemy courses and 1,800+ five-star reviews.
                </p>
            </details>

        </div>
    </div>
</section>

<!-- FAQPage JSON-LD Schema for Homepage -->
<script type="application/ld+json">
{
  "{{ '@context' }}": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Who is Dr. Muhammad Shakil Ahmad?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Dr. Muhammad Shakil Ahmad is a Senior Lecturer at Teesside International Business School, Teesside University (UK), specializing in Human Resource Management, Project Management, and Organizational Innovation, with 15+ years of academic experience and 53+ published papers in SSCI-indexed journals."
      }
    },
    {
      "@type": "Question",
      "name": "What courses does Dr. Shakil Ahmad offer?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "He offers on-demand courses covering research methodology, literature review writing, quantitative and qualitative data analysis, dissertation structuring, and academic publishing, available on Udemy."
      }
    },
    {
      "@type": "Question",
      "name": "Does Dr. Shakil Ahmad offer HR consulting?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. He provides one-on-one consultations and organizational training in HR policy design, talent strategy, and organizational innovation, drawing on his published research in the field."
      }
    },
    {
      "@type": "Question",
      "name": "Can universities book training with Dr. Shakil Ahmad?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. He delivers live, customized training programs for university research offices, PhD/DBA cohorts, and HR departments, available online or in person."
      }
    },
    {
      "@type": "Question",
      "name": "How many students has Dr. Shakil Ahmad trained?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Over 16,000 learners worldwide, with 20,000+ students enrolled across his Udemy courses and 1,800+ five-star reviews."
      }
    }
  ]
}
</script>

<!-- READY TO TAKE THE NEXT STEP? CTA BANNER -->
<section style="background: #0f172a; color: #ffffff; padding: 4rem 0; text-align: center; border-top: 3px solid #eab308;">
    <div class="container" style="max-width: 800px;">
        <h2 style="font-family: var(--font-heading); font-size: 2.25rem; font-weight: 800; color: #ffffff; margin-bottom: 1rem;">
            Ready to Take the Next Step?
        </h2>
        <p style="color: #e2e8f0; font-size: 1.1rem; line-height: 1.7; max-width: 650px; margin: 0 auto 2rem auto;">
            Whether finishing a dissertation, upskilling a research team, or building a stronger HR strategy — get in touch with the advisory team today.
        </p>
        
        <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
            <a href="{{ route('courses.index') }}" class="btn-navy" style="background: #eab308; color: #0f172a; font-weight: 800; padding: 0.85rem 1.8rem;">
                Explore Courses <i class="fas fa-graduation-cap" style="margin-left: 4px;"></i>
            </a>
            <a href="{{ route('consultation.index') }}" class="btn-light-surface" style="padding: 0.85rem 1.8rem;">
                Book a Consultation <i class="fas fa-calendar-check" style="margin-left: 4px;"></i>
            </a>
            <a href="{{ route('contact.index') }}" style="padding: 0.85rem 1.8rem; background: rgba(255,255,255,0.15); color: #ffffff !important; border: 1px solid rgba(255,255,255,0.4); font-weight: 700; border-radius: 8px; display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; text-decoration: none; transition: all 0.2s ease;" onmouseover="this.style.background='rgba(255,255,255,0.25)';" onmouseout="this.style.background='rgba(255,255,255,0.15)';">
                Contact Advisory Team <i class="fas fa-envelope"></i>
            </a>
        </div>
    </div>
</section>

<!-- Intersection Observer Script for Scroll Animations & Counter Animation -->
<script>
document.addEventListener("DOMContentLoaded", function () {
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
                        const duration = 1800;
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
